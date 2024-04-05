<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\District;
use App\Models\Division;
use App\Models\Township;
use Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    public static function generateCustomerID()
    {
        $customers = DB::table('customers')->get()->last();
        $prefix = "NRF-C-";
    }
    public function index()
    {
	    $customers = collect();
        Customer::select('id', 'customer_name', 'phone_primary', 'email')
            ->orderBy('id')
            ->chunk(150, function ($results) use (&$customers) {
                $customers->push($results);
            });
        $customers = $customers->flatten();
        return view('customers.index',compact('customers'));
    }

    public function create()
    {
        $divisions = Division::orderby('division_name')->select('division_name','id')->get();
        return view('customers.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'customer_name' => 'required',
            'phone_primary' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:11',
            'phone_secondary' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:11|nullable',
            'address' => 'required',
        ]);

        if($validator){
            $customer = new Customer;
            $customer->customer_name = $request->customer_name;
            $customer->customer_uniquekey = $this->generateCustomerID();
            $customer->phone_primary = $request->phone_primary;
            $customer->save();

            return redirect('customers/')->with("info", 'New Customers is Added');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function view($id)
    {
        $customer_orders = DB::table('delivery_info')
                    ->where('delivery_info.customer_id', $id)
                    ->get();
        return view('customers.view', compact('customer_orders'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $divisions = Division::select('division_name','id')->get();
        $districts = District::where('division_id','=',$customer->division_id)->select('district_name','id')->get();
        $townships = Township::where('district_id','=',$customer->district_id)->select('township_name','id')->get();
        return view('customers.edit', compact('customer', 'divisions', 'districts', 'townships'));
    }

	public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone_primary' => 'required'
        ]);
    
        if ($validator) {
            $customer = Customer::find($id);
            $customer->customer_name = $request->customer_name;
            $customer->email = $request->email;
            $customer->password =Hash::make($request->password);
            $customer->phone_primary = $request->phone_primary;
            $customer->save();
            return redirect('customers')->with("info", 'Existing Customers is Updated');
        }else{
            return redirect()->back()->withErrors($validator)->withInput();
            }
        }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customers/')->with("info", 'Existing Customer is deleted');
    }


    public function getDistrict(Request $request)
    {
        $dists = District::where("division_id",$request->division_id)
                    ->pluck("district_name","id");
        return response()->json($dists);
    }

    public function getTownship(Request $request)
    {
        $towns = Township::where("district_id",$request->district_id)
                    ->pluck("township_name","id");
        return response()->json($towns);
    }

}

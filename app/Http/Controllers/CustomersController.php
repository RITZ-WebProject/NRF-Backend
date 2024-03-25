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
use Illuminate\Support\Facades\Cache;

class CustomersController extends Controller
{
    public static function generateCustomerID()
    {
        $customers = DB::table('customers')->get()->last();
        // dd($customers);
        $prefix = "NRF-C-";
        // if($customers) {
        //     $customer_uniquekey = ++$customers->customer_uniquekey;
        //     return $customer_uniquekey;
        // } else {
        //     $customer_uniquekey = $prefix . "000001";
        //     return $customer_uniquekey;
        // }
    }
    public function index(){

        $customers = Customer::select('id', 'customer_name', 'email','phone_primary')->get();

        // $customers = Customer::get();
        // dd($customers);

        // $order_count = DB::table('delivery_info')
        //             // ->leftJoin('customers', 'customers.customer_uniquekey', '=', 'delivery_info.customer_id')
        //             ->select('customer_id', DB::raw('COUNT(customer_id) as cid'))
        //             ->groupBy('customer_id')
        //             ->get();
        // dd($order_count);



        // $customers = DB::table('customers')
        //         ->leftJoin('delivery_info', 'delivery_info.customer_id', '=', 'customers.customer_uniquekey')
        //         ->select('customers.customer_uniquekey', DB::raw('COUNT(delivery_info.order_id) as order_count'))
        //         ->groupBy('customers.customer_uniquekey')
        //         ->distinct()
        //         ->get();

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
            // $customer->phone_secondary = $request->phone_secondary;
            // $customer->division_id = $request->division_id;
            // $customer->district_id = $request->district_id;
            // $customer->township_id = $request->township_id;
            // $customer->address = $request->address;
            $customer->save();

            return redirect('customers/')->with("info", 'New Customers is Added');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function view($id)
    {
        // dd($id);
        $customer_orders = DB::table('delivery_info')
                    ->where('delivery_info.customer_id', $id)
                    ->get();
                    // dd($customer_orders);
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

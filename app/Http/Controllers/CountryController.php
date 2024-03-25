<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::get();
        return view('countries.index', compact('countries'));
    }
    public function create()
    {
        return view('countries.create');
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'country' => 'required',
            'code' => 'required',
        ]);

        if($validator){
            $country = new Country;
            $country->name = $request->country;
            $country->code = $request->code;
            $country->save();

            return redirect('countries/')->with("info", 'New Country is Added');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }
    public function edit($id)
    {
        $countries = Country::find($id);
        return view('countries.edit', compact('countries'));
    }

	public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'country' => 'required',
            'code' => 'required|email',
        ]);
    
        if ($validator) {
            $customer = Country::find($id);
            $customer->name = $request->country;
            $customer->code = $request->code;
            $customer->save();
            return redirect('countries')->with("info", 'Existing Country is Updated');
        }else{
            return redirect()->back()->withErrors($validator)->withInput();
            }
        }

    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect('countries/')->with("info", 'Existing Country is deleted');
    }
}

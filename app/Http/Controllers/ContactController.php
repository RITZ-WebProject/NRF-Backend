<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $cont_data = Contact::get();

        return view('contact.index', compact('cont_data'));

    }
    public function create(){
        //
    }
    public function store(){
        //
    }
    public function edit($id){
        $contact = Contact::find($id);
        return view('contact.edit', compact('contact'));
    }
    public function update(Request $request, $id){
        $validator = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'address'      => ['required', 'string', 'max:255'],
            'phone'        => ['required', 'string', 'max:255'],
        ]);
        if($validator){
            $contact = Contact::find($id);
            $contact->company_name= $request->company_name; //$contact က database col name = $request က index ထဲက name
            $contact->address     = $request->address;
            $contact->phone       = $request->phone;
            $contact->save();

            $cont_data = Contact::get();


            return view('contact.index', compact('cont_data'))
            ->with('success','Contact updated successfully');
        }
    }
    public function destroy(){
        //
    }
}

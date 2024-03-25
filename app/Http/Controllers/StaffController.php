<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::get();
        return view('staffs.index', compact('staffs'));
    }

    public function create()
    {
        return view('staffs.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required','string','max:255'],
            'user_roles' => ['required']
        ]);
        if($validator){
            $staff = new Staff;
            $staff->username = $request->username;
            $staff->password = Hash::make($request->password);
            $staff->user_roles = $request->user_roles;
            $staff->save();

            return redirect('staffs/')->with("info",'New Staff is Added');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staffs.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'user_roles' => ['required']
        ]);

        if($validator){
            $staff = Staff::find($id);
            $staff->username = $request->username;
            if($request->password){
                $staff->password = Hash::make($request->password);
            }
            $staff->user_roles = $request->user_roles;
            $staff->save();

            return redirect('staffs/')->with("info", 'Existing staff is updated');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();

        return redirect('staffs/')->with("info", 'Existing staff is deleted');
    }
}

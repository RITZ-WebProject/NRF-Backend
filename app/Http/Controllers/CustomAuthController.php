<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request) {
        $request->validate([
                'username' => 'required',
                'password' => 'required|min:6|max:15',
        ]);

        //id field is just for experimentation remove later
        $user = DB::table('users')->select('id','username','user_roles','password')->where('username',$request->username)->first();
        //return(password_verify($request->password,$user->password));
        if($user) {
            if(password_verify($request->password,$user->password))
            {
                session()->put('username',$request->username);
            	session()->put('user_roles',$user->user_roles);
                session()->put('customer_id',$user->id);
                return redirect('/dashboard')->with('Login Successful');
            }
            else {
                return redirect()->back()->with('fail', 'Invalid Password');
            }
        }
        else {
            return redirect()->back()->with('fail',"Incorrect Username or Password!");
        }
    }

    public function signOut(){
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}

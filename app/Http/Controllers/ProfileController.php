<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
        $username=session()->get('username');
        $staff = DB::table('users')->select('username','user_roles')->where('username', $username)->first();
        $category_count = DB::table('categories')->count();
        $product_count = DB::table('products')->count();
        $order_count = DB::table('invoices')->count();
        return view('profile.index',compact('staff', 'category_count', 'product_count', 'order_count'));
    }
}

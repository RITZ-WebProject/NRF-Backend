<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $username = session('username');

        $total_order = Order::whereIn('status', ['pending', 'delivering', 'success','confirmed'])->count();
        $pending_order = Order::where('status', 'pending')->count();
        $success_order = Order::where('status', 'success')->count();
        $delivered_order = Order::where('status', 'delivering')->count();
        $cancelled_order = Order::where('status', 'cancelled')->count();

        $total_order_price = Order::whereIn('status', ['pending', 'delivering', 'success','confirmed'])->sum('price');
        $pending_order_price = Order::where('status', 'pending')->sum('price');
        $success_order_price = Order::where('status', 'success')->sum('price');
        $delivered_order_price = Order::where('status', 'delivering')->sum('price');
        $cancelled_order_price = Order::where('status', 'cancelled')->sum('price');

        $user = session()->get('username');


        $orders= DB::table('ordered_products')
                ->leftJoin('customers', 'customers.id', '=', 'ordered_products.customer_id')
                ->select('ordered_products.id', 'ordered_products.invoice_id', 'ordered_products.customer_id', 'ordered_products.status', 'customers.customer_name','ordered_products.created_at')
                ->distinct()
                ->limit(10)
                ->latest('ordered_products.created_at')
                ->get();

        return view('dashboard.index', compact('total_order', 'pending_order', 'success_order', 'delivered_order', 'cancelled_order', 'orders', 'total_order_price', 'pending_order_price', 'success_order_price', 'delivered_order_price', 'cancelled_order_price', 'user'));
    }

    public function daterangesearch(Request $request)
    {
        $data = DB::table('invoices')
            ->whereBetween('updated_at', [$request->daterangestart, $request->daterangeend])
            ->get();

        $total_orders = count($data);

        $pending_order = $data->where('status', 'pending')->count();
        $success_order = $data->where('status', 'success')->count();
        $delivered_order = $data->where('status', 'delivering')->count();
        $cancelled_order = $data->where('status', 'cancelled')->count();

        $total_order_price = $data->sum('total_price');
        $pending_order_price = $data->where('status', 'pending')->sum('total_price');
        $success_order_price = $data->where('status', 'success')->sum('total_price');
        $delivered_order_price = $data->where('status', 'delivering')->sum('total_price');
        $cancelled_order_price = $data->where('status', 'cancelled')->sum('total_price');

        return response()->json([$data, $total_orders, $pending_order, $success_order, $delivered_order, $cancelled_order, $total_order_price, $pending_order_price, $success_order_price, $delivered_order_price, $cancelled_order_price]);
    }
    public function product_reports()
{
    $prds = Product::get();

    $productCounts = DB::table('products')
        ->leftJoin('ordered_products', 'products.id', '=', 'ordered_products.product_id')
        ->select(
            'products.id',
            DB::raw('SUM(CASE WHEN ordered_products.size = "small" OR ordered_products.size = "no" OR ordered_products.size = "free" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_sm'),
            DB::raw('SUM(CASE WHEN ordered_products.size = "medium" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_m'),
            DB::raw('SUM(CASE WHEN ordered_products.size = "large" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_l'),
            DB::raw('SUM(CASE WHEN ordered_products.size = "xlarge" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_xl'),
            DB::raw('SUM(CASE WHEN ordered_products.size = "xxlarge" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_xxl'),
            DB::raw('SUM(CASE WHEN ordered_products.size = "xxxlarge" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_xxxl'),
            DB::raw('SUM(CASE WHEN ordered_products.status = "cancelled" THEN 1 ELSE 0 END) as count_cancelled'),
            DB::raw('COUNT(ordered_products.id)- SUM(CASE WHEN ordered_products.status = "cancelled" THEN 1 ELSE 0 END) as total_qty'),
            DB::raw('MAX(ordered_products.price) as price'),
            DB::raw('MAX(products.product_name) as product_name'),
            DB::raw('MAX(categories.name) as cat_name')
        )
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->groupBy('products.id')
        ->get();

    return view('product_reports', compact('productCounts', 'prds'));
}


    public function product_daterange(Request $request)
    {
        $productCounts = DB::table('ordered_products')
            ->select(
                'ordered_products.product_id',
                DB::raw('SUM(CASE WHEN ordered_products.size = "small" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_sm'),
                DB::raw('SUM(CASE WHEN ordered_products.size = "medium" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_m'),
                DB::raw('SUM(CASE WHEN ordered_products.size = "large" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_l'),
                DB::raw('SUM(CASE WHEN ordered_products.size = "xlarge" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_xl'),
                DB::raw('SUM(CASE WHEN ordered_products.size = "xxlarge" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_xxl'),
                DB::raw('SUM(CASE WHEN ordered_products.size = "xxxlarge" THEN (CASE WHEN ordered_products.status = "cancelled" THEN 0 ELSE 1 END) ELSE 0 END) as count_xxxl'),
                DB::raw('SUM(CASE WHEN ordered_products.status = "cancelled" THEN 1 ELSE 0 END) as count_cancelled'),
                DB::raw('SUM(1) - SUM(CASE WHEN ordered_products.status = "cancelled" THEN 1 ELSE 0 END) as total_qty'),
                DB::raw('MAX(ordered_products.price) as price'),
                DB::raw('MAX(products.product_name) as product_name'),
                DB::raw('MAX(categories.name) as cat_name')
            )
            ->leftJoin('products', 'ordered_products.product_id', '=', 'products.id')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->whereBetween('ordered_products.updated_at', [$request->daterangestart, $request->daterangeend])
            ->groupBy('ordered_products.product_id')
            ->get();

        return response()->json($productCounts);
    }
}

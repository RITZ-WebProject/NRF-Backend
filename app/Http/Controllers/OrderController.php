<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\DeliveryInfo;
use App\Models\District;
use App\Models\Division;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use App\Models\Township;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function generateOrderID()
    {
        $orders = DB::table('ordered_products')->get()->last();
        $prefix = "NRF-O-";
    }

    public function generateInvoiceID()
    {
        $invoices = DB::table('invoices')->get()->last();
        $prefix = "NRF-INV-";
        $date = Carbon::now()->format('Ymd');
    }

    public static function generateCustomerID()
    {
        $customers = DB::table('customers')->get()->last();
        $prefix = "NRF-C-";
    }

    public function index(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        if($request->start_date != NULL && $request->end_date != NULL) 
            {   
            $orders = Order::whereBetween('created_at', [$startDate, $endDate])->get();
        }else{
            $orders = Order::all();
            $startDate= "";
            $endDate  = "";
        }
        return view('orders.index', compact('orders','startDate','endDate'));
    }
    public function create()
    {
        $products = Product::select('product_name','id')->get();
        $categories = Category::select('name', 'id')->get();
        $customers = Customer::select('customer_name', 'id')->get();
        $divisions = Division::orderby('division_name')->select('division_name','id')->get();
        return view('orders.create',compact('products', 'customers', 'divisions', 'categories'));
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $categories = Category::select('name', 'id')->get();
        $products = Product::select('product_name', 'id')->get();
        $customers = Customer::get();
        $delivery_info = DeliveryInfo::where('id', '=', $id)->first();
        $divisions = Division::select('division_name','id')->get();
        $districts = District::where('division_id','=',$delivery_info->division_id)->select('district_name','id')->get();
        $townships = Township::where('district_id','=',$delivery_info->district_id)->select('township_name','id')->get();
        return view('orders.edit', compact('order', 'products', 'customers', 'delivery_info', 'divisions', 'districts', 'townships', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'product_id' => ['required', 'string', 'max:255'],
            'original_price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
            'total_price' => ['required', 'numeric'],
            'status' => ['required', 'string', 'max:255'],
        ]);

        if($validator){
            $order = Order::find($id);
            $order->product_id = $request->product_id;
            $order->customer_id = $request->customer_id;
            $order->original_price = $request->original_price;
            $order->quantity = $request->quantity;
            $order->on_discount = $request->on_discount;
            $order->total_price = $request->total_price;
            $order->status = $request->status;
            $order->save();

            if($request->product_id){
                $delivery_info = DeliveryInfo::where('id', '=', $id)->first();
                $delivery_info->delete();

                $delivery_info = new DeliveryInfo;
                $delivery_info->customer_id = $order->customer_id;
                $delivery_info->division_id = $request->division_id;
                $delivery_info->district_id = $request->district_id;
                $delivery_info->township_id = $request->township_id;
                $delivery_info->delivery_address = $request->address;
                $delivery_info->save();
            }
            return redirect('orders/')->with("info", 'Existing Orders is Updated');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function view($id)
    {
        $order_details = Order::where('id', $id)->get();
        return view('orders.view', compact('order_details'));
    }



    public function destroy($id)
    {
        DB::table('invoices')
            ->leftJoin('ordered_products', 'ordered_products.invoice_id', '=', 'invoices.id')
            ->where('ordered_products.id', $id)
            ->delete();
        DB::table('ordered_products')->where('id', $id)->delete();
        DB::table('delivery_info')->where('id', $id)->delete();
        return redirect('/orders')->with("info", 'Existing Order is deleted');
    }

    public function invoiceDetails($id)
    {
        $order_info = Invoice::where('id', $id)->get();
        $invoice_info=Order::where('invoice_id',$id)->get();
        $total_price=Order::where('invoice_id',$id)->sum('price');
        $delivery_info=DeliveryInfo::where('invoice_id',$id)->first();
        return view('invoice.index', compact('order_info','total_price','invoice_info','delivery_info'));
    }

    public function getProductInfo(Request $request)
    {
        if($request->get('product_id')){
            $product_id = $request->get('product_id');
            $product = DB::table('products')
                ->leftJoin('discounts', 'discounts.id', '=', 'products.discount_id')
                ->where('products.id', '=', $product_id)->first();
            return response()->json($product);
        }
    }

    public function getCustomerInfo(Request $request)
    {
        if($request->get('customer_id')){
            $customer_id = $request->get('customer_id');
            $customer_info = DB::table('customers')
                        ->leftJoin('tbl_divisions', 'tbl_divisions.id', '=', 'customers.division_id')
                        ->leftJoin('tbl_districts', 'tbl_districts.id', '=', 'customers.district_id')
                        ->leftJoin('tbl_townships', 'tbl_townships.id', '=', 'customers.township_id')
                        ->where('customers.id', '=', $customer_id)
                        ->first();
            return response()->json($customer_info);
        }
    }

    public function getProduct(Request $request)
    {
        $products = Product::where('category_id', $request->category_id)->pluck('product_name','id');
        return response()->json($products);
    }
    public function addToCart(Request $request)
    {
            $order = new Order;
            $order->product_id = $request->product_id;
            $order->original_price = $request->original_price;
            $order->quantity = $request->quantity;
            $order->on_discount = $request->on_discount;
            $order->total_price = $request->total_price;
            $order->status = $request->status;
            $order->save();
    }

    public function totalPrice($quantity, $price, $discount) {
        $total = $quantity*$price*(1-$discount/100);
        return $total;
    }

    public function checkOut()
    {
        $cart = session()->get('cart');
        $invoice = new Invoice;
        $invoice->save();
        $test = $this->generateOrderID();

        foreach($cart as $carts) {
            $order = new Order;
            $order->product_id = $carts["id"];
            $order->customer_id = session()->get('customer_id');
            $order->original_price = $carts["price"];
            $order->quantity = $carts["quantity"];
            $order->on_discount = 50;
            $order->total_price = $this->totalPrice($carts["quantity"],$carts["price"],50);
            $order->status = "pending";
            $order->save();

            if($order->quantity){
                $current_quantity = $order->quantity;
                $update_quantity = DB::table('products')->select('quantity')->where('id', $order->product_id)->first();
                $decrease_quantity = $update_quantity->quantity - $current_quantity;
                DB::table('products')->where('id', $order->product_id)->update([
                    'quantity' => $decrease_quantity
                ]);
            }
        }

        $invoice_info = DB::table('ordered_products')
        ->leftJoin('customers', 'customers.id', '=', 'ordered_products.customer_id')
        ->leftJoin('delivery_info', 'delivery_info.id', '=', 'ordered_products.id')
        ->leftJoin('products', 'products.id', '=', 'ordered_products.product_id')
        ->where('ordered_products.id', '=', $invoice->id)
        ->select('ordered_products.*', 'customers.*', 'delivery_info.*', 'products.product_name')
        ->first();
        session()->forget('cart');

        return view('invoice.index',compact('invoice_info'));
    }

    public function billingAddress()
    {
        $customers = Customer::select('customer_name', 'id')->get();
        $divisions = Division::orderby('division_name')->select('division_name','id')->get();
        return view('cart.checkout', compact('customers', 'divisions'));
    }

   
    public function updateOrderStatus(Request $request, $id)
    {
        $order = DB::table('ordered_products')->where('id', $id)->update([
            'status' => $request->status
        ]);

        DB::table('invoices')
            ->leftJoin('ordered_products', 'ordered_products.invoice_id', 'invoices.id')
            ->where('ordered_products.id', $id)
            ->distinct()
            ->update([
                'invoices.status' => $request->status
            ]);

        return redirect('orders/view/'. $id)->with('info', "Order Status Updated");
    }

	public function update_order_status(Request $request){
        $order_id = $request->order_id;
    	DB::table('ordered_products')->where('id', $order_id)->update([
            'status' => $request->status
        ]);
        DB::table('invoices')
            ->leftJoin('ordered_products', 'ordered_products.invoice_id', 'invoices.id')
            ->where('ordered_products.id', $order_id)
            ->distinct()
            ->update([
                'invoices.status' => $request->status
        ]);

    	if($request->status == 'cancelled'){
            $quantity = DB::table('ordered_products')
                    ->leftJoin('products', 'products.id', '=', 'ordered_products.product_id')
                    ->where('ordered_products.id', $order_id)
                    ->get();

            foreach($quantity as $qua){
                $order_size = $qua->size;
                $product_id = $qua->product_id;

                if($order_size == "small" || $order_size == "no" || $order_size == "free"){
                    $small_qua = ++$qua->small_quantity;
                    DB::table('products')->where('id', $product_id)->update([
                        'small_quantity' => $small_qua
                    ]);
                }
                elseif($order_size == "medium"){
                    $medium_qua = ++$qua->medium_quantity;
                    DB::table('products')->where('id', $product_id)->update([
                        'medium_quantity' => $medium_qua
                    ]);
                }elseif($order_size == "large"){
                    $large_qua = ++$qua->large_quantity;
                    DB::table('products')->where('id', $product_id)->update([
                        'large_quantity' => $large_qua
                    ]);
                }else{
                    $xlarge_qua = ++$qua->xlarge_quantity;
                    DB::table('products')->where('id', $product_id)->update([
                        'xlarge_quantity' => $xlarge_qua
                    ]);
                }

            }
        }
    	return response()->json([
    	'success' => true,
    	'status' => $request->status
    	]);
    }


    public function updateQuantity(Request $request, $id)
    {
        $order = Order::where('id', $id)->first();
        $total_price = $this->totalPrice($request->quantity, $order->original_price, $order->on_discount);
        if($request->quantity){
            $update_quantity = DB::table('ordered_products')->where('id', $id)->update([
                'quantity' => $request->quantity,
                'total_price' => $total_price
            ]);
            $update_quantity = DB::table('products')->select('quantity')->where('id', $order->product_id)->first();
            $current_quantity = $request->quantity - $order->quantity;
            $decrease_quantity = $update_quantity->quantity - $current_quantity;

            DB::table('products')->where('id', $order->product_id)->update([
                'quantity' => $decrease_quantity
            ]);
            return redirect('orders/view/'. $order->id)->with('info', "Order Quantity Updated");
        }
    }
}

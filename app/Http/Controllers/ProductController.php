<?php

namespace App\Http\Controllers;

use App\Mail\NewProductAdded;
use App\Models\Category;
use App\Models\Color;
use App\Models\DeliveryInfo;
use App\Models\Discount;
use App\Models\Invoice;
use App\Models\Newletter;
use App\Models\Order;
use App\Models\Product;
use App\Models\SizeChart;
use App\Models\Stock;
use Carbon\Carbon;
use Discounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
                ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
                ->select('products.*', 'categories.name as cat_name')
                ->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::select('name','id')->get();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'product_name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'dollor' => ['required', 'string', 'max:255'],
			'size_type' => ['required'],
            'small_quantity' => ['required', 'numeric', 'max:255'],
            'medium_quantity' => ['required', 'numeric', 'max:255'],
            'large_quantity' => ['required', 'numeric', 'max:255'],
            'xlarge_quantity' => ['required', 'numeric', 'max:255'],
            'xxlarge_quantity' => ['required', 'numeric', 'max:255'],
            'xxxlarge_quantity' => ['required', 'numeric', 'max:255'],
        	'photo.*' => ['required', 'mimetypes:image/jpg,image/png,image/svg,image/jpeg'],
			'status' => ['required']
        ]);

        $todayDate=Carbon::today();
        $productDate=Product::whereDate('created_at',$todayDate)->first();

        $photoArray = "";
        foreach($request->photo as $key => $photo) {
            $product_photo = time().'.'.$photo->getClientOriginalName();
            $destinationPath = 'public/product_photos/';
            $photo->storeAs($destinationPath, $product_photo);

            if($key === 0) {
                $photoArray .= $product_photo;
            } else {
                $photoArray .= "'x'";
                $photoArray .= $product_photo;
            }
        }

        if($validator){
            $product = new Product;
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->dollor = $request->dollor;
			if($request->size_type === 'no' || $request->size_type === 'free') {
                $product->size_type = $request->size_type;
                $product->small_quantity = $request->one_quantity;
            }
            else {
                $product->size_type = $request->size_type;
                $product->small_quantity = $request->small_quantity;
                $product->medium_quantity = $request->medium_quantity;
                $product->large_quantity = $request->large_quantity;
                $product->xlarge_quantity = $request->xlarge_quantity;
                $product->xxlarge_quantity = $request->xxlarge_quantity;
                $product->xxxlarge_quantity = $request->xxxlarge_quantity;
            }
            
            $product->photo = $photoArray;
			$product->visable_time=$request->visable_time;
			$product->status = $request->status;
            $product->save();

            if(!$productDate){
            $subscribers = Newletter::get();
            foreach ($subscribers as $subscriber) {
                Queue::push(function ($job) use ($subscriber) {
                    Mail::to($subscriber->email)->send(new NewProductAdded);
                    $job->delete();
                }); }
            }
            return redirect('products/')->with("info", 'New Products is Added');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'product_name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'dollor' => ['required', 'string', 'max:255'],
        ]);

        if($validator){
            $product = Product::find($id);
            $destinationPath = 'public/product_photos/';
            if($request->hasFile('photo')){
                $request->validate([
                    'photo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
                ]);
                $product_photo = time().'.'.$request->photo->getClientOriginalName();
                $request->photo->storeAs($destinationPath, $product_photo);
            }else{
                $product_photo = $product->photo;
            }

            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->dollor = $request->dollor;
            if($product->size_type != "normal") {
            	$product->small_quantity = $request->one_quantity;
            } else {
            	$product->small_quantity = $request->small_quantity;
            	$product->medium_quantity = $request->medium_quantity;
            	$product->large_quantity = $request->large_quantity;
            	$product->xlarge_quantity = $request->xlarge_quantity;
            	$product->xxlarge_quantity = $request->xxlarge_quantity;
            	$product->xxxlarge_quantity = $request->xxxlarge_quantity;
            }
            $product->photo = $product_photo;
			$product->visable_time=$request->visable_time;
            $product->save();

            return redirect('products/')->with("info", 'Existing Proudct is Updated');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $order_product = Order::where('product_id', $id)->first();

    	$photoArray = explode("'x'", $product->photo);
    	foreach ($photoArray as $key => $p) {
        	Storage::delete('public/product_photos/'.$p);
        }

		if($order_product) {
			Order::where('product_id', $id)->delete();
			Invoice::where('id', $order_product->invoice_id)->delete();
			DeliveryInfo::where('id',$order_product->id)->delete();
		}

        $product->delete();
        return redirect('products/')->with("info", 'Existing Product is Deleted');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $discount = DB::table('products')
                ->select('products.*', 'discounts.item_discount')
                ->where('products.id', $id)
                ->first();

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                'product_name' => $product->product_name,
                'price' => $product->price,
                'discount_id' => $discount->item_discount,
                'customer_id' => session()->get('customer_id'),
                'photo' => $product->photo,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('info', 'Product add to cart successfully');
    }

    public function cart()
    {
        return view('cart.cart');
    }

    public function cart_update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('info', 'Product successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            session()->flash('info', 'Product successfully removed!');
        }
    }

	public function gallery($id)
    {
        $product = Product::find($id);
        $photoArray = explode("'x'", $product->photo);
        $product_id = $id;

        return view('products.gallery', compact('photoArray', 'product_id'));
    }

    public function deletePhoto(Request $request)
    {
        $product = Product::find($request->product_id);
        $photoArray = explode("'x'", $product->photo);
        $photoArrayName = '';
        $deletedKey = '';
        foreach ($photoArray as $key => $p) {
            if($p === $request->photo) {
                Storage::delete('public/product_photos/'.$request->photo);
                $deletedKey = $key;
            } else {
                if ($key === 0) {
                    $photoArrayName .= $p;
                } else if($key === 1 && $deletedKey == '0') {
                    $photoArrayName .= $p;
                } else {
                    $photoArrayName .= "'x'";
                    $photoArrayName .= $p;
                }
            }
        }
        $product->photo = $photoArrayName;
        $product->update();
        return redirect()->back()->with('success', 'Successfully deleted an image');
    }

    public function uploadPhoto(Request $request)
    {
        $product = Product::find($request->product_id);
        $photoArray = $product->photo;
        foreach ($request->photo as $p) {
            $photoName = time().'.'.$p->getClientOriginalName();
            if($photoArray != '') {
                $photoArray .= "'x'";
                $photoArray .= $photoName;
            } else {
                $photoArray .= $photoName;
            }
            $destinationPath = 'public/product_photos/';
            $p->storeAs($destinationPath, $photoName);
        }
        $product->photo = $photoArray;
        $product->update();
        return redirect()->back()->with('success', 'Successfully added more images');
    }

	public function update_product_status(Request $request){
        $product_id = $request->product_id;
    	DB::table('products')->where('id', $product_id)->update([
            'status' => $request->status
        ]);
        return response()->json(['success' => true,'status' => $request->status]);
    }
}

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SizeChartController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GalleryController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CustomAuthController::class,'index'])->name('login.page');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('custom.login');
Route::get('signout', [CustomAuthController::class, 'signOut']);

Route::middleware(['logout'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/daterangesearch', [DashboardController::class, 'daterangesearch'])->name('date_range');
	Route::get('/product_reports', [DashboardController::class, 'product_reports']);
    Route::get('/product_reports/product_daterange', [DashboardController::class, 'product_daterange'])->name('product_daterange');

<<<<<<< HEAD
    Route::post('/send-confirmation-email', [OrderController::class, 'send_confirmation_email'])->name('send_confirmation_email');
    Route::post('/send-cancel-email', [OrderController::class, 'send_cancel_email'])->name('send-cancel-email');
=======
>>>>>>> origin/master

    //staff
    Route::get('/staffs', [StaffController::class, 'index']);
    Route::post('/staffs/store', [StaffController::class, 'store'])->name('staffs.store');
    Route::put('/staffs/{id}', [StaffController::class, 'update'])->name('staffs.update');
    Route::delete('/staffs/delete/{id}', [StaffController::class, 'destroy']);

    //customer
    Route::get('/customers',[CustomersController::class,'index']);
    Route::post('/customers/store', [CustomersController::class, 'store'])->name('customers.store');
    Route::get('/customers/view/{id}', [CustomersController::class, 'view']);
    Route::get('/customers/edit/{id}', [CustomersController::class, 'edit']);
	Route::put('/customers/{id}', [CustomersController::class, 'update'])->name('customers.update');
    Route::delete('/customers/delete/{id}', [CustomersController::class, 'destroy']);

    //category
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/delete/{id}', [CategoryController::class, 'destroy']);

    //product
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/delete/{id}', [ProductController::class, 'destroy']);
    Route::get('/products/gallery/{id}', [ProductController::class, 'gallery']);
    Route::delete('/product/photo', [ProductController::class, 'deletePhoto'])->name('products.photo.delete');
    Route::post('/product/photo/upload', [ProductController::class, 'uploadPhoto'])->name('products.photo.upload');
	Route::post('product-update_status', [ProductController::class, 'update_product_status'])->name('pupdate_status');
    Route::get('/products/delete/{id}', [ProductController::class, 'destroy']);

    //order
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/delete/{id}', [OrderController::class, 'destroy']);
    Route::get('/orders/invoice/{id}', [OrderController::class, 'invoiceDetails'])->name('orders.invoice');
    Route::get('/orders/view/{id}', [OrderController::class, 'view']);
    Route::put('/orders/status/{id}', [OrderController::class, 'updateOrderStatus']);
	Route::post('update_status', [OrderController::class, 'update_order_status'])->name('update_status');
    Route::put('/orders/view/{id}', [OrderController::class, 'updateQuantity']);
    Route::get('getProductInfo', [OrderController::class, 'getProductInfo'])->name('getProductInfo');
    Route::get('getProduct', [OrderController::class, 'getProduct'])->name('getProduct');

    // country
    Route::get('/countries', [CountryController::class, 'index']);
    Route::get('/countries/create', [CountryController::class, 'create']);
    Route::post('/countries/store', [CountryController::class, 'store'])->name('countries.store');
    Route::get('/countries/{id}/edit', [CountryController::class, 'edit']);
    Route::put('/countries/{id}', [CountryController::class, 'update'])->name('countries.update');
    Route::delete('countries/delete/{id}', [CountryController::class, 'destroy']);

    // Job
    Route::get('/careers', [JobController::class, 'index'])->name('careers.index');
    Route::get('/careers/create', [JobController::class, 'create'])->name('careers.create');
    Route::post('/careers/store', [JobController::class, 'store'])->name('careers.store');
    Route::get('/careers/{id}/edit', [JobController::class, 'edit'])->name('careers.edit');
    Route::put('/careers/{id}', [JobController::class, 'update'])->name('careers.update');
    Route::delete('careers/delete/{id}', [JobController::class, 'destroy'])->name('careers.destroy');

    // gallery
    Route::get('/galleries', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/galleries/create', [GalleryController::class, 'create']);
    Route::post('/galleries/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/galleries/view/{id}', [GalleryController::class, 'view']);
    Route::get('/galleries/{id}/edit', [GalleryController::class, 'edit']);
    Route::post('/galleries/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('galleries/delete/{id}', [GalleryController::class, 'destroy']);

    //for Address Json
    Route::get('getDistrict',[CustomersController::class, 'getDistrict'])->name('getDistrict');
    Route::get('getTownship',[CustomersController::class, 'getTownship'])->name('getTownship');

    //contact
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');

    // profile
    Route::get('/profile',[ProfileController::class, 'index']);

    //size chart
    Route::get('/size_charts', [SizeChartController::class, 'index']);
    Route::get('/size_charts/create', [SizeChartController::class, 'create']);
    Route::post('/size_charts/store', [SizeChartController::class, 'store'])->name('size_charts.store');
    Route::get('/size_charts/{id}/edit', [SizeChartController::class, 'edit']);
    Route::put('/size_charts/{id}', [SizeChartController::class, 'update'])->name('size_charts.update');
    Route::get('/size_charts/delete/{id}', [SizeChartController::class, 'destroy']);

    Route::get('/add_to_cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
    Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
    Route::patch('update-cart', [ProductController::class, 'cart_update'])->name('update_cart');
    Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');

    //get customer info
    Route::get('getCustomerInfo', [OrderController::class, 'getCustomerInfo'])->name('getCustomerInfo');

    //checkout billing address
    Route::get('/checkout', [OrderController::class, 'billingAddress']);
});
//notifications api
Route::post('/notifications', [NotificationController::class, 'notify']);



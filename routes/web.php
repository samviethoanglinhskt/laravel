<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// categories = ['id', 'name']
// Products = ['id', 'name', 'images', 'category_id', 'describe']
// Account = ['id','name','password','id_admin']
// Banner = ['id', 'banner']
// Order = ['id', 'account_id', 'product_id', 'quantity']
// Sales = ['id','code', 'start_time', 'end_time', 'product_id (null)']


//Route::get('/', function () {
//    $data = DB::table('products')->get();
//    $dm = DB::table('categories')->get();
//    return view('clients.index',compact('data','dm'));
//});

Route::get('/about', function () {
    $dm = DB::table('categories')->get();
    return view('clients.about',compact('dm'));
});
Route::get('/contact', function () {
    $dm = DB::table('categories')->get();
    return view('clients.contact',compact('dm'));
});
//Route::get('/product_details/{id}', function ($id) {
//    $dm = DB::table('categories')->get();
//    $product = DB::table('products')->where('id',$id)->first();
//    return view('clients.product_details',compact('product','dm'));
//});
// clients
Route::get('client/index',[\App\Http\Controllers\HomeController::class,'index'])->name('clients.index');
Route::get('/product_details/{id}',[\App\Http\Controllers\HomeController::class,'show'])->name('clients.product_details');
// login_register
Route::get('/register',[\App\Http\Controllers\Auth\RegisterControler::class,'index'])->name('clients.register');
Route::post('auth/register',[\App\Http\Controllers\Auth\RegisterControler::class,'register'])->name('register.store');
Route::get('/login',[\App\Http\Controllers\Auth\LoginControler::class,'index'])->name('clients.login');
Route::post('auth/login',[\App\Http\Controllers\Auth\LoginControler::class,'login'])->name('login');
Route::get('auth/logout',[\App\Http\Controllers\Auth\LoginControler::class,'logout'])->name('logout');
Route::get('auth/verify/{token}',[\App\Http\Controllers\Auth\LoginControler::class,'verify'])->name('verify');
// admin
Route::get('admin/index',[\App\Http\Controllers\AdminController::class,'index'])->name('admins.index')->middleware('isAdmin');
// Categories
Route::get('categories',[\App\Http\Controllers\CategoryContrller::class,'listCate'])->name('admins.listCate');
Route::get('categories/create',[\App\Http\Controllers\CategoryContrller::class,'createCate'])->name('admins.createCate');
Route::post('categories', [\App\Http\Controllers\CategoryContrller::class, 'storeCate'])->name('admins.storeCate');
Route::get('categories/{id}/edit', [\App\Http\Controllers\CategoryContrller::class, 'editCate'])->name('admins.editCate');
Route::put('categories/{id}', [\App\Http\Controllers\CategoryContrller::class, 'updateCate'])->name('admins.updateCate');
Route::delete('categories/destroy/{id}', [\App\Http\Controllers\CategoryContrller::class, 'destroy'])->name('admins.destroy');
//Products
Route::get('products', [ProductController::class,'listPro'])->name('admins.listPro');
Route::get('products/create',[ProductController::class,'createPro'])->name('admins.createPro');
Route::post('products', [ProductController::class, 'storePro'])->name('admins.storePro');
Route::delete('products/destroy/{id}', [ProductController::class, 'destroyPro'])->name('admins.destroyPro');
Route::get('products/{id}/edit',[ProductController::class,'editPro'])->name('admins.editPro');
Route::put('products/{id}',[ProductController::class,'updatePro'])->name('admins.updatePro');

// banner
Route::get('banner/create',[\App\Http\Controllers\BannerController::class,'createBanner'])->name('admins.createBanner');
Route::post('banner',[\App\Http\Controllers\BannerController::class,'storeBanner'])->name('admins.storeBanner');
Route::get('banner',[\App\Http\Controllers\BannerController::class,'listBanner'])->name('admins.listBanner');
Route::delete('banner/destroy/{id}',[\App\Http\Controllers\BannerController::class,'destroyBanner'])->name('admins.destroyBanner');
Route::get('destroy/{id}/edit',[\App\Http\Controllers\BannerController::class,'editBanner'])->name('admins.editBanner');
Route::put('banner/{id}',[\App\Http\Controllers\BannerController::class,'updateBanner'])->name('admins.updateBanner');
//Route::get('/admin',function (){
//    return "Đây Là Admin";
//})->middleware('isAdmin');




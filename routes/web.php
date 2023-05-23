<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PaypalController;

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

// Route::get('/login', function () {
//     return view('login');
// });
Route::view("login","login");

Route::Post("login",[UserController::class,"login"]);
Route::get("product",[ProductController::class,"index"]);
Route::get("detail/{id}",[ProductController::class,"detail"]);
Route::get("search",[ProductController::class,"search"]);
Route::Post("addCart",[ProductController::class,"addCarts"]);

Route::get("cartlist",[ProductController::class,"cartList"]);
///this delete the product from cart against its cart it 
Route::get("removecart/{id}",[ProductController::class,"removecart"]);
Route::get("ordernow",[ProductController::class,"ordernow"]);
Route::post("orderplace",[ProductController::class,"orderplace"]);

Route::get("myorders",[ProductController::class,"myorder"]);
// Route::post('/logout', function () {
//     Session::forget('user');
//     return redirect('login');
// });

Route::get('/out',function(){
Session::forget('user');
return redirect('login');
});

































?>
<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ParentCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use App\Models\Order;
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

Route::middleware([CheckRole::class, 'verified'])->group(function () {
    Route::resource('/', DashboardController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', ParentCategoryController::class);
    Route::resource('sub-category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('user', UserController::class);
    Route::resource('order', OrderController::class);
});

Auth::routes(['verify' => true]);
Route::get('/mail-demo', function () {
    $order = Order::first();
    return view('emails.order_success', ['order' => $order]);
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

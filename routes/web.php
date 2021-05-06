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

Route::get('/email-verify',function (){
    return view('auth.verify_success');
});

Route::middleware([CheckRole::class, 'verified'])->group(function () {
    Route::resource('/', DashboardController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', ParentCategoryController::class);
    Route::resource('sub-category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('user', UserController::class);
    Route::resource('order', OrderController::class);
    Route::post('order/update-status/{id}', [OrderController::class, 'updateStatus'])->name('update-status');
});

Auth::routes(['verify' => true]);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ParentCategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:api,web'], function () {
    Route::apiResource('rating', RatingController::class)->except(['index', 'show']);
    Route::apiResource('comment', RatingController::class)->except(['index', 'show']);

    Route::middleware('verified')->group(function () {
        Route::get('orders', [OrderController::class, 'orders']);
        Route::post('checkout', [OrderController::class, 'checkout']);
    });
});
Route::apiResource('brand', BrandController::class);

Route::apiResource('parent-category', ParentCategoryController::class);
Route::get('get-sub-category/{parentId}', [ParentCategoryController::class, 'getSubCategories']);

Route::apiResource('category', CategoryController::class);

Route::apiResource('product', ProductController::class);
Route::get('new-product', [ProductController::class, 'newProducts']);
Route::get('popular-product', [ProductController::class, 'popular']);
Route::get('product-by-parent-category/{id}', [ProductController::class, 'productsInParent']);
Route::get('product-by-category/{id}', [ProductController::class, 'productsInSub']);

Route::apiResource('rating', RatingController::class)->only(['index', 'show']);
Route::get('rating/rating-product/{product_id?}', [RatingController::class, 'getRatingByProduct']);

Route::apiResource('comment', RatingController::class)->only(['index', 'show']);
Route::get('comment/comment-product/{product_id?}', [CommentController::class, 'getCommentsByProduct']);

Route::group(['middleware' => ['web']], function () {
    Auth::routes(['verify' => true, 'login' => false, 'register' => false]);
});


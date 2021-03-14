<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\BrandController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/test', function () {
        return "api...";
    });
});

Route::apiResource('brand', BrandController::class);
Route::apiResource('category', CategoryController::class);
Route::apiResource('product', ProductController::class);

Route::apiResource('rating', RatingController::class);
Route::get('rating/rating-product/{product_id?}', [RatingController::class, 'getRatingByProduct']);

Route::apiResource('comment', RatingController::class);
Route::get('comment/comment-product/{product_id?}', [CommentController::class, 'getCommentsByProduct']);



<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RatingResource;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  Rating
 *
 * APIs for rating
 */
class RatingController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @param int $product_id
     * @return AnonymousResourceCollection
     */
    public function index(int $product_id): AnonymousResourceCollection {
        //        $ratings = Rating::where('product_id', $product_id);
        //        return RatingResource::collection($ratings);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return AnonymousResourceCollection
     */
    public function show(int $id): AnonymousResourceCollection {
        $ratings = Rating::findOrFail($id);
        return RatingResource::collection($ratings);
    }

    /**
     * Display ratings by product id
     *
     * @param int $product_id
     * @return AnonymousResourceCollection
     */
    public function getRatingByProduct(int $product_id): AnonymousResourceCollection {
        $ratings = Rating::where('product_id', $product_id)->get();
        return RatingResource::collection($ratings);
    }
}

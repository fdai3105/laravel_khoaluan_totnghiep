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
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection {
        $ratings = Rating::all();
        return RatingResource::collection($ratings);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return RatingResource
     */
    public function show(int $id): RatingResource {
        $ratings = Rating::findOrFail($id);
        return new RatingResource($ratings);
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

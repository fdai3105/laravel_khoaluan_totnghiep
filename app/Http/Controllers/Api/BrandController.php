<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Brand
 *
 * APIs for brand
 */
class BrandController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return BrandResource
     */
    public function index(): BrandResource {
        return new BrandResource(Brand::all());
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param Request $request
//     * @return Response
//     *
//     * @bodyParam name string required Name of brand
//     */
//    public function store(Request $request): Response {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return BrandResource
     *
     * @urlParam id required The ID of the brand.
     */
    public function show(int $id): BrandResource {
        $brand = Brand::findOrFail($id);
        return new BrandResource($brand);
    }

//    /**
    //     * Update the specified resource in storage.
    //     *
    //     * @param Request $request
    //     * @param int $id
    //     * @return Response
    //     *
    //     * @bodyParam name string required New name of brand
    //     */
    //    public function update(Request $request, int $id): Response {
    //        //
    //    }

//    /**
    //     * Remove the specified resource from storage.
    //     *
    //     * @param int $id
    //     * @return Response
    //     */
    //    public function destroy(int $id): Response {
    //        //
    //    }
}

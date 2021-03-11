<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Category
 *
 * APIs for category
 */
class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return CategoryResource
     */
    public function index(): CategoryResource {
        return new CategoryResource(Category::all());
    }

    //    /**
    //     * Store a newly created resource in storage.
    //     *
    //     * @param Request $request
    //     * @return Response
    //     */
    //    public function store(Request $request) {
    //        //
    //    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return CategoryResource
     */
    public function show(int $id): CategoryResource {
        $category = Category::findOrFail($id);
        return new CategoryResource($category);
    }

    //    /**
    //     * Update the specified resource in storage.
    //     *
    //     * @param Request $request
    //     * @param int $id
    //     * @return Response
    //     */
    //    public function update(Request $request, $id) {
    //        //
    //    }

    //    /**
    //     * Remove the specified resource from storage.
    //     *
    //     * @param int $id
    //     * @return Response
    //     */
    //    public function destroy($id) {
    //        //
    //    }
}

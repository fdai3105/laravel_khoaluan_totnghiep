<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

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

    /**
     *
     */
    public function parentCategory(): AnonymousResourceCollection {
        $parent = Category::whereNull('parent_id')->get();
        return CategoryResource::collection($parent);
    }

    /**
     * @param int $id
     * @return AnonymousResourceCollection
     */
    public function subCategory(int $id): AnonymousResourceCollection {
        $sub = Category::where('parent_id', '=', $id)->get();
        return SubCategoryResource::collection($sub);
    }
}

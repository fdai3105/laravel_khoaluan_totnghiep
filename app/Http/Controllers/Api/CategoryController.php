<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use App\Models\ParentCategory;
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
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ParentCategoryResource;
use App\Models\ParentCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ParentCategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return ParentCategoryResource
     */
    public function index(): ParentCategoryResource {
        return new ParentCategoryResource(ParentCategory::all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $parentId
     * @return AnonymousResourceCollection
     */
    public function getSubCategories(int $parentId): AnonymousResourceCollection {
        $category = ParentCategory::findOrFail($parentId);
        return CategoryResource::collection($category->sub);
    }
}

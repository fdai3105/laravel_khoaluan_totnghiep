<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Collection;

/**
 * @group  Product
 *
 * APIs for product
 */
class ProductController extends Controller {

    protected $paginate = 10;

    /**
     * Show all products
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection {
        $products = Product::paginate($this->paginate);
        return ProductResource::collection($products);
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
     * Show one product by id
     *
     * @param int $id
     * @return ProductResource
     */
    public function show(int $id): ProductResource {
        $product = Product::findOrFail($id);
        return new ProductResource($product);
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

    /**
     * Show new product sort by
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     *
     * @queryParam  limit Limit of the query. Example : 6
     */
    public function popular(Request $request): AnonymousResourceCollection {
        $popularProducts = Product::orderBy('bought', 'DESC')
            ->paginate($this->paginate);
        return ProductResource::collection($popularProducts);
    }

    /**
     * Show hot product sort by updated_at
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     *
     * @queryParam  limit Limit of the query. Example: 6
     */
    public function newProducts(Request $request): AnonymousResourceCollection {
        $newProducts = Product::orderBy('updated_at', 'DESC')
            ->paginate($this->paginate);
        return ProductResource::collection($newProducts);
    }

    /**
     * Show products in parent category
     *
     * @param int $id
     * @return AnonymousResourceCollection
     */
    public function productsInParent(int $id): AnonymousResourceCollection {
        $sub = Category::where('parent_id', '=', $id)->pluck('id')->all();
        $products = Product::whereIn('category_id', $sub)->get();
        return ProductResource::collection($products);
    }

    /**
     * Show products in sub category
     *
     * @param int $id
     * @return AnonymousResourceCollection
     */
    public function productsInSub(int $id): AnonymousResourceCollection {
        $products = Product::where('category_id', '=', $id)->get();
        return ProductResource::collection($products);
    }
}

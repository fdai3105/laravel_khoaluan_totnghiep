<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Env;

/**
 * @group  Product
 *
 * APIs for product
 */
class ProductController extends Controller {

    /**
     * Show all products
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection {
        $products = Product::paginate(env('APP_PAGINATE', 10));
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
     *
     * @queryParam  limit Limit of the query. Example : 6
     */
    public function hotProducts(Request $request) {
    }

    /**
     * Show hot product sort by updated_at
     *
     * @param Request $request
     * @return Collection
     *
     * @queryParam  limit Limit of the query. Example: 6
     */
    public function newProducts(Request $request): Collection {
        $limit = $request->input('limit');

        return Product::orderBy('updated_at', 'DESC')
            ->when($limit, function ($q, $limit) {
                return $q->limit($limit);
            })
            ->get();
    }
}

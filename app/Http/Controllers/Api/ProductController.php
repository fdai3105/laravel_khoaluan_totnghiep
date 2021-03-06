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

    /**
     * Show new product sort by
     *
     * @return AnonymousResourceCollection
     *
     * @queryParam  limit Limit of the query. Example : 6
     */
    public function popular(): AnonymousResourceCollection {
        $popularProducts = Product::orderBy('bought', 'DESC')
            ->paginate($this->paginate);
        return ProductResource::collection($popularProducts);
    }

    /**
     * Show hot product sort by updated_at
     *
     * @return AnonymousResourceCollection
     *
     * @queryParam  limit Limit of the query. Example: 6
     */
    public function newProducts(): AnonymousResourceCollection {
        $newProducts = Product::orderBy('updated_at', 'DESC')
            ->paginate($this->paginate);
        return ProductResource::collection($newProducts);
    }

    /**
     * Show sale product sort by discount
     *
     * @return AnonymousResourceCollection
     *
     * @queryParam  limit Limit of the query. Example: 6
     */
    public function saleProducts(): AnonymousResourceCollection {
        $newProducts = Product::where('discount', '!=', 0)
            ->orderBy('discount', 'DESC')
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
        $products = Product::whereIn('category_id', $sub)->paginate($this->paginate);
        return ProductResource::collection($products);
    }

    /**
     * Show products in sub category
     *
     * @param int $id
     * @return AnonymousResourceCollection
     */
    public function productsInSub(int $id): AnonymousResourceCollection {
        $products = Product::where('category_id', '=', $id)->paginate($this->paginate);
        return ProductResource::collection($products);
    }

    /**
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function search(Request $request): AnonymousResourceCollection {
        $keyWord = $request->input('name');

        $products = Product::where('name', 'like', "%$keyWord%");

        if ($request->has('price-sort')) {
            $priceSort = $request->input('price-sort');
            $products->orderBy('price', $priceSort);
        }

        if ($request->has('name-sort')) {
            $nameSort = $request->input('name-sort');
            $products->orderBy('name', $nameSort);
        }

        return ProductResource::collection($products->paginate());
    }

    /**
     * @param int $id
     * @return AnonymousResourceCollection
     */
    public function similar(int $id): AnonymousResourceCollection {
        $category = Product::find($id)->category;
        $similar = Product::where('category_id','=',$category->id);
        return ProductResource::collection($similar->paginate());
    }
}

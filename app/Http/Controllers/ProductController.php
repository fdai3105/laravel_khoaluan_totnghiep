<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();
        $attributes = Attribute::all();

        return view('product.index', ['products' => $products, 'categories' => $categories, 'brands' => $brands, 'attributes' => $attributes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request) {
        $attribute_value = $request->input('attributes');
        $attribute_type = $request->input('attribute_type');

        $product = Product::create($request->all());
        foreach ($attribute_value as $key => $value) {
            ProductAttribute::create([
                'product_id' => $product->id,
                'attribute_id' => $attribute_type[$key],
                'attribute' => $value,
            ]);
        }

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show(int $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, int $id) {
        Product::find($id)->update($request->all());
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(int $id) {
        Product::findOrFail($id)->delete();
        return redirect('product');
    }
}

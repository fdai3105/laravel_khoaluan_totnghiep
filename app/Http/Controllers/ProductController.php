<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        $images = $request->file('images');
        $attributeValues = $request->input('attributes');
        $attributeTypes = $request->input('attribute_type');

        $product = Product::create($request->all());

        if ($request->hasFile('images')) {
            foreach ($images as $file) {
                $image = new ProductImage();
                $fileName = preg_replace("/\s+/", "", $product->name . '_' . $file->getClientOriginalName());
                $fileAddress = $file->move('upload', $fileName);
                $image->name = $fileName;
                $image->image = $fileAddress;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        foreach ($attributeValues as $key => $value) {
            if ($value == null) {
                continue;
            }
            ProductAttribute::create([
                'product_id' => $product->id,
                'attribute_id' => $attributeTypes[$key],
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
        $attributeValues = $request->input('attributes');
        $attributeTypes = $request->input('attribute_type');
        $attributeIds = $request->input('attribute_id');
        $images = $request->file('images');

        try {
            Product::find($id)->update($request->all());

            foreach ($attributeValues as $key => $attribute) {
                if ($attributeIds[$key] == null) {
                    ProductAttribute::create([
                        'product_id' => $id,
                        'attribute_id' => $attributeTypes[$key],
                        'attribute' => $attribute
                    ]);
                    continue;
                }

                if ($attribute == null) {
                    ProductAttribute::findOrFail($attributeIds[$key])->delete();
                    continue;
                }

                ProductAttribute::findOrFail($attributeIds[$key])
                    ->update([
                        'product_id' => $id,
                        'attribute_id' => $attributeTypes[$key],
                        'attribute' => $attribute
                    ]);
            }

            if ($request->hasFile('images')) {
                foreach ($images as $file) {
                    $fileAddress = $file->move('upload', $file->getClientOriginalName());
                    ProductImage::create([
                        'name' => $file->getClientOriginalName(),
                        'image' => $fileAddress,
                        'product_id' => $id,
                    ]);
                }
            }
        } catch (\Exception $e) {
            return redirect('product');
        }
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

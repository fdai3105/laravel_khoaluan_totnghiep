<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductAttributeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $products = Product::all();
        return view('product-attribute.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Attribute $productAttribute
     * @return Response
     */
    public function show(Attribute $productAttribute) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Attribute $productAttribute
     * @return Response
     */
    public function edit(Attribute $productAttribute) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Attribute $productAttribute
     * @return Response
     */
    public function update(Request $request, Attribute $productAttribute) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Attribute $productAttribute
     * @return Response
     */
    public function destroy(Attribute $productAttribute) {
        //
    }
}

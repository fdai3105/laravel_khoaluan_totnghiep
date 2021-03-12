<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class BrandController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $brands = Brand::all();
        return view('brand.index', ['brands' => $brands]);
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
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request) {
        Brand::create($request->all());
        return redirect("brand");
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
     * @param int $id
     * @return Response
     */
    public function edit(int $id) {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, int $id) {
        Brand::find($id)->update($request->all());
        return redirect('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function destroy(int $id) {
        Brand::findOrFail($id)->delete();
        return redirect('brand');
    }
}

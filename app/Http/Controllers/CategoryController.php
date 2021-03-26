<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ParentCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $categories = Category::all();
        $parents = ParentCategory::all();
        return view('sub-category.index', ['categories' => $categories, 'parents' => $parents]);
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
        $category = Category::create($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = preg_replace("/(?:\s\s+|\n|\t)/", "", $category->name . '_' . $image->getClientOriginalName());
            $fileAddress = $image->move('upload', $fileName);
            $category->image = $fileAddress;
            $category->save();
        }
        return redirect("category");
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Category $category) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category) {
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
        $category = Category::find($id);
        $category->update($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = preg_replace("/\s+/", "", $request->input('name') . '_' . $image->getClientOriginalName());
            $fileAddress = $image->move('upload', $fileName);
            $category->update(['image' => $fileAddress]);
        }

        return redirect('sub-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(int $id) {
        Category::findOrFail($id)->delete();
        return redirect('sub-category');
    }
}

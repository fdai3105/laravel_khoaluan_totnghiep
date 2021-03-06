<?php

namespace App\Http\Controllers;

use App\Models\ParentCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ParentCategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index() {
        $categories = ParentCategory::all();
        return view('category.index', ['categories' => $categories]);
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
        $category = ParentCategory::create($request->all());

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
        $category = ParentCategory::find($id);
        $category->update([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = preg_replace("/\s+/", "", $request->input('name') . '_' . $image->getClientOriginalName());
            $fileAddress = $image->move('upload', $fileName);
            $category->update(['image' => $fileAddress]);
        }

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(int $id) {
        $category = ParentCategory::findOrFail($id);
        \Storage::delete($category->image);
        $category->delete();
        return redirect('category');
    }
}

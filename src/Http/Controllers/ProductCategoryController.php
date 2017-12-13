<?php

namespace RonAppleton\LaravelSimpleShopModule\Http\Controllers;

use RonAppleton\LaravelSimpleShopModule\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('simple-shop::product_category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('simple-shop::product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:product_categories,name'
        ]);

        ProductCategory::create($request->toArray());

        return view('simple-shop::product_category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \RonAppleton\LaravelSimpleShopModule\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        return view('simple-shop::product_category.show', ['model' => 'productCategory']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RonAppleton\LaravelSimpleShopModule\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('simple-shop::product_category.edit', ['model' => 'productCategory']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RonAppleton\LaravelSimpleShopModule\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:product_categories,name'
        ]);

        $productCategory::update(['name' => $request->name]);

        return view('simple-shop::product_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RonAppleton\LaravelSimpleShopModule\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
    }
}

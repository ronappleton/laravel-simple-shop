<?php

namespace RonAppleton\LaravelSimpleShopModule\Http\Controllers;

use RonAppleton\LaravelSimpleShopModule\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('simple-shop::products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('simple-shop::products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('simple-shop::products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \RonAppleton\LaravelSimpleShopModule\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('simple-shop::products.show', ['model' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RonAppleton\LaravelSimpleShopModule\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('simple-shop::products.show', ['model' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RonAppleton\LaravelSimpleShopModule\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        return view('simple-shop::products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RonAppleton\LaravelSimpleShopModule\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return view('simple-shop::products.index');
    }
}

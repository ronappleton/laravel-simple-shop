<?php
Route::middleware(config('laravel-simple-shop-module.adminMiddleware'))->group(function () {
    Route::resource('product', 'RonAppleton\LaravelSimpleShopModule\Http\Controllers\ProductController');
    Route::resource('product_category', 'RonAppleton\LaravelSimpleShopModule\Http\Controllers\ProductCategoryController');
});

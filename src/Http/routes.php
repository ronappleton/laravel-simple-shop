<?php
Route::middleware(['web','auth'])->group(function () {
    Route::resource('product', 'RonAppleton\LaravelSimpleShopModule\Http\Controllers\ProductController');
    Route::resource('product_category', 'RonAppleton\LaravelSimpleShopModule\Http\Controllers\ProductCategoryController');
    Route::get('shop-resource/{method}', 'RonAppleton\LaravelSimpleShopModule\Http\Controllers\ResourceController@handle');
});

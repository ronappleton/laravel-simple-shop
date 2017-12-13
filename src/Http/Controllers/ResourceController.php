<?php

namespace RonAppleton\LaravelSimpleShopModule\Http\Controllers;

use RonAppleton\LaravelSimpleShopModule\ProductCategory;
use Yajra\DataTables\Facades\DataTables;


class ResourceController extends Controller
{
    public function handle($method)
    {
        if(empty($this->$method()))
        {
            throw new NotFoundHttpException;
        }
        return $this->$method();
    }

    public function allCategories()
    {
        $categories = ProductCategory::all();

        return DataTables::collection($categories)
            ->addColumn('action', function ($category) {
                $url = route('product_category.edit', $category->id);
                return "<a href=\"$url\" class=\"btn btn-xs btn-primary\"><i class=\"glyphicon glyphicon-edit\"></i> Edit</a>";
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
}
<?php

namespace RonAppleton\LaravelSimpleShopModule;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;
}

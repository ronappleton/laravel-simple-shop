<?php

if(!function_exists('laravelSimpleShopMenuItems'))
{
    function laravelSimpleShopMenuItems()
    {
        return config('laravel-simple-shop-module.adminMenuItems');
    }
}
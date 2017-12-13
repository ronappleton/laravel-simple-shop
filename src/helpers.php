<?php

if(!function_exists('laravelSimpleShopMenuItems'))
{
    function laravelSimpleShopMenuItems()
    {
        $config = require(config_path('laravel-simple-shop-module.php'));

        return $config['adminMenuItems'];
    }
}
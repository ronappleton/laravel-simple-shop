<?php

return [
    "layout_file" => 'layout.master',

    "adminMenuItems" => [
        [
            'text' => 'Simple Shop',
            'url' => '#',
            'icon' => 'cart',
            'submenu' => [
                [
                    'text' => 'Products',
                    'url' => '#',
                    'icon' => 'dollar',
                    'submenu' => [
                        [
                            'text' => 'Products',
                            'url' => 'product',
                            'icon' => 'dollar'
                        ],
                        [
                            'text' => 'Product Categories',
                            'url' => 'product_category',
                            'icon' => 'beer'
                        ],
                    ]
                ],
            ],
        ],
    ],
];
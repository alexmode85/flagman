<?php

return [
    'title' => 'Меню',
    'single' => 'record',
    'model' => 'App\Menu',
    'columns' => [
        'id',
        'active',
        'title',
        'price'
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'price' => [
            'type' => 'number',
            'title' => 'Price',
            'symbol' => 'P',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path() . '/uploads/menu/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/menu/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/menu/small/', 100]
            ],
        ],
        
    ],
    'form_width' => 800,
];
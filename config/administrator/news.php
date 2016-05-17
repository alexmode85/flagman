<?php

return [
    'title' => 'Новости',
    'single' => 'record',
    'model' => 'App\News',
    'columns' => [
        'id',
        'active',
        'title'
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
        'body' => [
            'type' => 'wysiwyg',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path() . '/uploads/news/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/news/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/news/small/', 100]
            ],
        ],
        
    ],
    'form_width' => 800,
];
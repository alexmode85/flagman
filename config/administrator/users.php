<?php

return [
    'title' => 'Пользователи',
    'single' => 'user',
    'model' => 'App\user',
    'columns' => [
        'id',
        'email'
    ],
    'edit_fields' => [
        'email' => [
            'type' => 'text',
        ]
    ],
];
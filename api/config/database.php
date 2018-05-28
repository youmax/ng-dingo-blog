<?php

return [

    'default' => env('DB_CONNECTION', 'mongodb'),

    'connections' => [
        'mongodb' => array(
            'driver' => 'mongodb',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 27017),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'database' => env('DB_DATABASE'),
            'options'  => [
                'database' => env('DB_DATABASE') // sets the authentication database required by mongo 3
            ]
        ),

    ],

    'migrations' => 'migrations',
];

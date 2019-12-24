<?php

return [
    'db_connection' => [
        'login' => env('DB_USERNAME'),
        'pass' => env('DB_PASSWORD'),
        'host' => env('DB_HOST'),
        'dbname' => env('DB_DATABASE')
    ],
    'weather_api' => [
        'key' => env('WEATHER_API_KEY'),
        'url' => env('WEATHER_API_URL')
    ]
];

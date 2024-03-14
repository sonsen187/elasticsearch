<?php

return [
    'config' => [
        'hosts' => [
            env('ELASTICSEARCH_HOST', 'localhost'),
        ],
        'auth' => [
            'user' => env('ELASTICSEARCH_USER', 'elastic'),
            'pass' => env('ELASTICSEARCH_PASS'),
        ]
    ],
];
<?php

return [
    # Default Database Connection Name
    'connections' => 'mysql',

    # Database Connections
    'sqlite' => [
        'driver' => 'sqlite',
        'database' => '',
        'prefix' => '',
        'foreign_key_constraints' => '',
    ],
    'mysql' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'orm',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'extension' => 'pdo'
    ],
];

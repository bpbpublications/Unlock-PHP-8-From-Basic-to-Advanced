<?php

use TaskManager\Controllers\Home;
use TaskManager\Controllers\Login;
use TaskManager\Controllers\Tasks;

return [
    'GET' => [
        '/' => [Home::class, 'index'],
        '/login' => [Login::class, 'index'],
        '/tasks' => [Tasks::class, 'index'],
    ],
    'POST' => [
        '/login/submit' => [Login::class, 'onLogin'],
        '/tasks/create' => [Tasks::class, 'onCreateTask'],
        '/tasks/completed' => [Tasks::class, 'onActionTask'],
        '/tasks/delete' => [Tasks::class, 'onActionTask'],
        '/tasks/delete-all' => [Tasks::class, 'onDeleteAll'],
    ],
    // ... other HTTP methods as needed
];

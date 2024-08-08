<?php

return [

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'employee' => [
            'driver' => 'session',
            'provider' => 'employees',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'model' => env('AUTH_MODEL', App\Models\User::class),
=======
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
            'model' => App\Models\User::class,
        ],
        'employees' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin\Employee::class,
<<<<<<< HEAD
=======
>>>>>>> 2f6ada3 (CRUD người dùng)
>>>>>>> b7636ac4249915d94f4f715a3f9b92f1ca6c782f
        ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),



];

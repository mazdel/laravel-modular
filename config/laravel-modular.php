<?php

return [
    'modules_path' => app_path('Modules'),

    'web' => [
        'middleware' => ['web'],
    ],

    'api' => [
        'prefix' => 'api/v1',
        'name' => 'api.v1.',
        'middleware' => ['api'],
    ],
];

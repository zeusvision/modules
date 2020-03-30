<?php

return [
    'modules' => [
        'path' => env('APP_MODULES_PATH', env('APP_NAME', 'Zeus')),
        'folders' => [
            'Actions',
            'Connectors',
            'Console',
            'Contracts',
            'Controllers',
            'Entities',
            'Events',
            'Exceptions',
            'Filters',
            'Jobs',
            'Listeners',
            'Middleware',
            'Queries',
            'Requests',
            'Resources',
            'Services',
            'Transformers',
            'ValueObjects',
        ]
    ],
];

<?php

return [
    'plugins' => [
        'MultipleLocalAuth',
        'Analytics',
        'AdminLoginAsUser',
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
    ]
];
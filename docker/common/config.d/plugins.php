<?php

return [
    'plugins' => [
        'MultipleLocalAuth',
        'Analytics',
        'SpamDetector',
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
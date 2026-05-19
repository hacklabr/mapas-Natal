<?php

return [
    'plugins' => [
        'MultipleLocalAuth',
        'ValuersManagement',
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
        'Zammad' => [
            'namespace' => 'Zammad',
            'config' => [
                'enabled' => true,
                'url' => 'https://suporte.mapasculturais.com.br/assets/chat/chat-no-jquery.min.js',    
                'background' => '#F66968',
                'title' => 'Duvidas? Fale conosco',
                'chatId' => 3,
                'instacacao' => 'mapacultural.natal.rn.gov.br',
                'estado' => 'Rio Grande do Norte'
            ]
        ],
    ]
];
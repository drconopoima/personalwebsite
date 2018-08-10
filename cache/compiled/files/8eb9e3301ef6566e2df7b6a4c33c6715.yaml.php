<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ljdm/drconopoima.com/user/config/system.yaml',
    'modified' => 1533429735,
    'data' => [
        'absolute_urls' => false,
        'home' => [
            'alias' => '/blog'
        ],
        'languages' => [
            'supported' => [
                0 => 'en',
                1 => 'es'
            ],
            'http_accept_language' => true,
            'home_redirect' => [
                'include_lang' => true,
                'include_route' => false
            ],
            'session_store_active' => false
        ],
        'pages' => [
            'theme' => 'cacti',
            'markdown_extra' => false,
            'dateformat' => [
                'default' => 'H:i d-m-Y'
            ],
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];

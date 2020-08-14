<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '3958bbe4e2a43487b5c00c8ef6a057df'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'tzdhesupjt',
                'username' => 'tzdhesupjt',
                'password' => 'YN8nccJb3k',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ],
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'cc4_'
            ],
            'page_cache' => [
                'id_prefix' => 'cc4_'
            ]
        ],
        'persisted-query' => [
            'redis' => [
                'host' => 'localhost',
                'port' => '6379',
                'database' => '5',
                'scheme' => 'tcp'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'magento-454807-1423845.cloudwaysapps.com'
    ],
    'install' => [
        'date' => 'Mon, 10 Aug 2020 11:25:18 +0000'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ]
];

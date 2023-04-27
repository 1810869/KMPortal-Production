<?php

return [
    'endpoint' => [
        'localhost' => [
            'host' => env('SOLR_HOST', '10.101.243.159'),
            'port' => env('SOLR_PORT', '8983'),
            'path' => env('SOLR_PATH', '/'),
            'core' => env('SOLR_CORE', 'OfficialCore'),
            'username' => env('SOLR_USERNAME', 'solr'),
            'password' => env('SOLR_PASSWORD', 'KMPDev123_')
        ]
    ]
];

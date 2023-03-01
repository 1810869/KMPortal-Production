<?php

return [
    'endpoint' => [
        'localhost' => [
            'host' => env('SOLR_HOST', '103.21.182.249'),
            'port' => env('SOLR_PORT', '8983'),
            'path' => env('SOLR_PATH', '/'),
            'core' => env('SOLR_CORE', 'exercise2')
        ]
    ]
];
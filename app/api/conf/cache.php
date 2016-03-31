<?php
return [
    'cache_enable' => TRUE,
    'cache' => [ // engine: redis, memcache, file, apc
        'shared' => [
            'default' => [
                9 => 'default'
            ],
        ],
        'nodes' => [
            'default' => ['engine' => 'file', 'prefix'=>'quick_default', 'ttl' => 3600],
            'user' => ['engine' => 'redis', 'prefix'=>'quick_default', 'host' => '127.0.0.1', 'port' => '6379', 'ttl' => 3600],
        ] 
    ],
];

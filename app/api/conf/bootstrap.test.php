<?php
\Quick\Core\Config::load(CONF_PATH . DS . 'cache.php');
\Quick\Core\Config::load(CONF_PATH . DS . 'database.php');

return [
    'logger' => [
        'level' => \Quick\Core\Logger::DEBUG,
        'prefix' => 'near_openapi_service'
    ],
    'timezone' => 'Asia/Shanghai',
    'charset' => 'UTF-8',
    'session_enable' => FALSE,
    'env_dev' => FALSE,
    'serialize' => 'json',
    'http' => [
        'timeout' => 10,
        'engine' => 'curl'
    ]
];

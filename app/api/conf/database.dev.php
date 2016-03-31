<?php
return [
    'database' => [    // 支持mysql, 如果有其它数据库需求，可以自己扩展
        'shared' => [
            'users' => [
                'rules' => [
                    9 => 'default'
                ],
                'table_number' => 1                
            ]
        ],
        'nodes' => [
            'default' => [ // 参考medoo
                'database_type' => 'mysql',
                'database_name' => 'test',
                'server' => '127.0.0.1',
                'port' => 3306,
                'username' => 'root',
                'password' => '12345678',
                'charset' => 'utf8',
                'option' => [
                    PDO::ATTR_CASE => PDO::CASE_NATURAL
                ]
            ]
        ]
    ]
];
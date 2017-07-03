<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=db1.vm.lanyicj.cn;dbname=tm_qihuo',
    'username' => 'dev',
    'password' => 'dev',
    'charset' => 'utf8mb4',
    'enableSchemaCache' => !YII_DEBUG,
    'schemaCacheDuration' => 3600,
    'schemaCache' => 'yacCache',
    // 配置从服务器
    'slaveConfig' => [
        'username' => 'dev',
        'password' => 'dev',
        'charset' => 'utf8mb4',
        'enableSchemaCache' => true,
        'schemaCacheDuration' => 86400,
        'enableSchemaCache' => !YII_DEBUG,
        'attributes' => [
            // use a smaller connection timeout
            PDO::ATTR_TIMEOUT => 10,
        ],
    ],
    // 配置从服务器组
    'slaves' => [
        ['dsn' => 'mysql:host=db1.vm.lanyicj.cn;dbname=tm_qihuo'],
    ],
];

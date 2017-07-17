<?php

// 数据库配置
define('DB_NAME', 'robot_internal');
define('DB_USER', 'root');
define('DB_PASSWORD', 'a000112909');
define('DB_HOST', '127.0.0.1');

// 默认控制器和操作名
$config['defaultController'] = 'Index';
$config['defaultAction'] = 'index';
$config['dbname'] = DB_NAME;
$config['host'] = DB_HOST;
$config['username'] = DB_USER;
$config['password'] = DB_PASSWORD;
$config['db'] = $config;


return $config;
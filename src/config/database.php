<?php

use Illuminate\Database\Capsule\Manager as DB;

$DB = new DB();

$DB->addConnection([
    'driver'=>'mysql',
    'host'=>'localhost',
    'database'=>'agenda',
    'username'=>'root',
    'password'=>'',
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
]);

$DB->setAsGlobal();
$DB->bootEloquent();
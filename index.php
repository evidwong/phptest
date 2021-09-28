<?php

require_once __DIR__.'/vendor/autoload.php';

use Medoo\Medoo;

// Connect the database.
$db = new Medoo([
    'database_type' => 'mysql',
    'server' => 'localhost',
    'database_name' => 'test',
    'username' => 'root',
    'password' => ''
]);

$row=$db->get('goods',['id','name','price','num'],['id'=>1]);
var_dump($row);
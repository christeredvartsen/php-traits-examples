<?php
namespace Cogo;

require 'Cogo/Autoload.php';

$database = new Database\MySQL(array(
    'driver' => 'some driver',
    'username' => 'user',
    'password' => 'password',
    'database' => 'database',
    'hostname' => 'localhost',
    'options' => array(
        'some' => 'option',
    ),
));

$storage = new Storage\Filesystem(array(
    'path' => '/some/path',
));

var_dump($database->getParams(), $storage->getParams());

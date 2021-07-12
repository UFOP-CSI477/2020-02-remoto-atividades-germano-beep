<?php

require_once '../vendor/autoload.php';

use App\Models\Produto;
use App\Database\Connection;
use App\Database\AdapterSQLite;

$produto = new Produto("refrigerente","l");

var_dump($produto);

$connection = new Connection(new AdapterSQLite());

var_dump($connection);

$connection->getAdapter()->open();
$connection->getAdapter()->get();
$connection->getAdapter()->close();

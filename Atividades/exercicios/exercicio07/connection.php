<?php

$dbfile = "./dados/db/db_produtos.sqlite";
$dbuser = "";
$dbpassword = "";
$dbhost = "";
$strConnection = "sqlite:".$dbfile;

$connection = new PDO($strConnection, $dbuser, $dbpassword);

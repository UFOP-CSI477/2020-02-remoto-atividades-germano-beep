<?php


   require_once 'connection.php';

    // var_dump($connection);

    // controller -> model
    $estados = $connection->query("SELECT * FROM estados");
    
    // var_dump($estados->fetchAll());

    // view

    require_once 'estadosViews.php';
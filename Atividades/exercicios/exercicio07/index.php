<?php


    require_once 'connection.php';
    // var_dump($connection);

    $produtos = $connection -> query("SELECT * FROM produtos");

    // var_dump($produtos->fetchAll());

    require_once 'produtosViews.php';


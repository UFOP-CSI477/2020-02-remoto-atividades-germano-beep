<?php

    $user = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $nascimento = $_POST['data_nascimento'];
    $cep = $_POST['cep'];
    $genre = $_POST['select_genre'];

    echo "$user, $email, $endereco, $nascimento, $cep, $genre";
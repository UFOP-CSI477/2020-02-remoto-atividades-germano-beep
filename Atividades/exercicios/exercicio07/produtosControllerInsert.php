<?php

require_once 'connection.php';

$nome = $_POST['nome'];
$um = $_POST['um'];

if (empty($nome) || empty($um) || strlen($um) > 3) {
    # code...
    echo '<h3><a class="btn btn-primary" href="index.php">Voltar</a></h3>';
    die('Informe os dados corretamenrte');
}

try {

    $connection->beginTransaction();
    $stmt = $connection->prepare("INSERT INTO produtos(nome, um) VALUES (:nome, :um)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':um', $um);

    $stmt->execute();

    $connection->commit();

    header("Location: index.php");

    exit();
} catch (Exception $p) {
    $connection->rollBack();
    die("Erro ao inserir o produto: ". $p->getMessage());
}

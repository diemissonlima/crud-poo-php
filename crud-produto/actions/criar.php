<?php

require_once "../models/Produto.php";

$database = new Database();
$db = $database->getConnection();
$produto = new Produto($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $produto->nome = $_POST['nome'];
    $produto->descricao = $_POST['descricao'];
    $produto->preco = $_POST['preco'];
    $produto->estoque = $_POST['estoque'];
    $produto->criar();
}
header("Location: ../index.php");
?>

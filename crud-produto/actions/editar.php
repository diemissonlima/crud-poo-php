<?php
require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Produto.php";

$database = new Database();
$db = $database->getConnection();
$produto = new Produto($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto->id = $_POST['id'];
    $produto->nome = $_POST['nome'];
    $produto->descricao = $_POST['descricao'];
    $produto->preco = $_POST['preco'];
    $produto->estoque = $_POST['estoque'];
    $produto->atualizar(); 
}
header("Location: ../index.php");
?>

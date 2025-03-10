<?php

require_once "../models/Produto.php";

$database = new Database();
$db = $database->getConnection();
$produto = new Produto($db);

if (isset($_GET['id'])) {
    $produto->id = $_GET['id'];
    $produto->excluir();
}
header("Location: ../index.php");
?>

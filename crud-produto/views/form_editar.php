<?php
require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../models/Produto.php";

$database = new Database();
$db = $database->getConnection();
$produto = new Produto($db);

$return = $produto->listar_by_id($_GET['id']);

$produto->id = $return['id'];
$produto->nome = $return['nome'];
$produto->descricao = $return['descricao'];
$produto->preco = $return['preco'];
$produto->estoque = $return['estoque'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body data-bs-theme="dark">
    <div class="container mt-5">
        <h2>Editar Produto</h2>
        <form action="../actions/editar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Codigo</label>
                <input type="number" name="id" class="form-control" value="<?php echo $produto->id; ?>" required readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $produto->nome; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control" required><?php echo $produto->descricao; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" class="form-control" value="<?php echo $produto->preco; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Estoque</label>
                <input type="number" name="estoque" class="form-control" value="<?php echo $produto->estoque; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('Confirma os dados?')">Salvar Alterações</button>
            <a href="../index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

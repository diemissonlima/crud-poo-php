<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4" data-bs-theme="dark">

    <h2 class="mb-4">Cadastrar Produto</h2>
    <form action="../actions/criar.php" method="POST" class="mb-4">
        <div class="mb-3">
            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
        </div>
        <div class="mb-3">
            <textarea name="descricao" class="form-control" placeholder="Descrição" required></textarea>
        </div>
        <div class="mb-3">
            <input type="number" step="0.01" name="preco" class="form-control" placeholder="Preço" required>
        </div>
        <div class="mb-3">
            <input type="number" name="estoque" class="form-control" placeholder="Estoque" required>
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Confirma os dados?')">Cadastrar</button>
        <a href="../index.php" class="btn btn-secondary">Cancelar</a>
    </form>

</body>
</html>

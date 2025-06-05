<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Tela de LOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header class="p-4">
        <img src="../img/logo-pp2.png" alt="Logo">
        <h1>Start Play</h1>
        <a href="#"></a>
        <nav>
          <a href="../index.php">Home</a>
          <a href="../card.php">Games</a>
          <a href="../videogame.php">Consoles</a>
        </nav>
        <form class="search-bar">
          <input type="text" placeholder="Pesquisar..." />
          <button type="submit" aria-label="Pesquisar"></button>
      </form>
</header>
<div class="container d-flex flex-column align-items-center mt-5">
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th scope="col">NOME</th>
          <th scope="col">LOGIN</th>
          <th scope="col">SENHA</th>
          <th scope="col">AÇÕES</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          <td>Maria Eduarda de Almeida</td>
          <td>MaduEd</td>
          <td>Qwertyui</td>
          <td>
            <button type="button" class="btn btn-info text-light">
                 <i class="bi bi-eye"></i> Visualizar
            </button>
            <button type="button" class="btn btn-primary">
                <i class="bi bi-pencil"></i> Editar
            </button>
            <button type="button" class="btn btn-danger">
                <i class="bi bi-trash"></i> Excluir
            </button>
          </td>
        </tr>
        <tr>
            <td>Kauã de Almeida dos Santos</td>
            <td>KakaAl</td>
            <td>asdfghjk</td>
            <td>
                <button type="button" class="btn btn-info text-light">
                 <i class="bi bi-eye"></i> Visualizar
                </button>
                <button type="button" class="btn btn-primary">
                    <i class="bi bi-pencil"></i> Editar
                </button>
                <button type="button" class="btn btn-danger">
                    <i class="bi bi-trash"></i> Excluir
                </button>
            </td>
        </tr>
      </tbody>
    </table>
    <div class="w-100 d-flex justify-content-start mb-2">
    <button class="btn btn-success">
        <i class="bi bi-person-plus"></i> Incluir novo usuário
    </button>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
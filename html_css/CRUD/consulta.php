<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_usuario'])){
    include 'conexao.php';
    $nome = mysqli_real_escape_string($conn, $_POST['excluir_usuario']);
    $sql = "DELETE FROM usuario WHERE nomecompleto = '$nome'";
    mysqli_query($conn, $sql);
  }
?>
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
  <header class="p-5">
          <img src="../img/logo-pp2.png" alt="Logo">
          <h1>Start Play</h1>
          <nav>
            <a href="../index.php">Home</a>
            <a href="../card.php">Games</a>
            <a href="../videogame.php">Consoles</a>
          </nav>
  </header>

  <div class="container mt-5">
      <h2 class="text-center">Consulta de Usuários</h2>
      <p class="text-center">Visualize, edite ou exclua usuários do sistema.</p>
  </div>
  <div class="d-flex justify-content-center mt-4 mb-4">
    <nav class = "navbar w-100 d-flex justify-content-center">
      <form class="d-flex w-50" style="max-width:400px;" method="POST" action="consulta.php">
        <label for="search" class="visually-hidden">Consultar</label>
        <input id="search" class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Pesquisar" name="pesquisar" value="" autocomplete="off">
        <button class="btn btn-outline-success" type="submit">Consultar</button>
      </form>
    </nav>
  </div>
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
            <?php 
              $pesquisar = $_POST['pesquisar'] ?? '';

              include 'conexao.php';

              $sql = "SELECT * FROM usuario WHERE nomecompleto LIKE '%$pesquisar%'";

              $dados = mysqli_query($conn, $sql);

              while($linha = mysqli_fetch_assoc($dados)){
                $nome = $linha['nomecompleto'];
                $login = $linha['login'];
                $senha = $linha['senha'];

                echo  "<tr>
                  <td>$nome</td>
                  <td>$login</td>
                  <td>$senha</td>
                  <td>
                    <button type='button' class='btn btn-info text-light'>
                        <i class='bi bi-eye'></i> Visualizar
                    </button>
                    <button type='button' class='btn btn-primary'>
                        <i class='bi bi-pencil'></i> Editar
                    </button>
                    <form method='POST' action='consulta.php' class='d-inline'>
                      <input type='hidden' name='excluir_usuario' value='$nome'>
                      <button type='submit' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja excluir este usuário?\")'>
                          <i class='bi bi-trash'></i> Excluir
                      </button>
                    </form>
                  </td>
                </tr>";
              }
            ?>          
        </tbody>
      </table>
      <div class="w-100 d-flex justify-content-start mb-2">
      <button class="btn btn-success" href="cadastro.php">
      <a href="../cadastro.php" class="text-decoration-none text-white">
          <i class="bi bi-person-plus"></i> Incluir novo usuário
      </button>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
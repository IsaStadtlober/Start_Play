<?php 
  session_start();
  include 'conexao.php';
  // Verifica se o usuário está logado
  if(!isset($_SESSION['usuario_logado'])){
    header("Location: index.php");
    exit();
  }
  // Busca o e-mail da sessão
  $email = $_SESSION['usuario_logado'];
  // Consulta o banco buscar o id do usuário
  $sql = "SELECT tipo_perfil FROM usuario WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $id_usuario = $row['tipo_perfil'] ?? null;

  // se o usuario não for master, bloqueia o acesso
  if ($id_usuario != 2){
    echo '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Acesso Restrito</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="text-center">
            <div class="mb-3">
                <i class="bi bi-shield-lock-fill text-danger" style="font-size: 3rem;"></i>
            </div>
            <h2 class="text-danger mb-3">ACESSO RESTRITO</h2>
            <p class="mb-4">Você não tem permissão para acessar esta página.<br> Retorne para o home.</p>
            <a href="index.php" class="btn btn-primary w-50">Voltar</a>
        </div>
    </body>
    </html>
    ';
    exit();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Tela de LOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="p-5">
          <img src="img/logo-pp2.png" alt="Logo">
          <h1>Start Play</h1>
          <nav>
            <a href="index.php">Home</a>
            <a href="card.php">Games</a>
            <a href="videogame.php">Consoles</a>
          </nav>
  </header>
  <div class="container mt-5">
      <h2 class="text-center">Tela de Log</h2>
  </div>
  <div class="d-flex justify-content-center mt-4 mb-4">
    <nav class = "navbar w-100 d-flex justify-content-center">
      <form class="d-flex w-50" style="max-width:400px;" method="POST" action="log.php">
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
            <th scope="col">LOGIN</th>
            <th scope="col">NOME</th>
            <th scope="col">CPF</th>
            <th scope="col">Data de Acesso</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php 
              $pesquisar = $_POST['pesquisar'] ?? '';

              include 'conexao.php';

              $sql = "SELECT * FROM log_autenticacao WHERE nome LIKE '%$pesquisar%'";

              $dados = mysqli_query($conn, $sql);

              while($linha = mysqli_fetch_assoc($dados)){
                $nome = $linha['nome'];
                $data = $linha['data_hora'];
                $cpf = $linha['cpf'];
                $login = $linha['login'];
                $id = $linha['id_log'];
                $stts = $linha['statususuario'];

                $status_texto = ($stts == 1) ? 'Sucesso' : 'Falha';

                echo  "<tr>
                  <td>$login</td>
                  <td>$nome</td>
                  <td>$cpf</td>
                  <td>$data</td>
                  <td>$status_texto</td>
                </tr>";
              }
            ?>          
        </tbody>
      </table>
      <div class="w-100 d-flex justify-content-between mb-2">
          <a href="CRUD/consulta.php" class="btn btn-success text-decoration-none text-white">
              <i class="bi bi-arrow-left"></i> Voltar
          </a>
      </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
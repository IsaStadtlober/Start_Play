<?php 
  session_start();
  include '../conexao.php';
  // Verifica se o usuário está logado
  if(!isset($_SESSION['usuario_logado'])){
    header("Location: ../index.php");
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
        <style>
            body {
                background:rgb(255, 255, 255);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .card {
                max-width: 400px;
                margin: auto;
                border-radius: 18px;
                box-shadow: 0 8px 32px 0 rgba(31,38,135,0.15);
            }
            .icon-alert {
                font-size: 3rem;
                color: #e94560;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <div class="card p-4 text-center">
            <div class="icon-alert mb-3">
                <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h2 class="text-danger mb-3">Acesso restrito!</h2>
            <p class="mb-4">Você não tem permissão para acessar esta página.</p>
            <a href="../index.php" class="btn btn-primary">Voltar para Home</a>
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
  <!-- php para excluir usuário -->
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_usuario'])){
      include '../conexao.php';
      $nome = mysqli_real_escape_string($conn, $_POST['excluir_usuario']);
      $sql = "DELETE FROM usuario WHERE nomecompleto = '$nome'";
      mysqli_query($conn, $sql);
    }
  ?>
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
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">LOGIN</th>
            <th scope="col">EMAIL</th>
            <th scope="col">AÇÕES</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php 
              $pesquisar = $_POST['pesquisar'] ?? '';

              include '../conexao.php';

              $sql = "SELECT * FROM usuario WHERE nomecompleto LIKE '%$pesquisar%'";

              $dados = mysqli_query($conn, $sql);

              while($linha = mysqli_fetch_assoc($dados)){
                $nome = $linha['nomecompleto'];
                $data = $linha['datanascimento'];
                $sexo = $linha['sexo'];
                $nomematerno = $linha['nomematerno'];
                $cpf = $linha['cpf'];
                $email = $linha['email'];
                $celular = $linha['telefonecelular'];
                $fixo = $linha['telefonefixo'];
                $login = $linha['login'];
                $senha = $linha['senha'];
                $email = $linha['email'];
                $id = $linha['id_usuario']; // Certifique-se que existe o campo id

                echo  "<tr>
                  <td>$id</td>
                  <td>$nome</td>
                  <td>$login</td>
                  <td>$email</td>
                  <td>
                    <button type='button' class='btn btn-info text-light' data-bs-toggle='modal' data-bs-target='#modalVisualizar$id'>
                        <i class='bi bi-eye'></i> Visualizar
                    </button>
                    <a href='editar.php?id=$id' class='btn btn-primary'>
                        <i class='bi bi-pencil'></i> Editar
                    </a>
                    <form method='POST' action='consulta.php' class='d-inline'>
                      <input type='hidden' name='excluir_usuario' value='$nome'>
                      <button type='submit' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja excluir este usuário?\")'>
                          <i class='bi bi-trash'></i> Excluir
                      </button>
                    </form>
                    
                    <!-- Modal Visualizar -->
                    <div class='modal fade' id='modalVisualizar$id' tabindex='-1' aria-labelledby='modalVisualizarLabel$id' aria-hidden='true'>
                      <div class='modal-dialog'>
                        <div class='modal-content'>
                          <div class='modal-header bg-dark text-white'>
                            <h5 class='modal-title' id='modalVisualizarLabel<?php echo $id; ?>'>Dados do Usuário</h5>
                            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Fechar'></button>
                          </div>
                          <div class='modal-body text-dark'>
                            <p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>
                            <p><strong>Data de Nascimento:</strong> " . htmlspecialchars($data) . "</p>
                            <p><strong>Sexo:</strong> " . htmlspecialchars($sexo) . "</p>
                            <p><strong>Nome Materno:</strong> " . htmlspecialchars($nomematerno) . "</p>
                            <p><strong>CPF:</strong> " . htmlspecialchars($cpf) . "</p>
                            <p><strong>Telefone Celular:</strong> " . htmlspecialchars($celular) . "</p>
                            <p><strong>Telefone Fixo:</strong> " . htmlspecialchars($fixo) . "</p>
                            <p><strong>Login:</strong> " . htmlspecialchars($login) . "</p>
                            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                            <p><strong>Senha:</strong> " . htmlspecialchars($senha) . ' (Criptografia MD5)'. "</p>
                            
                          </div>
                          <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
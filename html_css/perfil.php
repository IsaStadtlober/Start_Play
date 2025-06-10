<?php
    session_start();
    include 'conexao.php';

    // Verifica se o usuário está logado
    if (!isset($_SESSION['usuario_logado'])) {
        header("Location: index.php");
        exit();
    }

    // Busca o e-mail da sessão
    $email = $_SESSION['usuario_logado'];

    // Consulta o banco para pegar todas as informações do usuário
    $sql = "SELECT id_usuario, nomecompleto, email, datanascimento, sexo, nomematerno, cpf, telefonecelular, telefonefixo, login FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Meu Perfil - StartPlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background: #fff;
            color: #222;
            min-height: 100vh;
        }
        .profile-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .profile-card {
            background: #fff;
            color: #222;
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(0,0,0,0.10);
            padding: 40px 50px 30px 50px;
            max-width: 450px;
            width: 100%;
            margin-top: 40px;
        }
        .profile-avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #222;
            margin-bottom: 18px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: #222;
        }
        .profile-title {
            font-weight: bold;
            color: #222;
            margin-bottom: 10px;
        }
        .profile-info {
            margin-bottom: 18px;
        }
        .profile-label {
            color: #555;
            font-weight: 500;
        }
        .btn-sair {
            background: #222;
            color: #fff;
            border-radius: 8px;
            font-weight: 500;
            padding: 8px 32px;
            border: none;
            transition: background 0.2s;
            margin-top: 20px;
        }
        .btn-sair:hover {
            background: #444;
            color: #fff;
        }
        .edit-link {
            color: #222;
            text-decoration: none;
            font-weight: 500;
            margin-left: 10px;
        }
        .edit-link:hover {
            color: #000;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-card text-center">
            <div class="profile-avatar mx-auto mb-2">
                <i class="bi bi-person-circle"></i>
            </div>
            <h2 class="profile-title mb-3">Meu Perfil</h2>
            <div class="profile-info text-start">
                <p><span class="profile-label">Nome:</span> <?php echo htmlspecialchars($usuario['nomecompleto']); ?></p>
                <p><span class="profile-label">E-mail:</span> <?php echo htmlspecialchars($usuario['email']); ?></p>
                <p><span class="profile-label">Login:</span> <?php echo htmlspecialchars($usuario['login']); ?></p>
                <p><span class="profile-label">Data de Nascimento:</span> <?php echo htmlspecialchars($usuario['datanascimento']); ?></p>
                <p><span class="profile-label">Sexo:</span> <?php echo htmlspecialchars($usuario['sexo']); ?></p>
                <p><span class="profile-label">Nome da Mãe:</span> <?php echo htmlspecialchars($usuario['nomematerno']); ?></p>
                <p><span class="profile-label">CPF:</span> <?php echo htmlspecialchars($usuario['cpf']); ?></p>
                <p><span class="profile-label">Celular:</span> <?php echo htmlspecialchars($usuario['telefonecelular']); ?></p>
                <p><span class="profile-label">Telefone Fixo:</span> <?php echo htmlspecialchars($usuario['telefonefixo']); ?></p>
            </div>
            <div class="d-flex justify-content-center gap-2 flex-wrap mt-3">
                <a href="logout.php"
                   class="btn btn-outline-danger d-flex align-items-center gap-2"
                   title="Logout">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
                <a href="" id=<?php echo htmlspecialchars($usuario['id_usuario']); ?>&origem=perfil" 
                   class="btn btn-outline-dark d-flex align-items-center gap-2" 
                   title="Editar Perfil">
                    <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="index.php" 
                   class="btn btn-outline-secondary d-flex align-items-center gap-2" 
                   title="Voltar para a Tela Inicial">
                    <i class="bi bi-house-door"></i> Início
                </a>
            </div>
        </div>
    </div>
</body>
</html>
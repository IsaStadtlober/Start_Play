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

// Consulta o banco para pegar o nome e o e-mail
$sql = "SELECT nomecompleto, email FROM usuario WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$usuario = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Conta - StartPlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background:rgb(238, 240, 245); color: #fff; }
        .logout-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .btn-sair {
            background: #e94560;
            color: #fff;
            border-radius: 8px;
            font-weight: 500;
            padding: 8px 32px;
            border: none;
            transition: background 0.2s;
            margin-top: 20px;
        }
        .btn-sair:hover {
            background: #0f3460;
            color: #fff;
        }
        .info-box {
            background: #0f3460;
            border-radius: 12px;
            padding: 30px 40px;
            margin-bottom: 30px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        .info-label {
            color: #e94560;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <img src="img/logo-pp2.png" alt="Logo StartPlay" style="max-width: 70px; margin-bottom: 20px;">
        <div class="info-box text-center">
            <h2>Minha Conta</h2>
            <p><span class="info-label">Nome:</span> <?php echo htmlspecialchars($usuario['nomecompleto']); ?></p>
            <p><span class="info-label">E-mail:</span> <?php echo htmlspecialchars($usuario['email']); ?></p>
        </div>
        <form action="logout.php" method="post">
            <button type="submit" class="btn btn-sair">Sair da Conta</button>
        </form>
    </div>
</body>
</html>
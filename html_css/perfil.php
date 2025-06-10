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
    <link rel="stylesheet" href="formulario.css">
</head>
<body id="cadastro" class="bg-light min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow px-3 py-4" style="max-width: 450px; width: 100%;">
        <div class="text-center mb-4">
            <div class="rounded-circle bg-opacity-25 d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 100px; height: 100px; font-size: 5rem;">
                <i class="bi bi-person-circle text-dark"></i>
            </div>
            <h2 class="fw-bold mb-1">Meu Perfil</h2>
        </div>
        <div class="mb-4 ps-2" style="margin-left:auto; margin-right:auto; max-width: 95%; text-align: left;">
            <p class="mb-2"><span class="fw-semibold text-secondary">Nome:</span> <?php echo htmlspecialchars($usuario['nomecompleto']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">E-mail:</span> <?php echo htmlspecialchars($usuario['email']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">Login:</span> <?php echo htmlspecialchars($usuario['login']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">Data de Nascimento:</span> <?php echo htmlspecialchars($usuario['datanascimento']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">Sexo:</span> <?php echo htmlspecialchars($usuario['sexo']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">Nome da Mãe:</span> <?php echo htmlspecialchars($usuario['nomematerno']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">CPF:</span> <?php echo htmlspecialchars($usuario['cpf']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">Telefone Celular:</span> <?php echo htmlspecialchars($usuario['telefonecelular']); ?></p>
            <p class="mb-2"><span class="fw-semibold text-secondary">Telefone Fixo:</span> <?php echo htmlspecialchars($usuario['telefonefixo']); ?></p>
        </div>
        <div class="d-flex justify-content-center gap-2 flex-wrap mt-2">
            <a href="logout.php"
               class="btn btn-outline-danger d-flex align-items-center gap-2"
               title="Logout">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
            <a href="CRUD/editar.php?id=<?php echo htmlspecialchars($usuario['id_usuario']); ?>&origem=perfil" 
               class="btn btn-outline-dark d-flex align-items-center gap-2" 
               title="Editar Perfil">
                <i class="bi bi-pencil-square"></i> Editar
            </a>
            <a href="index.php" 
               class="btn btn-outline-primary d-flex align-items-center gap-2" 
               title="Voltar para a Tela Inicial">
                <i class="bi bi-house-door"></i> Início
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
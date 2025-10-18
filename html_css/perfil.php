<?php
session_start();
include 'conexao/conexao.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Meu Perfil - StartPlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="perfil_editar.css">
    <link rel="stylesheet" href="dark_mode.css">
</head>

<body id="cadastro" class="bg-light py-4">
    <main>
        <section class="container perfil-editar-dark bg-white rounded-3 mx-auto p-2" style="max-width: 500px; position: relative; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.56);">
            <!-- Seta simples no canto superior esquerdo -->
            <a href="index.php" class="position-absolute top-0 start-0 m-3 text-dark" title="Voltar para início">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>

            <div class="text-center mb-4">
                <!-- Avatar -->
                <div class="rounded-circle bg-light border d-flex align-items-center justify-content-center mx-auto mb-2 mt-2" style="width: 80px; height: 80px;">
                    <i class="bi bi-person-circle text-dark" style="font-size: 3.5rem;"></i>
                </div>

                <!-- Título -->
                <h2 class="fw-bold fs-3 mb-4">Meu Perfil</h2>

                <!-- Informações -->
                <div class="text-start mx-auto" style="max-width: 400px;">
                    <p><span class="fw-bold">Nome:</span> <span class="text-muted"><?= htmlspecialchars($usuario['nomecompleto']) ?></span></p>
                    <p><span class="fw-bold">E-mail:</span> <span class="text-muted"><?= htmlspecialchars($usuario['email']) ?></span></p>
                    <p><span class="fw-bold">Login:</span> <span class="text-muted"><?= htmlspecialchars($usuario['login']) ?></span></p>
                    <p><span class="fw-bold">Data de Nascimento:</span> <span class="text-muted"><?= date('d/m/Y', strtotime($usuario['datanascimento'])) ?></span></p>
                    <p><span class="fw-bold">Sexo:</span> <span class="text-muted"><?= htmlspecialchars($usuario['sexo']) ?></span></p>
                    <p><span class="fw-bold">Nome da Mãe:</span> <span class="text-muted"><?= htmlspecialchars($usuario['nomematerno']) ?></span></p>
                    <p><span class="fw-bold">CPF:</span> <span class="text-muted"><?= htmlspecialchars($usuario['cpf']) ?></span></p>
                    <p><span class="fw-bold">Celular:</span> <span class="text-muted"><?= htmlspecialchars($usuario['telefonecelular']) ?></span></p>
                    <p><span class="fw-bold">Telefone Fixo:</span> <span class="text-muted"><?= htmlspecialchars($usuario['telefonefixo']) ?></span></p>
                </div>

                <!-- Botões -->
                <div class="d-flex justify-content-center gap-2 flex-wrap mt-4">
                    <a href="logout.php" class="btn btn-outline-danger d-flex align-items-center gap-2 fw-semibold">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                    <a href="editar_perfil.php" class="btn btn-outline-dark d-flex align-items-center gap-2 fw-semibold">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>
                    <a href="index.php" class="btn btn-outline-primary d-flex align-items-center gap-2 fw-semibold">
                        <i class="bi bi-house-door"></i> Início
                    </a>
                </div>
            </div>
        </section>
    </main>

    
    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script de Dark Mode -->
    <script src="dark_mode.js"></script>
</body>

</html>
<?php 
    include '../conexao.php';
    session_start();

    // Busca o tipo_perfil do usuário logado
    $email_logado = $_SESSION['usuario_logado'];
    $sqlPerfil = "SELECT tipo_perfil FROM usuario WHERE email = '$email_logado'";
    $resultPerfil = mysqli_query($conn, $sqlPerfil);
    $perfil = mysqli_fetch_assoc($resultPerfil);
    $tipo_perfil = $perfil ? $perfil['tipo_perfil'] : 1; // 1 = comum, 2 = master

    // Aceita o id_usuario via GET ou POST
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
    } elseif (isset($_POST['id_usuario'])) {
        $id = intval($_POST['id_usuario']);
    } else {
        echo "Usuário não encontrado.";
        exit();
    }

    // Detecta origem (crud ou perfil)
    $origem = isset($_GET['origem']) ? $_GET['origem'] : (isset($_POST['origem']) ? $_POST['origem'] : 'perfil');

    // busca dados do usuário
    $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
    $result = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_assoc($result);

    if (!$usuario) {
        echo "Usuário não encontrado.";
        exit();
    }

    // atualiza dados se o form for enviado
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = mysqli_real_escape_string($conn, $_POST['nomecompleto']);
        $datanascimento = mysqli_real_escape_string($conn, $_POST['datanascimento']);
        $sexo = mysqli_real_escape_string($conn, $_POST['sexo']);
        $nomematerno = mysqli_real_escape_string($conn, $_POST['nomematerno']);
        $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $telefonecelular = mysqli_real_escape_string($conn, $_POST['telefonecelular']);
        $telefonefixo = mysqli_real_escape_string($conn, $_POST['telefonefixo']);
        $login = mysqli_real_escape_string($conn, $_POST['login']);

        $sql = 
        "UPDATE usuario SET 
        nomecompleto = '$nome', 
        datanascimento = '$datanascimento', 
        sexo = '$sexo', 
        nomematerno = '$nomematerno', 
        cpf = '$cpf', 
        email = '$email', 
        telefonecelular = '$telefonecelular', 
        telefonefixo = '$telefonefixo', 
        login = '$login' 
        WHERE id_usuario = $id";
        mysqli_query($conn, $sql);

        // Redireciona conforme a origem
        if ($origem == 'crud') {
            header("Location: consulta.php");
        } else {
            header("Location: ../perfil.php");
        }
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; border-radius: 18px;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Editar Usuário</h2>
            <form method="POST">
                <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
                <input type="hidden" name="origem" value="<?php echo htmlspecialchars($origem); ?>">
                <div class="mb-3">
                    <label for="nomecompleto" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nomecompleto" name="nomecompleto" value="<?php echo htmlspecialchars($usuario['nomecompleto']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="datanascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="datanascimento" name="datanascimento" value="<?php echo htmlspecialchars($usuario['datanascimento']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select class="form-select" id="sexo" name="sexo" required>
                        <option value="M" <?php if($usuario['sexo'] == 'M') echo 'selected'; ?>>Masculino</option>
                        <option value="F" <?php if($usuario['sexo'] == 'F') echo 'selected'; ?>>Feminino</option>
                        <option value="O" <?php if($usuario['sexo'] == 'O') echo 'selected'; ?>>Outro</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nomematerno" class="form-label">Nome da Mãe</label>
                    <input type="text" class="form-control" id="nomematerno" name="nomematerno" value="<?php echo htmlspecialchars($usuario['nomematerno']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo htmlspecialchars($usuario['cpf']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telefonecelular" class="form-label">Telefone Celular</label>
                    <input type="tel" class="form-control" id="telefone_celular" name="telefonecelular" value="<?php echo htmlspecialchars($usuario['telefonecelular']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telefonefixo" class="form-label">Telefone Fixo</label>
                    <input type="tel" class="form-control" id="telefone_fixo" name="telefonefixo" value="<?php echo htmlspecialchars($usuario['telefonefixo']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?php echo htmlspecialchars($usuario['login']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Salvar Alterações</button>
                    <a href="consulta.php" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://unpkg.com/imask"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Máscara para Telefone Fixo: (+xx)(xx)xxxx-xxxx
        const telefoneFixoInput = document.getElementById("telefone_fixo");
        if (telefoneFixoInput) {
            IMask(telefoneFixoInput, {
                mask: "(+00)(00)0000-0000",
            });
        }

        // Máscara para Telefone Celular: (+xx)(xx)xxxxx-xxxx
        const telefoneCelularInput = document.getElementById("telefone_celular");
        if (telefoneCelularInput) {
            IMask(telefoneCelularInput, {
                mask: "(+00)(00)00000-0000",
            });
        }

        // Máscara para CPF: xxx.xxx.xxx-xx
        const cpfInput = document.getElementById("cpf");
        if (cpfInput) {
            IMask(cpfInput, {
                mask: "000.000.000-00",
            });
        }

        // Máscara para CEP: xxxxx-xxx
        const cepInput = document.getElementById("cep");
        if (cepInput) {
            IMask(cepInput, {
                mask: "00000-000",
            });
        }
    });
</script>
</body>
</html>

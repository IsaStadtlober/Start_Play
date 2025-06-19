<?php 
    include '../conexao/conexao.php';
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
        $cep = mysqli_real_escape_string($conn, $_POST['cep']);
        $endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
        $numero = mysqli_real_escape_string($conn, $_POST['numero']);
        $complemento = mysqli_real_escape_string($conn, $_POST['complemento']);
        $bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
        $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
        $uf = mysqli_real_escape_string($conn, $_POST['uf']);

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
        login = '$login',
        cep = '$cep',
        logradouro = '$endereco',
        numero = '$numero',
        complemento = '$complemento',
        bairro = '$bairro',
        cidade = '$cidade',
        uf = '$uf'
        WHERE id_usuario = $id";
        mysqli_query($conn, $sql);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../formulario.css">
</head>
<body id="cadastro">
<div class="container mt-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div style="max-width: 600px; width: 100%; border-radius: 18px;">
            <div>
                <div style="max-width: 450px; width: 100%;">
                <div class="rounded-circle bg-opacity-25 d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 90px; height: 90px; font-size: 4rem;">
                <i class="bi bi-pencil-square text-dark"></i>
            </div>
            <h2 class="card-title text-center mb-5">Editar Usuário</h2>
            <form method="POST" action = "">
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

                <section class="row">
                    <div class="col-md-8 mb-3">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" class="form-control" value="<?php echo htmlspecialchars($usuario['logradouro']); ?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="cep" class="form-label">CEP:</label>
                        <input type="text" id="cep" name="cep" class="form-control" maxlength="9" value="<?php echo htmlspecialchars($usuario['cep']); ?>" oninput="buscarCep()" placeholder="00000-000" required>
                        </p>
                    </div>
                </section>
                <section class="row">
                    <div class="col-md-6 mb-3">
                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" id="numero" name="numero" class="form-control" value="<?php echo htmlspecialchars($usuario['numero']); ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="uf" class="form-label">UF:</label>
                        <select id="uf" name="uf" class="form-select" required>
                            <option value="AC"<?php if($usuario['uf'] == 'AC') echo 'selected'; ?>>AC</option>
                            <option value="AL"<?php if($usuario['uf'] == 'AL') echo 'selected'; ?>>AL</option>
                            <option value="AP"<?php if($usuario['uf'] == 'AP') echo 'selected'; ?>>AP</option>
                            <option value="AM"<?php if($usuario['uf'] == 'AM') echo 'selected'; ?>>AM</option>
                            <option value="BA"<?php if($usuario['uf'] == 'BA') echo 'selected'; ?>>BA</option>
                            <option value="CE"<?php if($usuario['uf'] == 'CE') echo 'selected'; ?>>CE</option>
                            <option value="DF"<?php if($usuario['uf'] == 'DF') echo 'selected'; ?>>DF</option>
                            <option value="ES"<?php if($usuario['uf'] == 'ES') echo 'selected'; ?>>ES</option>
                            <option value="GO"<?php if($usuario['uf'] == 'GO') echo 'selected'; ?>>GO</option>
                            <option value="MA"<?php if($usuario['uf'] == 'MA') echo 'selected'; ?>>MA</option>
                            <option value="MT"<?php if($usuario['uf'] == 'MT') echo 'selected'; ?>>MT</option>
                            <option value="MS"<?php if($usuario['uf'] == 'MS') echo 'selected';?>>MS</option>
                            <option value="MG"<?php if($usuario['uf'] == 'MG') echo 'selected'; ?>>MG</option>
                            <option value="PA"<?php if($usuario['uf'] == 'PA') echo 'selected'; ?>>PA</option>
                            <option value="PB"<?php if($usuario['uf'] == 'PB') echo 'selected'; ?>>PB</option>
                            <option value="PR"<?php if($usuario['uf'] == 'PR') echo 'selected'; ?>>PR</option>
                            <option value="PE"<?php if($usuario['uf'] == 'PE') echo 'selected'; ?>>PE</option>
                            <option value="PI"<?php if($usuario['uf'] == 'PI') echo 'selected'; ?>>PI</option>
                            <option value="RJ"<?php if($usuario['uf'] == 'RJ') echo 'selected'; ?>>RJ</option>
                            <option value="RN"<?php if($dados['uf'] == 'RN') echo 'selected'; ?>>RN</option>
                            <option value="RS"<?php if($usuario['uf'] == 'RS') echo 'selected'; ?>>RS</option>
                            <option value="RO"<?php if($usuario['uf'] == 'RO') echo 'selected'; ?>>RO</option>
                            <option value="RR"<?php if($usuario['uf'] == 'RR') echo 'selected'; ?>>RR</option>
                            <option value="SC"<?php if($usuario['uf'] == 'SC') echo 'selected'; ?>>SC</option>
                            <option value="SP"<?php if($usuario['uf'] == 'SP') echo 'selected'; ?>>SP</option>
                            <option value="SE"<?php if($usuario['uf'] == 'SE') echo 'selected'; ?>>SE</option>
                            <option value="TO"<?php if($usuario['uf'] == 'TO') echo 'selected'; ?>>TO</option>
                        </select>
                    </div>
                </section>
                <div class="mb-3">
                    <label for="complemento" class="form-label">Complemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo htmlspecialchars($usuario['complemento']); ?>">
                </div>
                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo htmlspecialchars($usuario['bairro']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo htmlspecialchars($usuario['cidade']); ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-outline-success mt-3 d-flex align-items-center gap-2">
                        <i class="bi bi-save"></i> Salvar Alterações
                    </button>
                    <a href="consulta.php" class="btn btn-outline-secondary mt-3 d-flex align-items-center gap-2">
                        <i class="bi bi-x-circle"></i> Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
<!-- Modal de Sucesso -->
<div class="modal fade" id="modalSucesso" tabindex="-1" aria-labelledby="modalSucessoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-success">
      <div class="modal-header bg-success text-white border-success justify-content-center">
        <i class="bi bi-check-circle-fill fs-1 me-2"></i>
        <h5 class="modal-title" id="modalSucessoLabel">Alterações salvas!</h5>
      </div>
      <div class="modal-body text-center">
        <p class="mb-0">As alterações foram realizadas com sucesso.</p>
      </div>
    </div>
  </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var modal = new bootstrap.Modal(document.getElementById('modalSucesso'));
        modal.show();
        setTimeout(function() {
            window.location.href = "consulta.php";
        }, 4000); // 4 segundos
    });
</script>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="js/viacep.js"></script>
<script>
        let timeout = null; // Variável para controlar o tempo de espera antes da requisição

        function buscarCep() {
            clearTimeout(timeout); // Limpa o timeout anterior para evitar múltiplas chamadas

            timeout = setTimeout(async () => {
                let cep = document.getElementById("cep").value.replace(/\D/g, ''); // Remove caracteres não numéricos

                if (cep.length === 8) { // Confirma que o CEP tem 8 números
                    try {
                        let response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
                        if (!response.ok) throw new Error("Erro na requisição");

                        let data = await response.json();

                        if (!data.erro) {
                            document.getElementById("cidade").value = data.localidade || "";
                            document.getElementById("bairro").value = data.bairro || "";
                            document.getElementById("uf").value = data.uf || "";
                            document.getElementById("endereco").value = data.logradouro || "";
                        } else {
                            console.warn("CEP não encontrado.");
                        }
                    } catch (error) {
                        console.error("Erro ao buscar CEP:", error);
                    }
                }
            }, 100); // Aguarda 500ms antes de fazer a requisição para evitar chamadas excessivas
        }
</script>
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

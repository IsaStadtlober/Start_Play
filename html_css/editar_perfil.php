<?php
include 'conexao/conexao.php';
session_start();

// Busca o tipo_perfil do usuário logado
$email_logado = $_SESSION['usuario_logado'];
$sqlPerfil = "SELECT * FROM usuario WHERE email = '$email_logado'";
$resultPerfil = mysqli_query($conn, $sqlPerfil);
$usuario = mysqli_fetch_assoc($resultPerfil);

if (!$usuario) {
    echo "Usuário não encontrado.";
    exit();
}

$tipo_perfil = $usuario['tipo_perfil'] ?? 1; // 1 = comum, 2 = master
$id = $usuario['id_usuario'];

// atualiza dados se o form for enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    $logradouro = mysqli_real_escape_string($conn, $_POST['logradouro']);
    $numero = mysqli_real_escape_string($conn, $_POST['numero']);
    $complemento = mysqli_real_escape_string($conn, $_POST['complemento']);
    $bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
    $uf = mysqli_real_escape_string($conn, $_POST['uf']);

    $sql = "
        UPDATE usuario SET 
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
        logradouro = '$logradouro', 
        numero = '$numero', 
        complemento = '$complemento', 
        bairro = '$bairro', 
        cidade = '$cidade', 
        uf = '$uf' 
        WHERE id_usuario = '$id'";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="perfil_editar.css">
    <link rel="stylesheet" href="dark_mode.css">
</head>

<body id="cadastro" class="bg-light py-4">
    <main>
        <section class="perfil-editar-dark mx-auto p-5" style="max-width: 500px; position: relative; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.56);">
            <!-- Seta simples no canto superior esquerdo -->
            <a href="perfil.php" class="position-absolute top-0 start-0 m-3 text-dark" title="Voltar para o perfil">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>

            <div class="text-center mb-4">
                <!-- Avatar de edição -->
                <div class="edit-avatar rounded-circle bg-light border d-flex align-items-center justify-content-center mx-auto mb-2 mt-2" style="width: 80px; height: 80px;">
                    <i class="bi bi-pencil-square text-dark" style="font-size: 3.5rem;"></i>
                </div>

                <!-- Título -->
                <h2 class="fw-bold fs-3 mb-4">Editar Perfil</h2>
            </div>

            <!-- Formulário -->
            <form method="POST" action="">
                <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="nomecompleto" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nomecompleto" name="nomecompleto"
                            value="<?php echo htmlspecialchars($usuario['nomecompleto']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="datanascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="datanascimento" name="datanascimento"
                            value="<?php echo htmlspecialchars($usuario['datanascimento']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="sexo" class="form-label">Sexo</label>
                        <select class="form-select" id="sexo" name="sexo" required>
                            <option value="M" <?php if ($usuario['sexo'] == 'M')
                                                    echo 'selected'; ?>>Masculino</option>
                            <option value="F" <?php if ($usuario['sexo'] == 'F')
                                                    echo 'selected'; ?>>Feminino</option>
                            <option value="O" <?php if ($usuario['sexo'] == 'O')
                                                    echo 'selected'; ?>>Outro</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="nomematerno" class="form-label">Nome da Mãe</label>
                        <input type="text" class="form-control" id="nomematerno" name="nomematerno"
                            value="<?php echo htmlspecialchars($usuario['nomematerno']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf"
                            value="<?php echo htmlspecialchars($usuario['cpf']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" class="form-control" id="login" name="login"
                            value="<?php echo htmlspecialchars($usuario['login']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone_celular" class="form-label">Telefone Celular</label>
                        <input type="tel" class="form-control" id="telefone_celular" name="telefonecelular"
                            value="<?php echo htmlspecialchars($usuario['telefonecelular']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone_fixo" class="form-label">Telefone Fixo</label>
                        <input type="tel" class="form-control" id="telefone_fixo" name="telefonefixo"
                            value="<?php echo htmlspecialchars($usuario['telefonefixo']); ?>" required>
                    </div>
                    <div class="col-12 col-md-8">
                        <label for="logradouro" class="form-label">Endereço</label>
                        <input type="text" id="logradouro" name="logradouro" class="form-control"
                            value="<?php echo htmlspecialchars($usuario['logradouro']); ?>" required>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control" maxlength="9"
                            value="<?php echo htmlspecialchars($usuario['cep']); ?>" oninput="buscarCep()"
                            placeholder="00000-000" required>
                    </div>
                    <div class="col-md-6">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" id="numero" name="numero" class="form-control"
                            value="<?php echo htmlspecialchars($usuario['numero']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="uf" class="form-label">UF</label>
                        <select id="uf" name="uf" class="form-select" required>
                            <option value="AC" <?php if ($usuario['uf'] == 'AC')
                                                    echo 'selected'; ?>>AC</option>
                            <option value="AL" <?php if ($usuario['uf'] == 'AL')
                                                    echo 'selected'; ?>>AL</option>
                            <option value="AP" <?php if ($usuario['uf'] == 'AP')
                                                    echo 'selected'; ?>>AP</option>
                            <option value="AM" <?php if ($usuario['uf'] == 'AM')
                                                    echo 'selected'; ?>>AM</option>
                            <option value="BA" <?php if ($usuario['uf'] == 'BA')
                                                    echo 'selected'; ?>>BA</option>
                            <option value="CE" <?php if ($usuario['uf'] == 'CE')
                                                    echo 'selected'; ?>>CE</option>
                            <option value="DF" <?php if ($usuario['uf'] == 'DF')
                                                    echo 'selected'; ?>>DF</option>
                            <option value="ES" <?php if ($usuario['uf'] == 'ES')
                                                    echo 'selected'; ?>>ES</option>
                            <option value="GO" <?php if ($usuario['uf'] == 'GO')
                                                    echo 'selected'; ?>>GO</option>
                            <option value="MA" <?php if ($usuario['uf'] == 'MA')
                                                    echo 'selected'; ?>>MA</option>
                            <option value="MT" <?php if ($usuario['uf'] == 'MT')
                                                    echo 'selected'; ?>>MT</option>
                            <option value="MS" <?php if ($usuario['uf'] == 'MS')
                                                    echo 'selected'; ?>>MS</option>
                            <option value="MG" <?php if ($usuario['uf'] == 'MG')
                                                    echo 'selected'; ?>>MG</option>
                            <option value="PA" <?php if ($usuario['uf'] == 'PA')
                                                    echo 'selected'; ?>>PA</option>
                            <option value="PB" <?php if ($usuario['uf'] == 'PB')
                                                    echo 'selected'; ?>>PB</option>
                            <option value="PR" <?php if ($usuario['uf'] == 'PR')
                                                    echo 'selected'; ?>>PR</option>
                            <option value="PE" <?php if ($usuario['uf'] == 'PE')
                                                    echo 'selected'; ?>>PE</option>
                            <option value="PI" <?php if ($usuario['uf'] == 'PI')
                                                    echo 'selected'; ?>>PI</option>
                            <option value="RJ" <?php if ($usuario['uf'] == 'RJ')
                                                    echo 'selected'; ?>>RJ</option>
                            <option value="RN" <?php if ($usuario['uf'] == 'RN')
                                                    echo 'selected'; ?>>RN</option>
                            <option value="RS" <?php if ($usuario['uf'] == 'RS')
                                                    echo 'selected'; ?>>RS</option>
                            <option value="RO" <?php if ($usuario['uf'] == 'RO')
                                                    echo 'selected'; ?>>RO</option>
                            <option value="RR" <?php if ($usuario['uf'] == 'RR')
                                                    echo 'selected'; ?>>RR</option>
                            <option value="SC" <?php if ($usuario['uf'] == 'SC')
                                                    echo 'selected'; ?>>SC</option>
                            <option value="SP" <?php if ($usuario['uf'] == 'SP')
                                                    echo 'selected'; ?>>SP</option>
                            <option value="SE" <?php if ($usuario['uf'] == 'SE')
                                                    echo 'selected'; ?>>SE</option>
                            <option value="TO" <?php if ($usuario['uf'] == 'TO')
                                                    echo 'selected'; ?>>TO</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento"
                            value="<?php echo htmlspecialchars($usuario['complemento']); ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro"
                            value="<?php echo htmlspecialchars($usuario['bairro']); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade"
                            value="<?php echo htmlspecialchars($usuario['cidade']); ?>" required>
                    </div>
                </div>

                <!-- Botões -->
                <div class="d-flex justify-content-center gap-2 flex-wrap mt-4">
                    <button type="submit" class="btn btn-outline-success d-flex align-items-center gap-2 fw-semibold">
                        <i class="bi bi-save"></i> Salvar
                    </button>
                    <a href="perfil.php" class="btn btn-outline-secondary d-flex align-items-center gap-2 fw-semibold">
                        <i class="bi bi-x-circle"></i> Cancelar
                    </a>
                </div>
            </form>
        </section>
    </main>

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
            document.addEventListener("DOMContentLoaded", function() {
                var modal = new bootstrap.Modal(document.getElementById('modalSucesso'));
                modal.show();
                setTimeout(function() {
                    window.location.href = "perfil.php";
                }, 4000); // 4 segundos
            });
        </script>
    <?php endif; ?>



    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script de Dark Mode -->
    <script src="dark_mode.js"></script>

    <!-- Máscara -->
    <script src="https://unpkg.com/imask"></script>

    <!-- ViaCEP -->
    <script src="js/viacep.js"></script>

    <!-- Busca CEP e preenche os campos -->
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

    <!-- Máscaras de entrada -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
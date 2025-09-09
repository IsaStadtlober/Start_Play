<?php
session_start();

$tipo_perfil = null;
if (isset($_SESSION['usuario_logado'])) {
    $email = $_SESSION['usuario_logado'];
    $sql_tipo = "SELECT tipo_perfil FROM usuario WHERE email = '$email'";
    $result_tipo = mysqli_query($conn, $sql_tipo);
    if ($result_tipo && $row_tipo = mysqli_fetch_assoc($result_tipo)) {
        $tipo_perfil = $row_tipo['tipo_perfil'];
    }
};
?>
<header>
    <img src="../html_css/img/logo-pp2.png" alt="Logo">
    <h1>Start Play</h1>
    <a href="#"></a>
    <nav>
        <a href="../html_css/index.php">Home</a>
        <a href="../html_css/card.php">Games</a>
        <a href="../html_css/videogame.php">Consoles</a>
        <?php if ($tipo_perfil == 2): ?>
            <a href="../CRUD/consulta.php">Usuários</a>
        <?php endif; ?>
    </nav>
    <div class="auth-buttons">
        <?php if (isset($_SESSION['usuario_logado'])): ?>
            <form action="../perfil.php" method="get" class="d-inline p-0 m-0" style="display:inline;">
                <button type="submit" class="btn p-0 border-0 bg-transparent" title="Perfil" style="box-shadow:none; color: #212529;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </button>
            </form>
        <?php else: ?>
            <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#loginModal">Entrar</button>
            <button onclick="location.href='../html_css/cadastro.php'">Cadastro</button>
        <?php endif; ?>
    </div>
</header>
</body>
</html>
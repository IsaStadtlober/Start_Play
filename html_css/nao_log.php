<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Não Logado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dark_mode.css">
</head>

<body class="bg-light py-4">
    <main class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="p-3 text-center">
                        <div class="d-flex align-items-center justify-content-center mt-2 mb-2">
                            <img src="img/logo-pp2.png" alt="Logo" class="logo-startplay me-2" style="max-width: 40px;">
                            <h1 class="fs-4 mb-0">StartPlay</h1>
                        </div>
                        <h2 class="mt-3 mb-2 text-danger fs-2">ACESSO NEGADO</h2>
                        <p class="mb-0">Para acessar esta página, é necessário estar logado em sua conta.</p>
                        <p class="mb-4">Retorne para o home e faça seu cadastro para continuar utilizando o site.</p>
                        <button id="btnVoltar" class="btn btn-outline-primary w-100">Voltar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal Gamer Interativo -->
    <div class="modal fade" id="exitModal" tabindex="-1" aria-labelledby="exitModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exitModalLabel">👾 Antes de sair...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-2">Você sabia que o primeiro console da história foi o <strong>Magnavox Odyssey</strong>, lançado em 1972?</p>
                    <p class="mb-3">Teste seus conhecimentos:</p>
                    <p><strong>Qual console popularizou os cartuchos removíveis?</strong></p>
                    <button class="btn btn-outline-primary btn-sm me-2">Atari 2600</button>
                    <button class="btn btn-outline-primary btn-sm me-2">NES</button>
                    <button class="btn btn-outline-primary btn-sm">Sega Genesis</button>
                </div>
                <div class="modal-footer">
                    <small class="text-muted">Curiosidades como essa estão te esperando. Que tal se cadastrar?</small>
                    <button id="confirmRedirect" class="btn btn-outline-success">Ir para Home</button>
                </div>
            </div>
        </div>
        </div<!-- Modal Curiosidade -->
        <div class="modal fade" id="exitModal" tabindex="-1" aria-labelledby="exitModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exitModalLabel">🎮 Curiosidade Gamer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Conteúdo gerado dinamicamente pelo JS -->
                        <h5 class="fw-bold mb-3">Você sabia?</h5>
                        <p class="mb-3">O jogo <em>Cesties of Reventure</em> foi inspirado em clássicos como Zelda e Stardew Valley, combinando exploração com narrativa emocional. A desenvolvedora Pixel Dream Studios começou como um projeto universitário.</p>
                        <p class="text-muted fst-italic">Quer descobrir mais curiosidades como essa? Cadastre-se e explore o universo indie completo.</p>
                    </div>
                    <div class="modal-footer">
                        <small class="text-muted">Cadastre-se para continuar explorando.</small>
                        <button id="confirmRedirect" class="btn btn-outline-success">Ir para Home</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Script de Dark Mode -->
        <script src="js/dark_mode.js"></script>

        <!-- Script de Interatividade e Curiosidades -->
        <script type="module" src="js/interatividade.js"></script>
</body>

</html>
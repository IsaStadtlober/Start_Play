<?php
session_start(); // Inicia a sessão para acessar as variáveis de usuário

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario_logado"])) {
    header("Location: nao_log.php"); // Redireciona para a página de acesso negado
    exit(); // Finaliza o script
}
// Se o usuário estiver logado, exibe o conteúdo
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Card Jogos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="games_cards.css">
    <link rel="stylesheet" href="dark_mode.css">
</head>

<body>
    <header>
        <img src="img/logo-pp2.png" alt="Logo" class="logo-startplay">
        <h1>Start Play</h1>
        <a href="#"></a>
        <nav>
            <a href="index.php">Home</a>
            <a href="card.php">Games</a>
            <a href="videogame.php">Consoles</a>
        </nav>
        <div class="auth-buttons">
            <div class="d-flex align-items-center gap-2">
                <button type="button" class="btn btn-no-dark btn-secondary text-white toggle-btn" onclick="toggleDarkMode()" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alternar modo claro/escuro">
                    <i class="bi bi-sun-fill transition-icon"></i>
                </button>
                <form action="perfil.php" method="get" class="m-0 p-0">
                    <button type="submit" class="btn p-0 border-0 bg-transparent" title="Perfil" style="box-shadow:none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-person-circle perfil-icon" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main>
        <!--JOGOS INDIE-->
        <h2 class="text-center fw-bold mt-5 mb-5 py-3 px-2" style="font-size: 3vw; letter-spacing: 3px; background: linear-gradient(90deg, transparent, #d4d4d460, transparent);">
            JOGOS INDIE
        </h2>
        <section class="card-body card-games rounded shadow mx-auto mb-5 p-4" style="width: 80%;">
            <!-- Jogo Indie CESTIES OF REVENTURE -->
            <article class="row g-4 align-items-center justify-content-center px-4 mx-auto text-center text-md-start">
                <!-- Imagem -->
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="img/img-card-m.png" alt="Imagem do jogo Cesties of Reventure" class="img-fluid rounded shadow-sm" style="max-width: 230px; width: 100%; height: auto;">
                </div>

                <!-- Texto -->
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center align-items-md-start gap-3 mt-4 mt-md-0">
                    <h2 class="fw-bold text-center text-md-start" style="font-size: 2.5vw; letter-spacing: 3px;">CESTIES OF REVENTURE</h2>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Desenvolvedora:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Pixel Dream Studios.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Data de Lançamento:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">15 de agosto de 2024.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Onde Comprar:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Steam & Epic Games Store.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Nota dos Jogadores:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">7.8/10.</p>
                    </div>
                </div>
            </article>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Requisitos -->
            <aside class="row text-center text-md-start justify-content-center">
                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos mínimos:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 10</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i3 ou AMD equivalente.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">2 GB RAM.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">Intel HD Graphics integrada ou AMD Radeon R2 Graphics integrada.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 12.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">2 GB de espaço livre.</span></p>
                    </div>
                </section>

                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos recomendados:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 10.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i5 ou AMD equivalente.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">4 GB RAM.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce GT 730 ou AMD Radeon HD 6570.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 12.</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">2 GB de espaço livre.</span></p>
                    </div>
                </section>
            </aside>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Sinopse -->
            <section class="text-center">
                <h2 class="fw-bold mb-3" style="font-size: 2vw; letter-spacing: 1px;">SINOPSE CESTIES OF REVENTURE</h2>
                <p class="mx-auto" style="font-size: 1.1vw; width: 45%; font-weight: 500; color: #383838;">
                    A jovem Elara e seu fiel cão, Pipoca, embarcam em uma singela jornada por um mundo de pixel art. Movidos pela curiosidade após encontrarem um mapa rabiscado, eles exploram cenários encantadores, resolvem pequenos desafios e desfrutam da companhia um do outro em busca de novas descobertas.
                </p>
            </section>
        </section>

        <!--Jogo Indie BURALIST-->
        <section class="card-body card-games rounded shadow mx-auto mb-5 p-4" style="width: 80%;">
            <article class="row g-4 align-items-center justify-content-center px-4 mx-auto text-center text-md-start">
                <!-- Imagem -->
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="img/img-card1-m.png" alt="Imagem do jogo Buralist" class="img-fluid rounded shadow-sm" style="max-width: 230px; width: 100%; height: auto;">
                </div>

                <!-- Texto -->
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center align-items-md-start gap-3 mt-4 mt-md-0">
                    <h2 class="fw-bold text-center text-md-start" style="font-size: 2.5vw; letter-spacing: 3px;">BURALIST</h2>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Desenvolvedora:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Brysatine Studios.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Data de Lançamento:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">10 de Outubro de 2022.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Onde Comprar:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Steam & Epic Games Store.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Nota dos Jogadores:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">8.5/10.</p>
                    </div>
                </div>
            </article>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Requisitos -->
            <aside class="row text-center text-md-start justify-content-center">
                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos mínimos:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 7 (64-bit)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i3-3220 ou AMD X4 955</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">4 GB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce GTX 550 Ti ou AMD Radeon HD 6770</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 11</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">3 GB de espaço livre</span></p>
                    </div>
                </section>

                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos recomendados:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 10 (64-bit)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i5-4460 ou AMD FX-8350</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">8 GB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce GTX 750 Ti ou AMD Radeon R9 270X</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 11</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">6 GB de espaço livre</span></p>
                    </div>
                </section>
            </aside>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Sinopse -->
            <section class="text-center">
                <h2 class="fw-bold mb-3" style="font-size: 2vw; letter-spacing: 1px;">SINOPSE BURALIST</h2>
                <p class="mx-auto text-muted" style="font-size: 1.1vw; width: 45%; font-weight: 500;">
                    Em "Buralist", o jogador perdido em um deserto nebuloso e inóspito explora ruínas em busca de respostas. Sem memórias e sob uma atmosfera opressora, a jornada intensifica o isolamento e a sensação de uma presença sinistra, testando a sanidade na busca pela verdade em um mundo implacável.
                </p>
            </section>
        </section>

        <!--JOGOS AAA-->
        <section class="card-body card-games rounded shadow mx-auto mb-5 p-4" style="width: 80%;">
            <!-- Jogo AAA ALEK-STHOR -->
            <article class="row g-4 align-items-center justify-content-center px-4 mx-auto text-center text-md-start">
                <!-- Imagem -->
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="img/img-card2-m.png" alt="Imagem do jogo Alek-Sthor" class="img-fluid rounded shadow-sm" style="max-width: 230px; width: 100%; height: auto;">
                </div>

                <!-- Texto -->
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center align-items-md-start gap-3 mt-4 mt-md-0">
                    <h2 class="fw-bold text-center text-md-start" style="font-size: 2.5vw; letter-spacing: 3px;">ALEK-STHOR</h2>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Desenvolvedora:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Grand Legacy Studios.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Data de Lançamento:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">12 de Setembro de 2023.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Onde Comprar:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Steam & Epic Games Store.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Nota dos Jogadores:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">9.5/10.</p>
                    </div>
                </div>
            </article>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Requisitos -->
            <aside class="row text-center text-md-start justify-content-center">
                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos mínimos:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 10 (64-bit)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i7-9700K ou AMD Ryzen 7 3700X</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">16 GB RAM DDR4 @ 3200MHz</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">GeForce RTX 2070 (8GB VRAM) ou AMD Radeon RX 5700 XT (8GB VRAM)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 12</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">60 GB de espaço livre (SSD recomendado)</span></p>
                    </div>
                </section>

                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos recomendados:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 10 (64-bit)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i9-11900K ou AMD Ryzen 9 5900X</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">32 GB RAM DDR4 @ 3600MHz</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce RTX 3080 (10GB VRAM) ou AMD Radeon RX 6900 XT</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 12</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">60 GB de espaço livre (SSD NVMe obrigatório)</span></p>
                    </div>
                </section>
            </aside>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Sinopse -->
            <section class="text-center">
                <h2 class="fw-bold mb-3" style="font-size: 2vw; letter-spacing: 1px;">SINOPSE ALEK-STHOR</h2>
                <p class="mx-auto text-muted" style="font-size: 1.1vw; width: 45%; font-weight: 500;">
                    Em "Alek-Sthor", uma imersiva simulação medieval, você é um nobre gerenciando propriedades, construindo fortalezas, comandando exércitos e negociando alianças. Suas escolhas moldam o destino do reino, em uma experiência visualmente rica que captura a complexidade e grandiosidade da era medieval.
                </p>
            </section>
        </section>

        <section class="card-body card-games rounded shadow mx-auto mb-5 p-4" style="width: 80%;">
            <!-- Jogo AAA KNIGHT SOULS -->
            <article class="row g-4 align-items-center justify-content-center px-4 mx-auto text-center text-md-start">
                <!-- Imagem -->
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="img/img-card3-m.png" alt="Imagem do jogo Knight Souls" class="img-fluid rounded shadow-sm" style="max-width: 230px; width: 100%; height: auto;">
                </div>

                <!-- Texto -->
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center align-items-md-start gap-3 mt-4 mt-md-0">
                    <h2 class="fw-bold text-center text-md-start" style="font-size: 2.5vw; letter-spacing: 3px;">KNIGHT SOULS</h2>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Desenvolvedora:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Teyvat Wonders Studio.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Data de Lançamento:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">18 de Julho de 2024.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Onde Comprar:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">PlayStation & Epic Games Store.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Nota dos Jogadores:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">9.2/10.</p>
                    </div>
                </div>
            </article>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Requisitos -->
            <aside class="row text-center text-md-start justify-content-center">
                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos mínimos:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 7 (64-bit)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i5-4460 ou AMD Ryzen 5 1400</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">8 GB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce GTX 970 ou AMD Radeon RX 580</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 11</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">40 GB de espaço livre</span></p>
                    </div>
                </section>

                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos recomendados:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 10 (64-bit)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i7-7700K ou AMD Ryzen 7 2700X</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">16 GB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce RTX 2060 ou AMD Radeon RX 5700 XT</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 11</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">40 GB de espaço livre</span></p>
                    </div>
                </section>
            </aside>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Sinopse -->
            <section class="text-center">
                <h2 class="fw-bold mb-3" style="font-size: 2vw; letter-spacing: 1px;">SINOPSE KNIGHT SOULS</h2>
                <p class="mx-auto text-muted" style="font-size: 1.1vw; width: 45%; font-weight: 500;">
                    Em "Knight Souls", jogadores exploram o vibrante mundo de Aerthos como um cavaleiro elemental, protegendo as nações de forças sombrias. A jornada épica leva a vastas regiões, com combates dinâmicos contra criaturas poderosas e a descoberta de segredos ao lado de companheiros únicos, em um mundo aberto cheio de missões e desafios.
                </p>
            </section>
        </section>

        <!--JOGOS + VENDIDOS-->
        <section class="card-body card-games rounded shadow mx-auto mb-5 p-4" style="width: 80%;">
            <!-- Jogo +Vendido SURVIVALCRAFT -->
            <article class="row g-4 align-items-center justify-content-center px-4 mx-auto text-center text-md-start">
                <!-- Imagem -->
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="img/img-card4-m.png" alt="Imagem do jogo Survivalcraft" class="img-fluid rounded shadow-sm" style="max-width: 230px; width: 100%; height: auto;">
                </div>

                <!-- Texto -->
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center align-items-md-start gap-3 mt-4 mt-md-0">
                    <h2 class="fw-bold text-center text-md-start" style="font-size: 2.5vw; letter-spacing: 3px;">SURVIVALCRAFT</h2>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Desenvolvedora:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Block World Studios.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Data de Lançamento:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">17 de Maio de 2011.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Onde Comprar:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Epic Games Store & Play Store.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Nota dos Jogadores:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">9.8/10.</p>
                    </div>
                </div>
            </article>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Requisitos -->
            <aside class="row text-center text-md-start justify-content-center">
                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos mínimos:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows XP ou superior</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i3-3220 ou AMD Phenom II X4 955</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">4 GB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce GT 630 ou AMD Radeon HD 6570</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 11</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">4 GB de espaço livre</span></p>
                    </div>
                </section>

                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos recomendados:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 10 (64-bit)</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Intel Core i5-4460 ou AMD Ryzen 5 1400</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">8 GB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">NVIDIA GeForce GTX 750 Ti ou AMD Radeon RX 560</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">DirectX:</strong> <span class="text-muted">Versão 11</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">6 GB de espaço livre</span></p>
                    </div>
                </section>
            </aside>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Sinopse -->
            <section class="text-center">
                <h2 class="fw-bold mb-3" style="font-size: 2vw; letter-spacing: 1px;">SINOPSE SURVIVALCRAFT</h2>
                <p class="mx-auto text-muted" style="font-size: 1.1vw; width: 45%; font-weight: 500;">
                    Em "Survivalcraft", você explora um mundo aberto de blocos gerado proceduralmente, coletando recursos para construir abrigos, ferramentas e armas. Aventure-se por diversos biomas, enfrente a vida selvagem e use a criatividade para construir estruturas complexas, enquanto explora cavernas, enfrenta perigos e personaliza sua experiência.
                </p>
            </section>
        </section>

        <section class="card-body card-games rounded shadow mx-auto mb-5 p-4" style="width: 80%;">
            <!-- Jogo +Vendido BLOCK-Z -->
            <article class="row g-4 align-items-center justify-content-center px-4 mx-auto text-center text-md-start">
                <!-- Imagem -->
                <div class="col-12 col-md-4 d-flex justify-content-center">
                    <img src="img/img-card5-m.png" alt="Imagem do jogo Block-Z" class="img-fluid rounded shadow-sm" style="max-width: 230px; width: 100%; height: auto;">
                </div>

                <!-- Texto -->
                <div class="col-12 col-md-8 d-flex flex-column justify-content-center align-items-center align-items-md-start gap-3 mt-4 mt-md-0">
                    <h2 class="fw-bold text-center text-md-start" style="font-size: 2.5vw; letter-spacing: 3px;">BLOCK-Z</h2>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Desenvolvedora:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Pixel Puzzle Studios.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Data de Lançamento:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">6 de Junho de 1984.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Onde Comprar:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">Emulação & Epic Games Store.</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row w-100 justify-content-center justify-content-md-start gap-2 gap-md-2 text-center text-md-start">
                        <strong class="fw-bold d-block mx-auto mx-md-0" style="font-size: 1.1vw;">Nota dos Jogadores:</strong>
                        <p class="m-0 text-center text-md-start" style="font-size: 1vw;">9.0/10.</p>
                    </div>
                </div>
            </article>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Requisitos -->
            <aside class="row text-center text-md-start justify-content-center">
                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos mínimos:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows XP ou superior ou Emulador compatível</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Pentium III 800MHz ou equivalente</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">128 MB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">Qualquer placa com suporte a DirectX 7.0</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">50 MB de espaço livre</span></p>
                    </div>
                </section>

                <section class="col-12 col-md-6 mb-4">
                    <div class="mx-auto" style="max-width: 90%;">
                        <h3 class="fw-bold mb-4" style="font-size: 1.7vw;">Requisitos recomendados:</h3>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Sistema Operacional:</strong> <span class="text-muted">Windows 7 ou superior ou Emulador compatível</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Processador:</strong> <span class="text-muted">Pentium 4 1.5GHz ou equivalente</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Memória:</strong> <span class="text-muted">256 MB RAM</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Placa de vídeo:</strong> <span class="text-muted">Qualquer placa com suporte a DirectX 9.0</span></p>
                        <p><strong class="fw-semibold" style="font-size: 1.2vw;">Armazenamento:</strong> <span class="text-muted">250 MB de espaço livre</span></p>
                    </div>
                </section>
            </aside>

            <hr class="my-4 mx-auto" style="width: 100%;">

            <!-- Sinopse -->
            <section class="text-center">
                <h2 class="fw-bold mb-3" style="font-size: 2vw; letter-spacing: 1px;">SINOPSE BLOCK-Z</h2>
                <p class="mx-auto text-muted" style="font-size: 1.1vw; width: 45%; font-weight: 500;">
                    "Block-Z" é um quebra-cabeça pioneiro onde o jogador gira e encaixa formas geométricas coloridas para formar e eliminar linhas, acumulando pontos. Com mecânica simples e estratégica, o jogo oferece uma experiência atemporal e infinitamente replayable, mantendo seu desafio e cativando jogadores de todas as idades.
                </p>
            </section>
        </section>

        <footer class="bg-white shadow-lg mt-5 py-4 px-3 text-center">
            <div class="container">
                <div class="row gy-4 justify-content-center text-start">
                    <!-- Primeira Coluna -->
                    <div class="col-12 col-md-6">
                        <p class="fw-bold fs-5">Starplay</p>
                        <p class="fs-6 me-md-5">É sua fonte completa de conhecimento sobre games. Nosso objetivo é direto: oferecer informações precisas e guias práticos para todos os jogadores. Encontre tudo o que você precisa para dominar seus jogos favoritos em um só lugar.</p>
                        <p class="fw-semibold fs-6">Starplay: Game On, Knowledge Up!</p>
                    </div>

                    <!-- Segunda Coluna -->
                    <div class="col-12 col-md-6 ps-md-4 border-md-start mt-5">
                        <h5 class="fw-bold fs-5">Contatos:</h5>
                        <p class="mb-1 fs-6"><span class="fw-bold">Email:</span> emailficticostarplay@gmail.com</p>
                        <p class="fs-6"><span class="fw-bold">Número:</span> (99) 99999-9999</p>
                    </div>
                </div>

                <!-- Linha horizontal separadora -->
                <hr class="my-5 custom-hr">

                <!-- Parte de Baixo -->
                <div class="text-center">
                    <p class="mb-0 small">&copy; 2025 StarPlay. Todos os direitos reservados.</p>
                    <p class="small mt-0 pt-0">Desenvolvido por <span class="fw-bold fs-6">Equipe Starplay.</span></p>
                </div>
            </div>
        </footer>
    </main>

    <!-- Modal 1: Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 py-1">
                <!-- Botão de Fechar no canto superior direito -->
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Fechar"></button>
                <!-- Imagem e texto no topo do modal -->
                <div class="d-flex align-items-center justify-content-center mt-3 mb-3">
                    <img src="img/logo-pp2.png" alt="Logo Startplay" style="max-width: 40px; margin-right: 10px;">
                    <h1 class="fs-5 mb-0">StartPlay</h1>
                </div>
                <!-- Título do modal -->
                <h2 class="modal-title fs-2 text-center mt-3" id="loginModalLabel">Login</h2>
                <p class="text-center fs-6">Complete com os seus dados para efetuar o login.</p>
                <div class="modal-body">
                    <!-- Formulário de Login -->
                    <?php
                    $erro = [];
                    $dados = [];

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $dados = [
                            "email" => $_POST["email"],
                            "password" => $_POST["password"],
                            "confirm_password" => $_POST["confirm_password"]
                        ];
                        function email($email)
                        {
                            if ($email != "emailficticostarplay@gmail.com") {
                                return "Esse e-mail não está cadastrado";
                            }
                            return null;
                        }
                        function senha($password)
                        {
                            if ($password != "abcdefgh") {
                                return "Senha incorreta";
                            }
                            return null;
                        }

                        function confirmarSenha($password, $confirm_password)
                        {
                            if ($confirm_password != $password) {
                                return "As senhas não são iguais";
                            }
                            return null;
                        }

                        $erro["email"] = email($dados["email"]);
                        $erro["password"] = senha($dados["password"]);
                        $erro["confirm_password"] = confirmarSenha($dados["password"], $dados["confirm_password"]);


                        if (!empty(array_filter($erro))) {
                            // Reabre o modal se houver erros
                            echo "
                        <script>
                          document.addEventListener('DOMContentLoaded', function () {
                            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                            loginModal.show();
                          });
                        </script>";
                        } else {
                            // Exibe o modal de sucesso
                            echo "
                        <script>
                          document.addEventListener('DOMContentLoaded', function () {
                            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                            successModal.show();
                    
                            // Redireciona após 3 segundos
                            setTimeout(function () {
                              window.location.href = 'index.php';
                            }, 3000);
                          });
                        </script>";
                        }
                    }
                    ?>
                    <form action="" method="POST" id="login-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($dados["email"] ?? '') ?>" placeholder="Digite seu e-mail" required>
                            <p style="color: red;"><?php echo $erro["email"] ?? ""; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha:</label>
                            <input type="password" id="password" name="password" class="form-control" value="<?php echo htmlspecialchars($dados["password"] ?? '') ?>" placeholder="Digite sua senha" required>
                            <p style="color: red;"><?php echo $erro["password"] ?? ""; ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirmar Senha:</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" value="<?php echo htmlspecialchars($dados['confirm_password'] ?? '') ?>" placeholder="Confirme sua senha" required>
                            <p style="color: red;"><?php echo $erro["confirm_password"] ?? ""; ?></p>
                        </div>
                        <div class="form-actions mt-4 d-flex justify-content-between">
                            <button type="reset" class="btn btn-outline-secondary w-50" style="margin-right: 20px;">Limpar</button>
                            <button type="submit" class="btn btn-outline-primary w-50" id="login-submit">
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="mb-1 fs-6">Não tem uma conta? <a href="cadastro.php" class="text-primary">Cadastre-se aqui.</a></p>
                    <p class="mb-1 fs-6">Esqueceu a Senha? <a href="#" class="text-primary">Mudar aqui.</a></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script de Dark Mode -->
    <script src="js/dark_mode.js"></script>

    <!-- Script para manipulação dos Modais -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loginForm = document.getElementById("login-form");
            const secondFactorModal = new bootstrap.Modal(document.getElementById("secondFactorModal"));

            // Intercepta o envio do formulário de login
            loginForm.addEventListener("submit", function(event) {
                event.preventDefault(); // Impede o envio padrão do formulário

                // Coleta os dados do formulário
                const email = document.getElementById("email").value;
                const password = document.getElementById("password").value;
                const confirmPassword = document.getElementById("confirm_password").value;

                // Simula a validação do formulário
                if (email === "emailficticostarplay@gmail.com" && password === "abcdfghi" && password === confirmPassword) {
                    console.log("Validação bem-sucedida!");

                    // Abre o modal de segundo fator de autenticação
                    secondFactorModal.show();
                } else {
                    console.log("Erro na validação. Verifique os dados.");
                    alert("Erro na validação. Verifique os dados.");
                }
            });
        });
    </script>
</body>

</html>
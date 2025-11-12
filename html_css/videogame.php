<?php
session_start(); // Inicia a sessão para acessar as variáveis de usuário

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario_logado"])) {
  header("Location: nao_log.php"); // Redireciona para a página de acesso negado;
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
  <title>História dos jogos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="contato.css">
  <link rel="stylesheet" href="consoles.css">
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
    <article class="consoles">
      <!-- Primeiro -->
      <h1 class="primeiro_h1">BITWAVE</h1>
      <h2>ODYSSEY</h2>
      <p>Em 1968, o Bitwave Odyssey revolucionou o entretenimento, sendo o primeiro console doméstico. Criado por Ralph Baer, o console permitia jogos simples, como tênis e labirintos. Apesar dos gráficos básicos, vendeu mais de 100 mil unidades, inspirando futuras gerações de consoles.</p>
      <div class="linhaver"></div>
      <div class="linhahor"></div>
      <div class="containerV">
        <img src="img/image__12_-removebg-preview.png" alt="Bitwave">
      </div>
      <div class="linhadata"></div>
      <div class="linhaver"></div>
      <div class="data1">
        <p>1968</p>
      </div>

      <!-- Segundo -->
      <h1>KRYPT</h1>
      <h2>2900</h2>
      <p>Em 1977, o Krypt surgiu no mercado, um console da segunda geração com promessas de gráficos vetoriais e sons inovadores. Criado pela Stellar Dynamics, o Krypt trazia jogos de ficção científica e aventura. Apesar de não alcançar o sucesso massivo do Atari, o Krypt deixou um legado de inovação e mistério, cultuado por colecionadores e fãs da era de ouro dos videogames.</p>
      <div class="container2">
        <img src="img/krypt.png" alt="Krypt">
      </div>
      <div class="linhaver linhaver2"></div>
      <div class="data1_2">
        <p class=>1977</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Terceiro -->
      <h1>SPECTRA</h1>
      <h2>GENESIS</h2>
      <p>Em 1985, o "Spectra Genesis" chegou à terceira geração, trazendo gráficos vibrantes e ação arcade para casa. Desenvolvido pela "Visionary Tech", destacou-se com jogos como "Genesis Warriors" e "Spectra Racer", rivalizando com outros consoles da época. O "Spectra Genesis" deixou um legado de jogos memoráveis e inovação técnica.</p>
      <div class="container3">
        <img src="img/sega-removebg-preview.png" alt="Spectra">
      </div>
      <div class="linhaver linhaver3"></div>
      <div class="data1_3">
        <p>1985</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Quarto -->
      <h1>NIPPON</h1>
      <h2>DREAMWAVE</h2>
      <p>Em 1990, o Nippon Dreamwave, da Yamato Electronics, chegou à quarta geração com gráficos e som aprimorados. Jogos como "Dreamwave Adventures" e "Nippon Fighters" mostraram mundos imersivos. O console rivalizou na época, deixando um legado de inovação técnica.</p>
      <div class="container4">
        <img src="img/e-removebg-preview.png" alt="Nippon">
      </div>
      <div class="linhaver linhaver4"></div>
      <div class="data1_4">
        <p>1990</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Quinto -->
      <h1 class="polystation">POLSTATION</h1>
      <p>Em 1994, o PolStation revolucionou a quinta geração com jogos 3D imersivos e gráficos poligonais. Títulos como "Poly Racer 3D", "Adventure Quest 3D" e "Space Combat 3D" mostraram o potencial da nova tecnologia. O PolStation, da "PolTech", definiu um novo padrão para os jogos domésticos, marcando o início da era 3D.</p>
      <div class="container5">
        <img src="img/1742321026536-removebg-preview.png" alt="Polystation">
      </div>
      <div class="linhaver linhaver5"></div>
      <div class="data1_5">
        <p>1994</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Sexto -->
      <h1 class="polystation">POLSTATION 2</h1>
      <p>Em 2000, o PolStation 2 elevou a experiência de jogo na sexta geração com gráficos 3D detalhados e mundos expansivos. Jogos como "Urban Legands in San andreas", "Space Combat: Next Gen" e "Racing Legends 2" demonstraram o poder do novo hardware. O PolStation 2, da "PolTech", consolidou a era 3D, oferecendo uma vasta biblioteca de jogos e entretenimento multimídia.</p>
      <div class="container6">
        <img src="img/Adobe_Express_-_file__5_-removebg-preview.png" alt="polystation2">
      </div>
      <div class="linhaver linhaver6"></div>
      <div class="data1_6">
        <p>2000</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Sétimo -->
      <h1>X-GAME</h1>
      <h2>360</h2>
      <p>m 2005, o X-Game 360 chegou à sétima geração, revolucionando o jogo online e os gráficos em alta definição. Desenvolvido pela "TechSphere", destacou-se com jogos como "X-Warfare 360" e "Speed Zone 360", oferecendo partidas multijogador imersivas e mundos detalhados. O X-Game 360, com seu serviço online robusto e foco em jogos de tiro e corrida, definiu um novo padrão para o entretenimento interativo.</p>
      <div class="container7">
        <img src="img/Gemini_Generated_Image_8imnca8imnca8imn-removebg-preview.png" alt="Xbox">
      </div>
      <div class="linhaver linhaver7"></div>
      <div class="data1_7">
        <p>2005</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Oitavo -->
      <h1 class="polystation">POLSTATION 4</h1>
      <p>Em 2013, o PolStation 4, da PolTech, chegou à oitava geração com gráficos de alta definição. Títulos como "Poly Adventures 4", "Space Combat: Reborn" e "Urban Legends 5" ofereceram mundos imersivos. A vasta biblioteca de jogos e as experiências online definiram um novo padrão. O PolStation 4 consolidou a PolTech como líder no entretenimento doméstico.</p>
      <div class="container8">
        <img src="img/polystation4.png" alt="polystation4">
      </div>
      <div class="linhaver linhaver8"></div>
      <div class="data1_8">
        <p>2013</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Nono -->
      <h1>NIPPON</h1>
      <h2>SWITCH</h2>
      <p>Em 2017, o Nippon Switch, da Yamato Tech, revolucionou a oitava geração com seu design híbrido. Jogo como "Nippon Adventures" explora a flexibilidade do console. A portabilidade e a jogabilidade adaptável atraíram jogadores de todas as idades. O Nippon Switch redefiniu o conceito de entretenimento interativo.</p>
      <div class="container9">
        <img src="img/nippon.png" alt="NipponSwitch">
      </div>
      <div class="linhaver linhaver9"></div>
      <div class="data1_9">
        <p>2017</p> <!-- Alterar para o novo ano -->
      </div>
      <!-- Décimo -->
      <h1 class="polystation">POLSTATION 5</h1>
      <p>Em 2020, o PolStation 5 inaugurou a nona geração com gráficos de última geração e carregamento ultrarrápido. A PolTech destacou-se com jogos como "Poly Adventures 5" e "Urban Legends: Next Chapter". O foco em jogos exclusivos e tecnologia de ponta definiu um novo padrão para o entretenimento doméstico.</p>
      <div class="container10">
        <img src="img/polystation5.png" alt="Polystation5">
      </div>
      <div class="linhaver linhaver10"></div>
      <div class="data1_10">
        <p>2020</p> <!-- Alterar para o novo ano -->
      </div>

      <!-- Final -->
      <h1 class="cons_final mt-5 pt-5">CONSIDERAÇÕES FINAIS</h1>
      <p class="par_final">A história dos videogames é marcada por uma evolução constante, impulsionada por inovação e paixão. Desde o Magnavox Odyssey, em 1972, até os consoles atuais como Polstation 5 e X-game Series X/S, a indústria transformou o entretenimento digital.</p>

      <p class="par_final">Cada console significativo trouxe algo novo. O Atar 2600 popularizou os cartuchos, o NES salvou a indústria em 1983, o Polstation introduziu jogos em CD e inovou com controles de movimento.</p>

      <p class="par_final">Alguns consoles se destacaram por recordes de venda e impacto cultural. O PolStation 2 é o mais vendido, com mais de 155 milhões de unidades. O Nentendo, com seu design híbrido, atraiu fãs globalmente.</p>

      <p class="par_final">Esta é uma amostra dos consoles importantes. Muitos outros, como Soga Miga Drove, Netendo 64 e X-game 370, também contribuíram para a evolução dos videogames.</p>
    </article>

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
          <img src="img/logo-pp2.png" alt="Logo Startplay" class="logo-startplay" style="max-width: 40px; margin-right: 10px;">
          <h1 class="fs-5 mb-0">StartPlay</h1>
        </div>
        <!-- Título do modal -->
        <h2 class="modal-title fs-2 text-center mt-3" id="loginModalLabel">Login</h2>
        <p class="text-center fs-6">Complete com os seus dados para efetuar o login.</p>
        <div class="modal-body">
          <!-- Formulário de Login -->
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
          <p class="mb-1 fs-6">Esqueceu a Senha? <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#mudarSenhaModal">Mudar aqui.</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Botão Flutuante de Contato -->
  <button type="button" class="btn-contato-flutuante" data-bs-toggle="modal" data-bs-target="#contatoModal" title="Entre em contato conosco">
    <i class="bi bi-chat-dots-fill"></i>
  </button>

  <!-- Modal de Contato -->
  <div class="modal fade" id="contatoModal" tabindex="-1" aria-labelledby="contatoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4 py-1">
        <!-- Botão de Fechar no canto superior direito -->
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Fechar"></button>
        <!-- Imagem e texto no topo do modal -->
        <div class="d-flex align-items-center justify-content-center mt-3 mb-3">
          <img src="img/logo-pp2.png" alt="Logo Startplay" class="logo-startplay" style="max-width: 40px; margin-right: 10px;">
          <h1 class="fs-5 mb-0">StartPlay</h1>
        </div>
        <!-- Título do modal -->
        <h2 class="modal-title fs-4 text-center mt-3" id="contatoModalLabel">Entre em Contato</h2>
        <p class="text-center fs-6">Preencha o formulário abaixo e entraremos em contato em breve.</p>
        <div class="modal-body">
          <!-- Formulário de Contato -->
          <form action="enviar_email.php" method="POST" id="contato-form">
            <div class="mb-3">
              <label for="nome_contato" class="form-label">Nome:</label>
              <input type="text" id="nome_contato" name="nome" class="form-control" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
              <label for="email_contato" class="form-label">E-mail:</label>
              <input type="email" id="email_contato" name="email" class="form-control" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-3">
              <label for="mensagem_contato" class="form-label">Mensagem:</label>
              <textarea id="mensagem_contato" name="mensagem" class="form-control" rows="3" placeholder="Digite sua mensagem" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
              <button type="reset" class="btn btn-outline-secondary w-50 me-2">Limpar</button>
              <button type="submit" class="btn btn-outline-primary w-50">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS Bundle com Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script de Dark Mode -->
  <script src="js/dark_mode.js"></script>

  <!-- Script de Validação do Formulário e Abertura do Modal de Segundo Fator -->
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
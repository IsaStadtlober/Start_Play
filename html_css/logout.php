<?php
    /* função de logout da conta de um usuario */

    session_start(); // inicia a sessão
    session_unset(); // limpa todas as variáveis de sessão
    session_destroy(); // destroi a sessão
    header("Location: index.php"); // redireciona para a página inicial
    exit(); // encerra a função para evitar que o código continue executando
    // integrar no html do perfil de usuário como <form action="logout.php" method="post">
?>
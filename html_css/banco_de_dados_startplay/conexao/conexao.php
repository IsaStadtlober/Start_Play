<?php 
    // Conexão com o banco de dados
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'startplay';
    $conn = mysqli_connect($host, $user, $password, $database);
    // Verifica se a conexão foi bem-sucedida
    if ($conn){
        /*echo "Conexão bem-sucedida!";*/
    } else {
        echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
    }
?>
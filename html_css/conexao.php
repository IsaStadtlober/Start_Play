<?php 
    // Conexão com o banco de dados
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'starplay';
    $conn = mysqli_connect($host, $user, $password, $database);
    // Verifica se a conexão foi bem-sucedida
    if ($conn){
       /*echo "Conexão bem-sucedida!";*/
    } else {
        echo "Erro na conexão";
    }

    /*Função para data ser exibida no formato brasileiro no CRUD
    function formatodata($data){
        $data = explode('-', $data);
        $data = $data[2].'/'.$data[1].'/'.$data[0];
        return $data;
        // Exemplo: 2023-10-01 será exibido como 01/10/2023
    }*/
?>
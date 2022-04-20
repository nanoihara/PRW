<?php
    //Programa que fará a conexão/ligação entre o banco de dados (banco01.sql) com o site (cadastro_usuario.htm).
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "projeto01";
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if (mysqli_connect_errno()) {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }
    printf("Banco de dados conectado com sucesso \o/");

    // http://localhost/prw/projeto01/conexao.php
    // http://127.0.0.1/prw/projeto01/conexao.php
?>
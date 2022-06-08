<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    // 2.2. Conexao.php - Sript php responsável pela conexão com o banco de dados denominado Prova2.

    //Programa que fará a conexão/ligação entre o banco de dados (bancoprova2.sql) com o site (cadastro_fluxo_caixa.html).
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "Prova2"; //database criada no banco de dados que se chama "Prova2"

    //Aviso: criar o banco de dados no MySQLWorkbench primeiro com o script bancoprova2.sql para depois executar o conexao.php
    
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if (mysqli_connect_errno()) {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }
    //Teste: printf("Banco de dados conectado com sucesso \o/");

    // http://localhost/prw/Prova2/conexao.php
    // http://127.0.0.1/prw/Prova2/conexao.php
?>
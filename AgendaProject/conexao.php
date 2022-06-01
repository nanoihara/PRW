<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    // 2.2. Conexao.php - Sript php responsável pela conexão com o banco de dados denominado lista06.

    //Programa que fará a conexão/ligação entre o banco de dados (bancoAgendaProject.sql) com o site (cadastro_agenda.html).
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "agendaProject"; //database criada no banco de dados se chama "agendaProject"

    //Aviso: criar o banco de dados no MySQLWorkbench primeiro com o script bancoLista06.sql para depois executar o conexao.php
    
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if (mysqli_connect_errno()) {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }
    //Teste: printf("Banco de dados conectado com sucesso \o/");

    // http://localhost/prw/AgendaProject/conexao.php
    // http://127.0.0.1/prw/AgendaProject/conexao.php
?>
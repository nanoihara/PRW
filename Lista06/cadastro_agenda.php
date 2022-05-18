<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 06 - Inserção dos dados no banco de dados através do comando INSERT</title>
</head>
<body>
</body>
<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.4. Cadastro_agenda.php - Script php que receberá dados 
    do formulário "Cadastro_aagenda.html" e efetuará a inserção
    dos dados no banco de dados através do comando INSERT. */

    //Impressão do nome.
    echo "Lista 06 - Inserção dos dados no banco de dados através do comando INSERT,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
    include("conexao.php");

    //Declaração das variáveis.
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];

    $data = date('Y-m-d');

    //Impressão dos dados recebidos do formulário.
    echo "<p><b>Nome do contato:</b> ".$nome."<br>";
    echo "<b>Apelido:</b> ".$apelido."<br>";
    echo "<b>Endereço:</b> ".$endereco."<br>";
    echo "<b>Bairro:</b> ".$bairro."<br>";
    echo "<b>Cidade:</b> ".$cidade."<br>";
    echo "<b>Estado:</b> ".$estado."<br>";
    echo "<b>Telefone:</b> ".$telefone."<br>";
    echo "<b>Celular:</b> ".$celular."<br>";
    echo "<b>E-mail:</b> ".$email."<br>";
    echo "<br><b>Data do cadastro:</b> ".$data."</p>";

    //Ao final, cria-se uma variável para inserir os valores no banco de dados.
    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
            VALUES ('".$nome."', '".$apelido."', '".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."', '".$data."');";
    
    $result = mysqli_query($con, $sql);

    if ($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados: ".mysqli_error($con);

    // http://localhost/prw/Lista06/index.html
    // http://127.0.0.1/prw/Lista06/index.html

?>
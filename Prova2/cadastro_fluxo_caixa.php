<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova 2º bimestre - Cadastro php</title>
</head>
<body>
</body>
<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.4. Cadastro_fluxo_caixa.php - Script php que receberá dados 
    do formulário "Cadastro_fluxo_caixa.html" e efetuará a inserção
    dos dados no banco de dados através do comando INSERT. */

    //Impressão do nome.
    echo "Cadastro do fluxo da caixa - Inserção dos dados no banco de dados através do comando INSERT,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
    include("conexao.php");

    //Declaração das variáveis.
    $data = $_POST["data"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $historico = $_POST["historico"];
    $cheque = $_POST["cheque"];

    //Impressão dos dados recebidos do formulário.
    echo "<p><b>Data do fluxo:</b> ".$data."<br>";
    echo "<b>Tipo:</b> ".$tipo."<br>";
    echo "<b>Valor:</b> ".$valor."<br>";
    echo "<b>Histórico:</b> ".$historico."<br>";
    echo "<b>Cheque:</b> ".$cheque."</p>";

    //Ao final, cria-se uma variável para inserir os valores no banco de dados.
    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
            VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";
    
    $result = mysqli_query($con, $sql);

    if ($result)
        echo "<br><br>Dados inseridos com sucesso";
    else
        echo "<br><br>Erro ao inserir no banco de dados: ".mysqli_error($con);
    
    // http://localhost/prw/Prova2/index.html
    // http://127.0.0.1/prw/Prova2/index.html

?>

<br> <br>

Voltar para a:
<ul>
    <li><a href="listar_fluxo_caixa.php">Listagem do fluxo de caixa</a></li>
    <li><a href="index.php">Página inicial</a></li>
</ul>
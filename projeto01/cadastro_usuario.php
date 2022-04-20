<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo de Aula</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* Ex: Criar um script php chamado “cadastro_usuario.php” que receberá as
    informações do formulário. */

    //Impressão do nome.
    echo "Exemplo de Aula - Formulário associado a um banco de dados (cadastro de um usuário),<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
    include("conexao.php");
    //Declaração das variáveis.
    $nome_usuario = $_POST["nome_usuario"];
    $email_usuario = $_POST["email_usuario"];
    $fone_usuario = $_POST["fone_usuario"];

    //Impressão dos dados recebidos do formulário.
    echo "<p><b>Nome do usuario:</b> ".$nome_usuario."<br>";
    echo "<b>E-mail:</b> ".$email_usuario."<br>";
    echo "<b>Telefone:</b> ".$fone_usuario."</p>";
    // http://localhost/prw/projeto01/cadastro_usuario.htm
    // http://127.0.0.1/prw/projeto01/cadastro_usuario.htm

?>
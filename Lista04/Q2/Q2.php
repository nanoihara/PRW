<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 2 - Lista 4</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* <!-- 2. Fazer um formulário que contenha todos os itens apresentados abaixo. Em
    seguida, faça um script php que apresente todos os dados enviados.
    - Caixa de texto de uma linha (Text);
    - Caixa de texto de rolagem (TextArea);
    - Caixa de seleção (CheckBox);
    - Botão de opção (Radio);
    - Menu suspenso (Select e Option) ;
-    Botão de envio (Submit). -->
    */

    //Impressão do nome.
    echo "Questão 2 - Formulário de matrícula/transferência de um aluno (contendo todos os itens do enunciado),<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    // ANO & CURSO ENSINO MÉDIO.
    $ano = $_POST["ano"];
    $curso = $_POST["curso"];

    // DADOS DO RESPONSÁVEL
    $nomeR = $_POST["nomeR"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    // DADOS DO ALUNO
    $nomeA = $_POST["nomeA"];
    $idade = $_POST["idade"];

    // ALERGIAS
    $alergiaEscrita = $_POST["alergiaEscrita"];

    echo "<h1>Dados da Matrícula/Transferência do aluno</h1>";
    echo "<h3>Aluno:</h3>";
    echo "Matrículado/Transferido para o <b>".$ano."º</b> ano do Ensino Médio, integrado ao curso técnico de <b>".$curso."</b>.";
    echo "<br><br><b>• Nome: </b>".$nomeA."<br><b>• Idade: </b>".$idade;
    echo "<br><br>• <b>Possui alergia(s) a:</b>";
    
    //Verifica se algum checkbox de "alergia" foi selecionado
    if (isset($_POST["alergia"]))

        //Faz um loop no Array de checkbox
        //A função count retorna a quantidade de checkbox selecionado
        for($i = 0; $i < count($_POST["alergia"]); $i++)
            echo "<br>=> ".$_POST["alergia"][$i];


    echo "<br><br>• <b>E estas são as descrições delas:</b><br>=> ".$alergiaEscrita;
    echo "<br><br><br><h3>Responsável</h3>";
    echo "<b>• Nome: </b>".$nomeR."<br><b>• Telefone: </b>".$telefone."<br><b>• E-mail: </b>".$email;

    // http://localhost/prw/Lista04/Q2/Q2.html
    // http://127.0.0.1/prw/Lista04/Q2/Q2.html

?>
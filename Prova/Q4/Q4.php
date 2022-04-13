<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 4 - Prova</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* 4. (3,5 Pontos) (Formulário e Validação) Crie um formulário contendo Nome do Cliente, Estado (Menu
    Suspenso), CPF, RG, Sexo (Botão de Opção), Saldo do Cartão de Crédito e Total da Compra e um script em
    PHP capaz de validar esses campos da seguinte forma:
    • Nome do Cliente, CPF, RG não podem estar em branco;
    • O saldo do cartão de crédito deve ser maior que o total da compra, se o saldo for menor que o total
    apresentar a mensagem “Saldo Insuficiente para Concluir Compra!” na cor Vermelho, senão deverá
    apresentar uma mensagem contendo o novo saldo, ou seja, saldo – total da compra.
    • Antes da validação deverá mostrar todos os dados cadastrados. */

    //Impressão do nome.
    echo "Questão 4 - Formulário que mostra informações do cliente,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    // $NOME
    $nome = $_POST["nome"];

    // $ESTADO
    $estado = $_POST["estado"];

    // $CPF
    $cpf = $_POST["cpf"];
    $cpf = doubleval($cpf);

    // $RG
    $rg = $_POST["rg"];
    $rg = doubleval($rg);

    // $SEXO
    $sexo = $_POST["sexo"];

    // $SALDO
    $saldo = $_POST["saldo"];
    $saldo = floatval($saldo);

    // $TOTAL
    $total = $_POST["total"];
    $total = floatval($total);

    $erro = 0;
    $valor = 0;

    //Mostrará o valor depositado em cada uma das variáveis citadas anteriormente (menos $erro e $valor).
    echo "<br><br>INFORMAÇÕES DO CLIENTE";
    echo "<br>• Nome: ".$nome;
    echo "<br>• Estado: ".$estado;
    echo "<br>• CPF: ".$cpf;
    echo "<br>• RG: ".$rg;
    echo "<br>• Sexo <b>".$sexo."</b>";
    echo "<br>• Saldo do Cartão de Crédito: R$".$saldo;
    echo "<br>• Total da Compra: R$".$total;

    echo "<br>";

    //Após, irá verificar se os valores de NOME, RG E CPF não estão EM BRANCO.
    //Caso algum estiver em branco, somará +1 ao $erro.
    if (empty($nome))
        echo "<br>O campo 'NOME' está em branco.";
        $erro++;
    
    if (empty($rg))
        echo "<br>O campo 'RG' está em branco.";
        $erro++;
    
    if (empty($cpf))
        echo "<br>O campo 'CPF' está em branco";
        $erro++;
    
    //Se tiver algum valor em branco, falará para o usuário voltar para a página anterior e digitar novamente.
    if ($erro < 0)
        echo "<br><br>Volte à página anterior e preencha-o(os).";
    
    else
        //Cálculo para obter o valor do saldo do cartão com o total da compra.
        $valor = $saldo - $total;
    
        //Se o $valor for menor que 0, aparecerá uma mensagem de erro, falando que não há saldo o suficiente para pagar a compra.
        if ($valor < 0)
            echo "<p style='color: red;'>Saldo insuficiente para concluir a compra!</p>";
        
        else 
            echo "<br><br> O valor do novo saldo do cartão, após a compra de R$".$total." ser paga, será: R$".$valor;
 
    // http://localhost/prw/Prova/Q4/Q4.html
    // http://127.0.0.1/prw/Prova/Q4/Q4.html

?>
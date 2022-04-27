<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 1 - Prova</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* (1,5 Ponto) (Estrutura Condicional)* Efetue um script PHP que calcule e imprima o salário reajustado de um
    funcionário de acordo com a seguinte regra:
        • Salários até 300, reajuste de 50% -> aumento de 50% do salário
        • Salários maiores que 300, reajuste de 30% -> aumento de 30% do salário */

    //Impressão do nome.
	echo "Questão 1 - Script PHP que mostra o salário reajustado de um funcionário,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $salario = 300;
    $reajuste = 0;
    $porcent_1 = 0.5;
    $porcent_2 = 0.3;
    
    //Impressão do salário do funcionário armazenado na variável.
    echo "<br><br>Salário do funcionário: ".$salario;

    //Comando condicional para verificar qual o reajuste que o salário do funcionário deve receber (se é um aumento de 50% ou 30%).
    if ($salario <= 0) //Um funcionário NÃO RECEBE UM SALÁRIO DE ZERO REAIS.
        echo "<br><br>Digite um salário para um funcionário que seja maior que zero reais.";

    else 
        if ($salario <= 300) //SALÁRIO MENOR OU IGUAL A 300.
            //Colocará o valor da porcentagem referente a esse salário.
            $porcent = 0.5;

        else
            //Colocará o valor da porcentagem referente a esse salário.
            $porcent = 0.3;

        //Calculará o valor do reajuste do salário, cujo é o salário mais o salário vezes a porcentagem de aumento.
        $reajuste = $salario + ($salario * $porcent);

        //E mostrará o valor final do salário do funcionário, após o reajuste.
        echo "<br><br>Após o reajuste do salário, o funcionário terá o salário final de: R$".$reajuste.", aumentado em ".$porcent."% do valor que era antes.";

    // http://localhost/prw/Prova/Q1.php 
    // http://127.0.0.1/prw/Prova/Q1.php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 2 - Prova</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* 2. (1,5 Ponto) (Estrutura de Repetição)* Efetue um script PHP que a partir de dois valores quaisquer e efetue
    sua multiplicação e apresente o resultado utilizando para isso apenas o operador “+”, visto que:
    • (3 * 5) = 5 + 5 + 5
    • (4 * 12) = 12 + 12 + 12 + 12 */

    //Impressão do nome.
	echo "Questão 2 - Script PHP que efetua a multiplicação de dois números só usando o operador '+',<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $num1 = 5;
    $num2 = 10;
    $result = 0;
    $i = 1;
    
    //Impressão dos números armazenados nas variáveis.
    echo "<br><br>O primeiro número: ".$num1;
    echo "<br>O segundo número armazenado: ".$num2;

    //Comando condicional para descobrir qual é o menor número entre os dois armazenados nas variáveis.
    if ($num1 <= $num2)
        //Comando de repetição para substituir a multiplicação por apenas operador de soma, usando o menor número para fazer a repetição ($num1);
        for ($i; $i <= $num1; $i++)
            $result = $result + $num2;
    else
        //Comando de repetição para substituir a multiplicação por apenas operador de soma, usando o menor número para fazer a repetição ($num2);
        for ($i; $i <= $num2; $i++)
            $result = $result + $num1;
    
    //Ao final, mostrará o resultado da multiplicação, utilizado apenas o operador de soma.
    echo "<br><br>O resultado da multiplicação entre ".$num1." e ".$num2." é: ".$result;

    // http://localhost/prw/Prova/Q2.php 
    // http://127.0.0.1/prw/Prova/Q2.php

?>
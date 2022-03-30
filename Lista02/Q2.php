<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 2 - Lista 2</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* 2. Faça um script PHP que leia um número que represente um
    determinado mês do ano. Após a leitura escreva por extenso qual
    o mês lido. Caso o número digitado não esteja na faixa de 1 .. 12
    escreva uma mensagem informando o usuário do erro da digitação. */

    //Impressão do nome.
	echo "Questão 2 - Número equivalente ao mês,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $num = 0;
    $soma = 0;
    
    //Comando de repetição, para somar todos os números pares menores que 100.
    for ($num; $num < 100; $num = $num + 2)
        $soma = $soma + $num;
    
    //Imrpessão do resultado armazenado em $soma, sendo este a soma de todos os números pares menores que 100.
    echo "<br><br>A soma de todos os números pares menores que 100 resulta em: ".$soma;

    // http://localhost/prw/Lista02/Q2.php
    // http://127.0.0.1/prw/Lista02/Q2.php

?>
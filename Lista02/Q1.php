<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 1 - Lista 2</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 1. Faça um script PHP para somar os números pares < 100

    //Impressão do nome.
	echo "Questão 1 - Soma dos números pares menores que 100,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $num = 0;
    $soma = 0;
    
    //Comando de repetição, para somar todos os números pares menores que 100.
    for ($num; $num < 100; $num = $num + 2)
        $soma = $soma + $num;
    
    //Impressão do resultado armazenado em $soma, sendo este a soma de todos os números pares menores que 100.
    echo "<br><br>A soma de todos os números pares menores que 100 resulta em: ".$soma;

    // http://localhost/prw/Lista02/Q1.php
    // http://127.0.0.1/prw/Lista02/Q1.php

?>
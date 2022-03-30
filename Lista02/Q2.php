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
    $mes;
    
    //Comando switch case, para trocar o valor numérico da variável para o seu nome equivalente do mês.
    switch($num){
        case 1: $mes = "Janeiro"; break;
        case 2: $mes = "Fevereiro"; break;
        case 3: $mes = "Março"; break;
        case 4: $mes = "Abril"; break;
        case 5: $mes = "Maio"; break;
        case 6: $mes = "Junho"; break;
        case 7: $mes = "Julho"; break;
        case 8: $mes = "Agosto"; break;
        case 9: $mes = "Setembro"; break;
        case 10: $mes = "Outubro"; break;
        case 11: $mes = "Novembro"; break;
        case 12: $mes = "Dezembro"; break;
        default: $mes = "nada"; break;
    }
    
    //Imrpessão do resultado armazenado em $soma, sendo este a soma de todos os números pares menores que 100.
    echo "<br><br>A soma de todos os números pares menores que 100 resulta em: ".$soma;

    // http://localhost/prw/Lista02/Q2.php
    // http://127.0.0.1/prw/Lista02/Q2.php

?>
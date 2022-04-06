<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 1 - Lista 4</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 1. Criar um formulário que contenha os itens apresentados abaixo. Em seguida faça um script php que efetue os cálculos e apresente o resultado.

    //Impressão do nome.
	echo "Questão 7 - Script que exibe o link invertido em uma variável e transforme em um link funcional,<br>feito por Lana Akemi Ihara, 3º INFO.";

    $num1 = $_GET["num1"];
    $num1 = intval($num1);

    $num2 = $_GET["num2"];
    $num2 = intval($num2);
    $calc;

    if ($matematica == "somar")
        echo "<h1> Soma de dois números </h1>";
        $calc = $num1 + $num2;
        echo "<br>A soma de ".$num1." com ".$num2." é: ".$calc;

    //Impressão do link armazenado em $link.
    echo "<br><br>O link invertido armazenado é: ".$link;

    //Comando de manipulação de string para reverter uma palavra (strrev) em $link.
    $linkTrue = strrev($link);

    //Ao final, irá mostrar a palavra digitada anteriormente de forma reversa.
    echo "<br><br>O link, agora funcional, será: <a href='https:\\".$linkTrue."'>".$linkTrue."</a>";

    // http://localhost/prw/Lista04/Q1/Q1.php
    // http://127.0.0.1/prw/Lista04/Q1/Q1.php

?>
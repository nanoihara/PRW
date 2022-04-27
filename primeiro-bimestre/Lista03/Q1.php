<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 1 - Lista 3</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 1. Crie um script em PHP que exiba quantos caracteres possui uma palavra ou frase que foi atribuída a uma variável.

    //Impressão do nome.
	echo "Questão 1 - Script que exibe quantos caracteres possui uma palavra ou frase,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $frase = " torrada amantegada e suco  de laranja      doce ";
    $fraseEspaco;
    
    //Impressão da palavra ou frase armazenada dentro da variável $frase
    echo "<br><br>A frase ou palavra digitada é: ".$frase;

    //Comando de manipulação de string para contar a quatidade de caracteres (strlen) da palavra ou frase atual.
    echo "<br>A quantidade de caracteres dela (contando os espaços), é de: ".strlen($frase);

    //Comando de manipulação de string para retirar os espaços iniciais e finais (trim), tirar os demais espaços (str_replace) e contar a quantidade de caracteres (strlen) da palavra ou frase.
    $fraseEspaco = trim($frase);
    $fraseEspaco = str_replace(" ", "", $frase);

    echo "<br><br>A quantidade de caracteres da frase *".$frase."* (sem contar os espaços iniciais e finais), é de: ".strlen($fraseEspaco);

    // http://localhost/prw/Lista03/Q1.php
    // http://127.0.0.1/prw/Lista03/Q1.php

?>
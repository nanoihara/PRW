<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 2 - Lista 3</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 2. Crie um script em PHP que pegue uma palavra contida em uma variável e substitua todas as vogais por X.

    //Impressão do nome.
	echo "Questão 2 - Script que substitui todas as vogaais de uma palavra em X,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $palavra = "manteiga";
    $palavraVet;
    
    //Impressão da palavra armazenada dentro da variável $palavra
    echo "<br><br>A palavra digitada é: ".$palavra;

    //Comando de manipulação de string para retirar os espaços iniciais e finais (trim) e extrair partes de um variável (explode).
    $palavraVet = trim($palavra);
    $palavraVet = explode("", $palavra);

    //Comando de manipulação de string para retirar os espaços iniciais e finais (trim) e contar a quantidade de caracteres (strlen) da palavra ou frase.
    $fraseEspaco = trim($frase);

    echo "<br><br>A quantidade de caracteres da frase *".$frase."* (sem contar os espaços iniciais e finais), é de: ".strlen($fraseEspaco);

    // http://localhost/prw/Lista03/Q2.php
    // http://127.0.0.1/prw/Lista03/Q2.php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 6 - Lista 3</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 6. Crie um script em PHP que exiba a palavra contida em uma variável de maneira inversa.

    //Impressão do nome.
	echo "Questão 6 - Script que exibe a palavra contida em uma variável de forma inversa,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $palavra = "BiScoito de mel doCE e mUito bOM";
    $palavraR;

    //Impressão da palavra armazenada em $palavra.
    echo "<br><br>A palavra armazenada é: $".$palavra;

    //Comando de manipulação de string para reverter uma palavra (strrev) em $palavra.
    $palavraR = strrev($palavra);

    //Ao final, irá mostrar a palavra digitada anteriormente de forma reversa.
    echo "<br><br>A palavra de maneira inversa será: ".$palavraR;

    // http://localhost/prw/Lista03/Q6.php
    // http://127.0.0.1/prw/Lista03/Q6.php

?>
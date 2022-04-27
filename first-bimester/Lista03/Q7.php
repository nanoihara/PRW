<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 7 - Lista 3</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 7. Crie um script em PHP que transforme o seguinte link (rb.ude.psfi.www) que está invertido de maneira inversa, transformando em um link funcional.

    //Impressão do nome.
	echo "Questão 7 - Script que exibe o link invertido em uma variável e transforme em um link funcional,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $link = "rb.ude.psfi.www";
    $linkTrue;

    //Impressão do link armazenado em $link.
    echo "<br><br>O link invertido armazenado é: ".$link;

    //Comando de manipulação de string para reverter uma palavra (strrev) em $link.
    $linkTrue = strrev($link);

    //Ao final, irá mostrar a palavra digitada anteriormente de forma reversa.
    echo "<br><br>O link, agora funcional, será: <a href='https:\\".$linkTrue."'>".$linkTrue."</a>";

    // http://localhost/prw/Lista03/Q7.php
    // http://127.0.0.1/prw/Lista03/Q7.php

?>
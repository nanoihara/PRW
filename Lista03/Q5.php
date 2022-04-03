<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 5 - Lista 3</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 5. Crie um script em PHP que a partir de uma data exiba o dia da semana (segunda, terça, ...).

    //Impressão do nome.
	echo "Questão 5 - Script que exibe o dia da semana a partir de uma data,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $data = "data";

    //Impressão do nome da única variável que armazenará os valores do dia, mês e ano.
    echo "<br><br>O nome da única variável que terá os valores do dia, mês e ano é: $".$data;

    //Comando de manipulação de data inserido na variável $data.
    $data = date("d/F/Y");

    //Ao final, irá mostrar a data de hoje (em formato de dia/mês/ano) em apenas uma variável.
    echo "<br><br>A data de hoje armazenada em apenas uma variável é: ".$data;

    // http://localhost/prw/Lista03/Q4.php
    // http://127.0.0.1/prw/Lista03/Q4.php

?>
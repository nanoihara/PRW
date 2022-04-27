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
    $semanaNum;
    $semanaBR;

    //Comando de manipulação de data (que indica o dia da semana) inserido na variável $semana.
    $semanaNum = date("w");

    //Impressão do valor armazenado em $semanaNum.
    echo "<br><br>O valor armazenado é: ".$semanaNum;
    
    //Comandos condicionais para armazenar tal nome extenso do dia da semana na variável $semanaBR de acordo pelo número da semana.
    if ($semanaNum == 0)
        $semanaBR = "Domingo";

    else if ($semanaNum == 1)
        $semanaBR = "Segunda-feira";

    else if ($semanaNum == 2)
        $semanaBR = "Terça-feira";

    else if ($semanaNum == 3)
        $semanaBR = "Quarta-feira";

    else if ($semanaNum == 4)
        $semanaBR = "Quinta-feira";

    else if ($semanaNum == 5)
        $semanaBR = "Sexta-feira";

    else
        $semanaBR = "Sábado";

    //Ao final, irá mostrar o dia da semana de hoje.
    echo "<br><br>Portanto, o dia da semana hoje é: ".$semanaBR;

    // http://localhost/prw/Lista03/Q5.php
    // http://127.0.0.1/prw/Lista03/Q5.php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício 1 - Aula 5</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 1. Faça um script PHP que a partir de três números $n1, $n2 e $n3 mostre eles na ordem decrescente.

    //Impressão do nome.
	echo "Exercício 1 - Apresentação de três números em ordem decrescente,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $n1 = 6;
    $n2 = 5;
    $n3 = 6;

    //Impressão das variáveis $n1, $n2 e $n3.
	echo "<br><br>(1º) Primeiro número: ".$n1.";";
	echo "<br>(2º) Segundo número: ".$n2.";";
	echo "<br>(3º) Terceiro número: ".$n3.".";

    //n1 > n2, n2 > n3
1, 2, 2
    //Comando condicional para verificar qual número é maior que o outro.
    if ($n1 < $n2)
        if ($n2 < $n3)
            echo "A ordem decrescente dos três números é: ".$n3.", ".$n2." e ".$n1;
        else
            if ($n1 < $n3)
                echo "A ordem decrescente dos três números é: ".$n2.", ".$n3." e ".$n1;
            else
                if ($n1 == $n3)
                    echo "O primeiro número e o terceiro número possuem valores iguais. Porém, a ordem decrescente dos três números é: ".$n2.", ".$n3." e ".$n1;
                else
                    if ($n2 == $n3) 
                        echo "O segundo número e o terceiro número possuem valores iguais. Porém, a ordem decrescente dos três números é: ".$n2.", ".$n3." e ".$n1;
                    else
                        echo "A ordem decrescente dos três números é: ".$n2.", ".$n1." e ".$n3;
    else
        if ($n3 > $n2)
            echo "A ordem decrescente dos três números é: ".$n1.", ".$n2." e ".$n1;
        else
            if ($n1 > $n3)
                echo "A ordem decrescente dos três números é: ".$n1.", ".$n2." e ".$n3;
            else
                if ($n1 == $n3)
                    echo "A ordem decrescente";
?>
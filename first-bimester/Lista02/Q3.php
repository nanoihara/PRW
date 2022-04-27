<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 3 - Lista 2</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* 3. Um número é, por definição, primo se ele não tem divisores,
    exceto 1 e ele próprio. Preparar um script PHP para verificar
    números entre 0 e 200 e determinar se cada um dele é primo ou
    não. */

    //Impressão do nome.
	echo "Questão 3 - Verificar se um número entre 0 e 200 é primo ou não,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $num = 0;
    $verificar;
    $i = 1;
    $numdiv;
    $cont = 0;
    
    //Impressão do número armazenado em $num.
    echo "<br><br>Número digitado: ".$num;

    //Comando condicional para verificar se o número não está entre 0 e 200.
    if ($num < 0 || $num > 200)
        echo "<br><br> O número digitado (".$num.") não está entre 0 e 200.";
    else
        //Comando de repetição para observar se o número é primo ou não.
        for ($i; $i <= $num; $i++)
            
            //resto da divisão entre $num e $i
            $numdiv = $num % $i;

            //Comando condicional verificando se o valor $numdiv é igual a zero.
            if ($numdiv == 0)
                $cont = $cont + 1;
            else

        //Comando condicional para imprimir a resposta, falando se o número é primo ou não.
        if ($cont == 2)
            echo "<br><br>O número digitado (".$num.") é um número primo, já que ele é divisível APENAS por 1 e ele mesmo.";
        else
            echo "<br><br>O número digitado(".$num.") não é um número primo, já que ele é divisível por outros números além de 1 e ele mesmo.";
    
    // http://localhost/prw/Lista02/Q3.php
    // http://127.0.0.1/prw/Lista02/Q3.php

?>
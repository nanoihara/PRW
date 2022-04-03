<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 3 - Lista 3</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 3. Crie um script em PHP a em que a partir do seu CEP. Capture apenas os 3 últimos números e exiba-o.

    //Impressão do nome.
	echo "Questão 3 - Script que exibe os três últimos números do CEP e exibe-o,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $cep = "80610-905";
    $cepVet;
    $cep3;
    
    //Impressão do CEP armazenado dentro da variável $cep
    echo "<br><br>O CEP digitado é: ".$cep;

    //Comando de manipulação de string para separar o CEP em dois arrays (os números antes do - e os depois) (explode).
    //Após, armazenará os dígitos depois do - em $cep3.
    $cepVet = explode("-", $cep);
    $cep3 = $cepVet[1];

    //Ao final, irá mostrar os três últimos dígitos do CEP escolhido.
    echo "<br><br>Os últimos três dígitos do CEP é: ".$cep3;

    // http://localhost/prw/Lista03/Q3.php
    // http://127.0.0.1/prw/Lista03/Q3.php

?>
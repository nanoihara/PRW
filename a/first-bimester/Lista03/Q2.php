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
	echo "Questão 2 - Script que substitui todas as vogais de uma palavra em X,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $palavra = trim("ManTEigA "); //Comando de manipulação de string para retirar os espaços iniciais e finais (trim).
    $palavraVet;
    $i = 0;
    $quant = strlen($palavra); //Comando de manipulação de string para contar a quantidade de caracteres dentro da variável.
    
    //Impressão da palavra armazenada dentro da variável $palavra
    echo "<br><br>A palavra digitada é: ".$palavra;

    //Comandos de manipulação de string para deixar todos os caracteres minúsculos (strtolower) e armazenar cada letra em um vetor (str_split).
    $palavra = strtolower($palavra);
    $palavraVet = str_split($palavra);

    //Comando de repetição para reproduzir os comandos condicionais, que verificarão se o array é uma vogal.
    for ($i; $i < $quant; $i++)

        if ($palavraVet[$i] == "a") // A
            $palavra = str_replace("a", "X", $palavra);

        else if ($palavraVet[$i] == "e") // E
            $palavra = str_replace("e", "X", $palavra);

            else if ($palavraVet[$i] == "i") // I
                $palavra = str_replace("i", "X", $palavra);

                else if ($palavraVet[$i] == "o") // O
                    $palavra = str_replace("o", "X", $palavra);

                    else if ($palavraVet[$i] == "u") // U
                        $palavra = str_replace("u", "X", $palavra);

    //Ao final, irá mostrar a palavra digitada anteriormente, porém, substituído todas as suas vogais por X.
    echo "<br><br>A palavra escrita, substituindo todas as suas vogais por X, será: ".$palavra;

    // http://localhost/prw/Lista03/Q2.php
    // http://127.0.0.1/prw/Lista03/Q2.php

?>
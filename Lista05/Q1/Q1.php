<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 1 - Lista 5</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* 1. (Formulário e Vetor) Fazer um formulário em HTML que permita ao usuário digitar o
    nome de um produto de informática. Um programa em PHP deverá receber o nome
    desse produto e fazer uma busca por esse produto dentro de uma relação de produtos
    de informática em um vetor e localizar a posição (índice) desse produto dentro do vetor.
    O índice corresponde ao código do produto que deve ser impresso para o usuário */

    //Impressão do nome.
    echo "Questão 1 - Formulário que busca o nome de um produto de informática,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $produto_search = $_POST["produto"];
    $i;

    //Vetor com alguns nomes de produtos de informática.
    $infoProd = array("computador", "notebook", "processador", "mouse", "cabo usb");


    //Após, é pego o valor de $produto_search e colocado a string inteira para minúscula (strtolower).
    $produto_search = strtolower($produto_search);

    //Depois, verificará, a partir do comando array_search, se a string $produto_search está dentro do vetor $infoProd e, caso existir, armazenará o número da posição em que a string está no vetor.
    $i = array_search($produto_search, $infoProd);

    //Comando condicional para verificar se o índice possui algum valor armazenado.
    //Caso for verdadeiro a sentença, falará ao usuário que o produto não existe dentro do vetor.
    //Caso não ocorrer a condição abaixo, mostrará que o nome digitado do produto existe no índice indicado.
    if ($i === false)
        echo "<br><br>O produto não existe armazenado no sistema.";
    else
        echo "<br<br>O produto está disponível e armazenado no sistema.<br>Ele se encontra com o código: <b>".$i."</b>.";
    
    // http://localhost/prw/Lista05/Q1/Q1.html
    // http://127.0.0.1/prw/Lista05/Q1/Q1.html

?>
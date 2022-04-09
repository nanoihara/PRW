<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 1 - Lista 4</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    // 1. Criar um formulário que contenha os itens apresentados abaixo. Em seguida faça um script php que efetue os cálculos e apresente o resultado.

    //Impressão do nome.
    echo "Questão 7 - Script que exibe o link invertido em uma variável e transforme em um link funcional,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    // $NUM1
    $num1 = $_GET["num1"];
    $num1 = intval($num1);

    // $NUM2
    $num2 = $_GET["num2"];
    $num2 = intval($num2);

    //Variável para a opção escolhida no ratio button ($matematica).
    $matematica = $_GET["matematica"];

    //Comando condicional para verificar qual foi a opção escolhida no ration button da página Q1.html.
    //Caso tiver o valor "somar", ele chamará a função soma e imprimirá este valor.
    //Se estiver armazenado como "subtrair", irá chamar a função subtrair e imprimirá o valor.
    //Fará o mesmo procedimento com os demais valores de $matematica ("dividir" & "multiplicar").
    
    if ($matematica == "somar") //SOMA
        echo "<h1> Soma de dois números </h1><br>A soma de ".$num1." com ".$num2." resulta em: ".soma($num1, $num2);

    else if ($matematica == "subtrair") //SUBTRAÇÃO
        echo "<h1> Subtração de dois números </h1><br>A subtração de ".$num1." com ".$num2." resulta em: ".subtrair($num1, $num2);

    else if ($matematica == "dividir") //DIVISÃO
        echo "<h1> Divisão de dois números </h1><br>A divisão de ".$num1." por ".$num2." resulta em: ".dividir($num1, $num2);

    else if ($matematica == "multiplicar") //MULTIPLICAÇÃO
        echo "<h1> Multiplicação de dois números </h1><br>A multiplicação de ".$num1." com ".$num2." resulta em: ".multiplicar($num1, $num2);
    
    else
        echo "<br><b>Aviso =</b> <i>Não foi selecionado nenhuma das opções de operação para fazer com os dois números. Volte na página anterior e escolha entre uma das operações.</i>";

    //Funções de acordo com a operação que deve ser feita com os dois números.
    function soma($a, $b) { //SOMA

        $calc = $a + $b;

        return $calc;
    }

    function subtrair($a, $b) { //SUBTRAÇÃO

        $calc = $a - $b;

        return $calc;
    }

    function dividir($a, $b) { //DIVISÃO

        $calc = $a / $b;

        return $calc;
    }

    function multiplicar($a, $b) { //MULTIPLICAÇÃO

        $calc = $a * $b;

        return $calc;
    }
    // http://localhost/prw/Lista04/Q1/Q1.html
    // http://127.0.0.1/prw/Lista04/Q1/Q1.html

?>
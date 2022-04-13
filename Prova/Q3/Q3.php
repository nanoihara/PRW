<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 3 - Prova</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /*3. (3,5 Pontos) (Formulário e Estrutura Condicional) Criar um formulário para pedir o peso e altura de uma
    pessoa, efetuar o cálculo do IMC (Índice de Massa Corporal) e depois mostrar o resultado do cálculo e a
    mensagem de acordo com a tabela abaixo:
    É simples calcular o seu IMC, Por exemplo, se o seu peso é 80kg e a sua altura é 1,80m, a fórmula
    para calcular o IMC ficará:
    IMC = peso ÷ altura^2
    IMC = 80 ÷ 1,80^2
    IMC = 80 ÷ 3,24
    IMC = 24,69 */

    //Impressão do nome.
    echo "Questão 3 - Formulário que mostra o cálculo do IMC,<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Declaração das variáveis.
    $imc;

    // $PESO
    $peso = $_POST["peso"];
    $peso = doubleval($peso);

    // $ALTURA
    $altura = $_POST["altura"];
    $altura = doubleval($altura);

    //Mostrará o valor depositado em $peso e $altura.
    echo "<br><br>O valor do peso é: ".$peso." kg.";
    echo "<br>O valor da altura é: ".$altura." m.";

    //Cálculo do IMC.
    $imc = $peso / $altura^2;

    //Ao final, mostrará o valor do IMC ao usuário.
    echo "<br><br>O valor do IMC resultou em: ".$imc;

    //E fará um comando condicional para verificar qual a categoria que o IMC está dentro.
    //E em seguida, mostrará a situação de acordo com o seu valor do IMC.
    if ($imc < 17) //MUITO ABAIXO DO PESO.
        echo "<br>E a sua situação categoriza-se como 'Muito abaixo do peso'";
    
    else if ($imc < 18.5) //ABAIXO DO PESO.
        echo "<br>E a sua situação categoriza-se como 'Abaixo do peso'";
    
    else if ($imc < 25) //PESO NORMAL.
        echo "<br>E a sua situação categoriza-se como 'Peso normal'";
    
    else if ($imc < 35) //OBESIDADE 1.
        echo "<br>E a sua situação categoriza-se como 'Obesidade 1'";
    
    else if ($imc < 40) //OBESIDADE 2 (severa).
        echo "<br>E a sua situação categoriza-se como 'Obesidade 2 (severa)'";

    else
        echo "<br>E a sua situação categoriza-se como 'Obesidade 3 (mórbida)'";
 
    // http://localhost/prw/Prova/Q3/Q3.html
    // http://127.0.0.1/prw/Prova/Q3/Q3.html

?>
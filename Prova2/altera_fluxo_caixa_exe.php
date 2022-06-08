<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.7. Altera_fluxo_caixa_exe.php - Script php que efetuará alteração
    dos dados no banco de dados através do comando UPDATE. */

    include("conexao.php");
    
    //Declaração das variáveis.
    $data = $_POST["data"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $historico = $_POST["historico"];
    $cheque = $_POST["cheque"];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Histórico do fluxo: ".$historico."</p>";
    $sql = "UPDATE fluxo_caixa SET
                data='".$data."',
                tipo='".$tipo."',
                valor='".$valor."',
                historico='".$hsitorico."',
                cheque='".$cheque."'
                WHERE id=".$id;

    $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados alterados com sucesso <br>";
        else
            echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova 2º bimestre - Alteração de dados no fluxo de caixa</title>
</head>
<body>

    <br><br>
    
    Voltar para a:
    <ul>
        <li><a href="listar_fluxo_caixa.php">Listagem do fluxo de caixa</a></li>
        <li><a href="index.php">Página inicial</a></li>
    </ul>

    <br><br>
    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <!-- Para acessar ao site completo: -->
    <!-- http://localhost/prw/Prova2/index.php -->
    <!-- http://127.0.0.1/prw/Prova2/index.php -->
    
    <!-- Para teste: -->
    <!-- http://localhost/prw/Prova2/altera_fluxo_caixa_exe.php -->
    <!-- http://127.0.0.1/prw/Prova2/altera_fluxo_caixa_exe.php -->
    
</body>
</html>
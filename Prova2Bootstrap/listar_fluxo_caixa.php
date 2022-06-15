<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.5. Listar_fluxo_caixa.php - Script php para listar 
    informações cadastradas no banco de dados através do 
    comando SELECT. */

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
    include("conexao.php");

    //Declaração das variáveis.
    $sql = "SELECT * FROM fluxo_caixa"; //fluxo_caixa é o nome da tabela.
    $result = mysqli_query($con, $sql); //A variável $result retorna todos os dados da consulta.
    
    //Para acessar o site por completo:
    // http://localhost/prw/Prova2/index.php
    // http://127.0.0.1/prw/Prova2/index.php

    //Para teste:
    // http://localhost/prw/Prova2/listar_fluxo_caixa.php
    // http://127.0.0.1/prw/Prova2/listar_fluxo_caixa.php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prova 2º bimestre - Consulta de fluxo de caixa</title>
</head>
<body>
    <h1>Prova 2º bimestre - Consulta de fluxo de caixa</h1>
    <table align="center" border="8" width=800>
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) //A variável $row retorna a primeira linha
            //print_r(row);
            {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["data"]."</a></td>";
                echo "<td>".$row["tipo"]."</td>";
                echo "<td>".$row["valor"]."</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id=".$row["id"]."'>".$row["historico"]."</td>";
                echo "<td>".$row["cheque"]."</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row["id"]."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>

        <tr>
            <th colspan="7"><a href="index.php">Voltar para a página inicial</a></th>
        </tr>
    </table>

    <br>

    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>
</body>
</html>
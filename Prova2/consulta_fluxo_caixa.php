<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.9. Consulta_fluxo_caixa.php - Script php que irá efetuar a consulta no Fluxo de Caixa conforme a opção
que o usuário escolheu e apresentar valor no browser, utilizar o comando
SELECT, segue na prova trecho dos códigos com as instruções SQL
responsáveis pela consulta. */

    //Impressão do nome.
    echo "Consulta do fluxo da caixa - Consulta no Fluxo de Caixa conforme a opção que o usuário escolheu, mostrando através do comando INSERT";

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
    include("conexao.php");

    //Declaração da variável.
    $tipo = $_POST["consulta"];
    $nome;

    //Código da prova.
    if ($tipo == 'entrada') {
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
        $nome = "Total Entradas";

    } else if ($tipo == 'saida') {
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
        $nome = "Total Saídas";

    } else if ($tipo == 'saldo') {
        $sql = "select  sum(case when tipo = 'entrada' then valor else 0 end) -
                        sum(case when tipo = 'saida' then valor else 0 end) as valor
                        from fluxo_caixa";
        $nome = "Saldo Total";
    }

    $result = mysqli_query($con, $sql);

    if ($result)
        echo "<br><br>Dados inseridos com sucesso";
    else
        echo "<br><br>Erro ao inserir no banco de dados: ".mysqli_error($con);
    
    // http://localhost/prw/Prova2/index.html
    // http://127.0.0.1/prw/Prova2/index.html

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prova 2º bimestre - Consulta php</title>
</head>
<body>
    <h1>Prova 2º bimestre - Consulta de fluxo de caixa</h1>
    <table align="center" border="8" width=800>
        <tr>
            <th>Valor</th>
            <th>Tipo da consulta</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) //A variável $row retorna a primeira linha
            //print_r(row);
            {
                echo "<tr>";
                echo "<td>".$row["valor"]."</a></td>";
                echo "<td>".$nome."</td>";
                echo "</tr>";
            }
        ?>

        <tr>
            <th colspan="2"><a href="index.php">Voltar para a página inicial</a></th>
        </tr>
    </table>

    <br>

    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>
</body>
</html>
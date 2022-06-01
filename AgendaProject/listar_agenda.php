<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.5. Listar_agenda.php - Script php para listar 
    informações cadastradas no banco de dados através do 
    comando SELECT. */

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
    include("conexao.php");

    //Declaração das variáveis.
    $sql = "SELECT * FROM agenda"; //Agenda é o nome da tabela.
    $result = mysqli_query($con, $sql); //A variável $result retorna todos os dados da consulta.
    
    //Para acessar o site por completo:
    // http://localhost/prw/AgendaProject/index.php
    // http://127.0.0.1/prw/AgendaProject/index.php

    //Para teste:
    // http://localhost/prw/AgendaProject/listar_agenda.php
    // http://127.0.0.1/prw/AgendaProject/listar_agenda.php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda Project - Listagem dos contatos na agenda</title>
</head>
<body>
    <h1>Agenda Project - Listagem dos contatos na agenda</h1>
    <table align="center" border="8" width=500>
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Data de cadastro</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) //A variável $row retorna a primeira linha
            //print_r(row);
            {
                echo "<tr>";
                echo "<td>".$row["id_agenda"]."</td>";
                echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>";
                echo "<td><a href='altera_agenda.php?id_agenda=".$row["id_agenda"]."'>".$row["nome"]."</a></td>";
                echo "<td>".$row["apelido"]."</td>";
                echo "<td>".$row["endereco"]."</td>";
                echo "<td>".$row["bairro"]."</td>";
                echo "<td>".$row["cidade"]."</td>";
                echo "<td>".$row["estado"]."</td>";
                echo "<td>".$row["telefone"]."</td>";
                echo "<td>".$row["celular"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["dt_cadastro"]."</td>";
                echo "<td><a href='excluir_agenda.php?id_agenda=".$row["id_agenda"]."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br>

    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <br><br>

    <a href="index.php">Voltar para a página inicial</a>

</body>
</html>
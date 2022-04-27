<?php
    // LANA AKEMI IHARA - 3º INFO
    /* Ex: Criar um script php chamado "listar_usuarios" no qual mostra os usuários cadastrados no banco de dados do projeto01. */

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
    include("conexao.php");

    //Declaração das variáveis.
    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($con, $sql); //A variável $result retorna todos os dados da consulta.

    // http://localhost/prw/projeto01/listar_usuarios.php
    // http://127.0.0.1/prw/projeto01/cadastro_usuario.htm

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de usuários</title>
</head>
<body>
    <h1>Listagem de usuários</h1>
    <table align="center" border="8" width=500>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_array($result)) //A variável $row retorna a primeira linha
            //print_r(row);
            {
                echo "<tr>";
                echo "<td>".$row["id_usuario"]."</td>";
                echo "<td>".$row["nome_usuario"]."</td>";
                echo "<td>".$row["email_usuario"]."</td>";
                echo "<td>".$row["telefone_usuario"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
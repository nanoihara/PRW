<?php 
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.8. Excluir_agenda.php - Script php que efetua a exclusão
    das informações no banco de dados através do comando DELETE. */
    
    include('conexao.php');

    $id_agenda = $_GET["id_agenda"];

    $sql = "DELETE FROM agenda WHERE id_agenda=".$id_agenda;

    echo "<h1>Exclusão de um contato na agenda</h1>";
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Registro excluído com sucesso <br>";
    else
        echo "Erro ao tentar excluir o contato: ".mysqli_error($con)."<br>";
?>

<br> <br>

Voltar para a:
<ul>
    <li><a href="listar_agenda.php">Lista da Agenda</a></li>
    <li><a href="index.php">Página inicial</a></li>
</ul>

<!-- Para acessar o site completo: -->
<!-- http://localhost/prw/AgendaProject/index.php -->
<!-- http://127.0.0.1/prw/AgendaProject/index.php -->

<!-- Para testar: -->
<!-- http://localhost/prw/AgendaProject/excluir_agenda.php -->
<!-- http://127.0.0.1/prw/AgendaProject/excluir_agenda.php -->
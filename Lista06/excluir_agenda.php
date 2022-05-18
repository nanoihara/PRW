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

<a href="listar_agenda.php">Voltar</a>

<!-- Para acessar o site completo: -->
<!-- http://localhost/prw/Lista06/index.php -->
<!-- http://127.0.0.1/prw/Lista06/index.php -->

<!-- Para testar: -->
<!-- http://localhost/prw/Lista06/excluir_agenda.php -->
<!-- http://127.0.0.1/prw/Lista06/excluir_agenda.php -->
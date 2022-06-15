<?php 
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.10. Excluir_fluxo_caixa.php - Script php que efetua a exclusão
    das informações no banco de dados através do comando DELETE. */
    
    include('conexao.php');

    $id = $_GET["id"];

    $sql = "DELETE FROM fluxo_caixa WHERE id=".$id;

    echo "<h1>Exclusão de uma das informações no banco de dados</h1>";
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Registro excluído com sucesso <br>";
    else
        echo "Erro ao tentar excluir o contato: ".mysqli_error($con)."<br>";
?>

<br> <br>

Voltar para a:
<ul>
    <li><a href="listar_fluxo_caixa.php">Listagem do fluxo de caixa</a></li>
    <li><a href="index.php">Página inicial</a></li>
</ul>

<!-- Para acessar o site completo: -->
<!-- http://localhost/prw/Prova2/index.php -->
<!-- http://127.0.0.1/prw/Prova2/index.php -->

<!-- Para testar: -->
<!-- http://localhost/prw/Prova2/excluir_fluxo_caixa.php -->
<!-- http://127.0.0.1/prw/Prova2/excluir_fluxo_caixa.php -->
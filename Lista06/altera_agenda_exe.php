<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.7. Altera_agenda_exe.php - Script php que efetuará alteração
    dos dados no banco de dados através do comando UPDATE. */

    include("conexao.php");
    $id_agenda = $_POST["id_agenda"];
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome na agenda: ".$nome."</p>";

    $sql = "UPDATE agenda SET
                nome='".$nome."',
                apelido='".$apelido."',
                endereco='".$endereco."',
                bairro='".$bairro."',
                cidade='".$cidade."',
                estado='".$estado."',
                telefone='".$telefone."',
                celular='".$celular."',
                email='".$email."'
                WHERE id_agenda=".$id_agenda;
    
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
    <title>Lista 06 - Alteração de dados em agenda</title>
</head>
<body>
    <br>
    <a href="index.php">Voltar</a>

    <br><br>
    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <!-- Para acessar ao site completo: -->
    <!-- http://localhost/prw/Lista06/index.php -->
    <!-- http://127.0.0.1/prw/Lista06/index.php -->
    
    <!-- Para teste: -->
    <!-- http://localhost/prw/Lista06/altera_agenda_exe.php -->
    <!-- http://127.0.0.1/prw/Lista06/altera_agenda_exe.php -->
    
</body>
</html>
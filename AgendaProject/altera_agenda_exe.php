<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.7. Altera_agenda_exe.php - Script php que efetuará alteração
    dos dados no banco de dados através do comando UPDATE. */

    include("conexao.php");

    // Upload da foto     
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){      
        // Upload file
        if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
      }
    }
    
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

    if(isset($fotoNome)){
        $sql = "UPDATE agenda SET
                nome='".$nome."',
                apelido='".$apelido."',
                endereco='".$endereco."',
                bairro='".$bairro."',
                cidade='".$cidade."',
                estado='".$estado."',
                telefone='".$telefone."',
                celular='".$celular."',
                email='".$email."',
                foto_blob='".$fotoBlob."',
                foto_nome='".$fotoNome."'
                WHERE id_agenda=".$id_agenda;
    }

    else {
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
    }
    
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
    <title>Agenda Project - Alteração de dados em agenda</title>
</head>
<body>

    <br><br>
    
    Voltar para a:
    <ul>
        <li><a href="listar_agenda.php">Lista da Agenda</a></li>
        <li><a href="index.php">Página inicial</a></li>
    </ul>

    <br><br>
    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <!-- Para acessar ao site completo: -->
    <!-- http://localhost/prw/AgendaProject/index.php -->
    <!-- http://127.0.0.1/prw/AgendaProject/index.php -->
    
    <!-- Para teste: -->
    <!-- http://localhost/prw/AgendaProject/altera_agenda_exe.php -->
    <!-- http://127.0.0.1/prw/AgendaProject/altera_agenda_exe.php -->
    
</body>
</html>
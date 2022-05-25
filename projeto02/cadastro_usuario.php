<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo de Aula</title>
</head>
<body>
<?php
    // LANA AKEMI IHARA - 3º INFO
    /* Ex: Criar um script php chamado “cadastro_usuario.php” que receberá as
    informações do formulário. */

    //Impressão do nome.
    echo "Exemplo de Aula - Formulário associado a um banco de dados (cadastro de um usuário),<br>feito por Lana Akemi Ihara, 3º INFO.";

    //Inclusão do arquivo .php que fará a conexão entre o banco de dados e o site.
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

    //Declaração das variáveis.
    $nome_usuario = $_POST["nome_usuario"];
    $email_usuario = $_POST["email_usuario"];
    $fone_usuario = $_POST["fone_usuario"];

    //Impressão dos dados recebidos do formulário.
    echo "<p><b>Nome do usuario:</b> ".$nome_usuario."<br>";
    echo "<b>E-mail:</b> ".$email_usuario."<br>";
    echo "<b>Telefone:</b> ".$fone_usuario."</p>";

    //Ao final, cria-se uma variável para inserir os valores no banco de dados.
    $sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario, foto_blob, foto_nome) 
	    VALUES ('".$nome_usuario."','".$email_usuario."','".$fone_usuario."','".$fotoBlob."','".$fotoNome."')";
    
    $result = mysqli_query($con, $sql);

    if ($result)
        echo "Dados inseridos com sucesso";
    else
        echo "Erro ao inserir no banco de dados: ".mysqli_error($con);

    // http://localhost/prw/projeto01/cadastro_usuario.htm
    // http://127.0.0.1/prw/projeto01/cadastro_usuario.htm

?>
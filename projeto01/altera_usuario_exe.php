<?php
    include("conexao.php");
    $id_usuario = $_POST["id_usuario"];
    $nome = $_POST["nome_usuario"];
    $email = $_POST["email_usuario"];
    $telefone = $_POST["fone_usuario"];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: ".$nome."</p>";

    $sql = "UPDATE usuario SET
                nome_usuario='".$nome."',
                email_usuario='".$email."',
                telefone_usuario='".$telefone."'
                WHERE id_usuario=".$id_usuario;
    
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
    <title>Exemplo de Aula</title>
</head>
<body>
    <!-- LANA AKEMI IHARA - 3º INFO -->
    <!-- Ex: Criar um formulário chamado “cadastro_usuario.htm”, este formulário
    html deverá conter os seguintes campos e botão enviar:
    • Nome_usuario: tamanho 50;
    • Email_usuario: tamanho 50;
    • Fone_usuario: tamanho 30. -->
    
    <br>
    <a href="index.php">Voltar</a>

    <br>
    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <!-- http://localhost/prw/projeto01/altera_usuario_exe.php -->
    <!-- http://127.0.0.1/prw/projeto01/index.php -->
    
</body>
</html>
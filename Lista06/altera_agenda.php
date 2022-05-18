<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.6. Altera_agenda.php - Script php que montará o formulário
    html já preenchido com as informações do banco de dados para 
    alteração. */
    
    include("conexao.php");
    $id_agenda = $_GET["id_agenda"];
    $sql = "SELECT * FROM agenda where id_agenda = ".$id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 06 - Alteração na agenda</title>
</head>
<body>    
    <!-- título -->
    <h3>Alteração na Agenda</h3>

    <!-- "action" -> para que página o botão "submit" deve lhe enviar após este processo -->
    <!-- "method" controla como as informações devem ser enviadas ao servidor -->
    <form action="altera_agenda_exe.php" method="POST">

        <!-- NOME -->
        <div> <!-- Tipo TEXT -->
            <label for="nome">Nome:</label> 
            <input type="text" name="nome" size="50">
        </div>

        <br>

        <!-- APELIDO -->
        <div> <!-- Tipo TEXT -->
            <label for="apelido">Apelido:</label>
            <input type="text" name="apelido" size="40">
        </div>

        <br>

        <!-- ENDEREÇO -->
        <div> <!-- Tipo TEXT -->
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" size="70">
        </div>

        <br>

        <!-- BAIRRO -->
        <div> <!-- Tipo TEXT -->
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" size="50">
        </div>

        <br>

        <!-- CIDADE -->
        <div> <!-- Tipo TEXT -->
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" size="50">
        </div>

        <br>

        <!-- ESTADO -->
        <div> <!-- Tipo TEXT -->
            <label for="estado">Estado (apenas sigla):</label>
            <input type="text" name="estado" size="02">
        </div>

        <br>

        <!-- TELEFONE -->
        <div> <!-- Tipo TEXT -->
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" size="15">
        </div>

        <br>

        <!-- CELULAR -->
        <div> <!-- Tipo TEXT -->
            <label for="celular">Celular:</label>
            <input type="text" name="celular" size="15">
        </div>

        <br>

        <!-- E-MAIL -->
        <div> <!-- Tipo EMAIL -->
            <label for="email">E-mail:</label>
            <input type="email" name="email" size="70">
        </div>

        <br>
        
        <!-- Botão de envio dos dados -->
        <button type="submit">Enviar</button>

        <input name="id_agenda" type="hidden" value="<?php echo $row["id_agenda"]?>">
    </form>

    <br><br>

    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <!-- http://localhost/prw/projeto01/index.php -->
    <!-- http://127.0.0.1/prw/projeto01/index.php -->
    
</body>
</html>
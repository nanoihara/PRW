<?php
    // Lana Akemi Ihara
    // BI3005771 - 3º INFO

    /* 2.6. Altera_fluxo_caixa.php - Script php que montará o formulário
    html já preenchido com as informações do banco de dados para 
    alteração. */
    
    include("conexao.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM fluxo_caixa where id = ".$id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova 2º bimestre - Alteração no fluxo de caixa</title>
</head>
<body>    
    <!-- título -->
    <h3>Alteração no fluxo de caixa</h3>
      
    <div>

    <!-- "action" -> para que página o botão "submit" deve lhe enviar após este processo -->
    <!-- "method" controla como as informações devem ser enviadas ao servidor -->
    <form action="cadastro_fluxo_caixa.php" method="POST">

        <!-- DATA -->
        <div> <!-- date -->
            <label for="data">Data:</label> 
            <input type="date" name="data" size="50" required>
        </div>

        <br>

        <!-- TIPO -->
        <div> <!-- radio -->
            Tipo:
            <!-- ENTRADA -->
            <input type="radio" name="tipo" value="entrada" required>
            <label for="entrada">entrada</label>
            
            <!-- SAÍDA -->
            <input type="radio" name="tipo" value="saida" required>
            <label for="saida">saída</label>
        </div>

        <br>

        <!-- VALOR -->
        <div> <!-- text -->
            <label for="valor">Valor:</label>
            <input type="text" name="valor" size="10,2" required>
        </div>

        <br>

        <!-- HISTORICO -->
        <div> <!-- text -->
            <label for="historico">Historico:</label>
            <input type="text" name="historico" size="150" required>
        </div>

        <br>

        <!-- CHEQUE -->
        <div> <!-- menu suspenso -->
             Cheque:

            <select name = "cheque" value = 0 size = 1>
                <option>Sim</option>
                <option>Não</option>
            </select>
        </div>

        <br>
        
        <!-- Botão de envio dos dados -->
        <button type="submit">Enviar</button>

        <input name="id" type="hidden" value="<?php echo $row["id"]?>">
    </form>

    <br><br>

    <p>Feito por Lana Akemi Ihara, 3º INFO.</p>

    <br><br>

    Voltar para a:
    <ul>
        <li><a href="listar_fluxo_caixa.php">Listagem de fluxo de caixa</a></li>
        <li><a href="index.php">Página inicial</a></li>
    </ul>

    <!-- http://localhost/prw/Prova2/index.php -->
    <!-- http://127.0.0.1/prw/Prova2/index.php -->
    
</body>
</html>
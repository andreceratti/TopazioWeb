<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            session_start();
            include "../include/conexao.php";
            include '../include/pedido.php';
        ?>
        <title>Cadastro de Pedido</title>
        
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <center><div class="center"> 
        <form method="POST" enctype="multipart/form-data">
            <p><label>Pedido:</label><input type="file" name="arquivo"/></p>
            <p><label>Forma de Pagamento: </label>
                <select name="pagamento">
                    <option>PagueSeguro</option>
                    <option>Dinheiro</option>
                </select>
            </p>
            <p><input type="submit" value="Enviar"/> </p>
        </form>
        </div></center> 
        <a href="../index.php">Voltar</a>
        <?php 
            global $db;
            $db->close();
        ?>
    </body>
</html>
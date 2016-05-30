<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            session_start();
            include "../include/conexao.php";
            include '../include/pedido.php';
        ?>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
        <title>Pesquisa de Pedidos</title>
    </head>
    <body>
        <center><div class="center">
                
        <form>
            <?php
                mostrarPedidos();
            ?>
        </form>
                
        </div></center>
    
        <?php 
            global $db;
            $db->close();
        ?>
    </body>
</html>
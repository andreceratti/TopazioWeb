<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <?php
            session_start();
            include "../include/conexao.php";
            include '../include/pedido.php';
        ?>
        <title>Pesquisa de Pedidos</title>
    </head>
    <body>
        <form>
            <?php
                mostrarPedidos();
            ?>
        </form>
        <?php 
            global $db;
            $db->close();
        ?>
    </body>
</html>
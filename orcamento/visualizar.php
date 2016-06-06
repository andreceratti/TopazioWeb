<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
        <title>Topazio Farma</title>
        <meta charset="utf-8">
        <?php
            include "../include/conexao.php";
            include '../include/pedido.php';
            include '../include/orcamento.php';
            
        ?>
    </head>
    <body>
        <center><!-- inicio da centralização -->
            <div class="center"> 
                <?php pedidos();?>
            </div>
        </center> <!-- fim da centralização -->
    </body>
</html>

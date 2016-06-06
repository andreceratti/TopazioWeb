<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            include "../include/conexao.php";
            include '../include/pedido.php';
            include '../include/orcamento.php';
            global $orcamento;
            getPedidoByID();
            $orcamento = selectOrcamentoByPedido($pedido->id);

        ?>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/pedido.css" rel="stylesheet" type="text/css"/>
        
        <title>Pesquisa de Pedidos</title>
    </head>
    <body>
        <center><!-- inicio da centralização -->
            <div class="center"> 
                <h2>Pedido</h2>
                    <table>
                    <tr>
                        <td><p>Codigo do Pedido:</p></td>
                        <td><?=$pedido->id;?></td>
                    </tr>
                    <tr>
                        <td><p>Data de Abertura:</p></td>
                        <td><?=$pedido->dataAbertura?></td>
                    </tr>
                    <tr>
                        <td><p>Status:</p></td>
                        <td><?=$pedido->status?></td>
                    </tr>
                    <tr>
                        <td><p>Forma de Pagamento:</p></td>
                        <td>
                            <?php
                                if ($pedido->pagamento==1) echo "Cartão de Credito";
                                else echo "Dinheiro"
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Receita:</p></td>
                        <td><img class="pedido" src="../pedido/uploads/<?=$pedido->foto;?>"</td>
                    </tr>
                </table>
                <h2>Orçamentos Disponiveis</h2>
                <?php
                    mostrarOrcamentos();
                ?>
            </div>
        </center>
    
        <?php 
            global $db;
            $db->close();
        ?>
    </body>
</html>
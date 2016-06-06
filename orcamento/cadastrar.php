<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/pedido.css" rel="stylesheet" type="text/css"/>
        
        <title>Topazio Farma</title>
        <?php
            include "../include/conexao.php";
            include '../include/pedido.php';
            include '../include/orcamento.php';
            
            getPedidoByID();
            $orcamento = selectOrcamentoByPedido($pedido->id);
        ?>

        
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
                        <td><?=$pedido->pagamento?></td>
                    </tr>
                    <tr>
                        <td><p>Receita:</p></td>
                        <td><img class="pedido" src="../pedido/uploads/<?=$pedido->foto;?>"</td>
                    </tr>
                    <tr>
                        <td><p>Nome do Cliente:</p></td>
                        <td><?=$cliente->nome?></td>
                    </tr>
                    <tr>
                        <td><p>Endereço:</p></td>
                        <td><?=$cliente->logradouro?></td>
                    </tr>
                    <tr>
                        <td><p>Complemento:</p></td>
                        <td><?=$cliente->complemento?></td>
                    </tr>
                    <tr>
                        <td><p>Bairro:</p></td>
                        <td><?=$cliente->bairro?></td>
                    </tr>
                    <tr>
                        <td><p>Cidade:</p></td>
                        <td><?=$cliente->cidade?></td>
                    </tr>
                    <tr>
                        <td><p>Estado:</p></td>
                        <td><?=$cliente->estado?></td>
                    </tr>
                </table>
                <h2>Orçamento</h2>
                <?php if (empty($orcamento->orcamentoID)):?>
                <form method="GET" action="cadastrar2.php">
                    <table>
                        <tr>
                            <td>Preço Formula</td>
                            <td><input type="text" name="precoFormula"/></td>
                        </tr>
                        <tr>
                            <td>Preço Entrega</td>
                            <td><input type="text" name="precoEntrega"/></td>
                        </tr>
                        <tr>
                            <td>Data de Entrega</td>
                            <td><input type="date" name="dataEntrega"/></td>
                        </tr>
                        <tr>
                            <td>Delivery</td>
                            <td>
                                <select name="delivery">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <p><input type="submit" value="Enviar"/></p>
                    <input type="hidden" value="<?=$farmacia->usuarioID?>" name="usuarioFarmacia"/>
                    <input type="hidden" value="<?=$pedido->id?>" name="pedidoID"/>
                    <input type="hidden" value="<?=$farmacia->id?>" name="farmaciaID"/>
                </form>
                <?php else:?>
                <table>
                    <tr>
                        <td><p>Preço Formula</p></td>
                        <td><?=$orcamento->valorFormula?></td>
                    </tr>
                    <tr>
                        <td><p>Preço Entrega</p></td>
                        <td><?=$orcamento->valorEntrega?></td>
                    </tr>
                    <tr>
                        <td><p>Previsão Entrega</p></td>
                        <td><?=$orcamento->dataPrevista?></td>
                    </tr>
                    <tr>
                        <td><p>Delivery</p></td>
                        <td><?=$orcamento->delivery?></td>
                    </tr>
                </table>
                <?php endif;?>
            </div>
        <?php
        global $db;
        $db->close();
        ?>
    </body>
</html>

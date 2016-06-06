<?php
   session_start();
   $farmacia = new stdClass(); 
   $orcamento = new stdClass();

   if (!empty($_SESSION['loginAtivo'])) $id = $_SESSION['usuario.id'];
   $farmacia = selectFarmaciaByID($id);

   function pedidos(){
        echo '<table><tr>';
        echo '<th>Pedido</th>';
        echo '<th>Data de abertura</th>';
        echo '<th>Status</th>';
        echo '<th>Mais</th>';
        echo '</tr>';
        selectPedidosOrcamento();
        echo '</table>';
    }
    if(!empty($_GET['precoFormula'])&&!empty($_GET['precoEntrega'])&&!empty($_GET['dataEntrega'])){
        $SQL = "INSERT INTO orcamento (FARMACIA_USUARIO_id_usuario,"
                . " PEDIDO_id_pedido, FARMACIA_id_farmacia,"
                . " vl_preco_formula, vl_preco_entrega,"
                . " dt_previsao_entrega, ic_delivery_sim_nao)"
                . " VALUES (?,?,?,?,?,?,?);";
        $usuarioFarmacia = $_GET['usuarioFarmacia'];
        $pedidoID = $_GET['pedidoID'];
        $farmaciaID = $_GET['farmaciaID'];
        $precoFormula = $_GET['precoFormula'];
        $precoEntrega = $_GET['precoEntrega'];
        $dataEntrega = $_GET['dataEntrega'];
        $delivery = $_GET['delivery'];
        insertOrcamento($SQL, $precoFormula, $precoEntrega, $dataEntrega,
                $delivery, $usuarioFarmacia, $pedidoID, $farmaciaID);
    }
    
    function mostrarOrcamentos(){
        global $pedido;
        $SQL = "SELECT * FROM ORCAMENTO WHERE PEDIDO_id_pedido = ?;";
        popularTabelaOrcamento($SQL, $pedido->id);
    }
?>
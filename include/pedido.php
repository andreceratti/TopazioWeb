<?php
    $pedido = new stdClass();
    $cliente = new stdClass();

    $datahora = date('dmyHis');
    if(!empty($_FILES['arquivo'])){
        $nomeantigo = $_FILES['arquivo']['name'];
        $tipo = explode("/", $_FILES['arquivo']['type']);
        $tamanho = $_FILES['arquivo']['size'];
        $nomeTemporario = $_FILES['arquivo']['tmp_name'];
        
        if (empty($_SESSION["usuario.id"])){
            $nomearquivo = '99999' . $datahora;
        } else{
            $nomearquivo = $_SESSION['usuario.id'] . $datahora;
        }
    }
    $pasta = 'uploads/';
    
    function mostrarPedidos(){
        echo '<table border="1"><tr>';
        echo '<th>Pedido</th>';
        echo '<th>Data de abertura</th>';
        echo '<th>Status</th>';
        echo '</tr>';
        selectPedidos();
        echo '</table>';
    }

    if (isset($nomearquivo)){
        if (!empty($nomeantigo)){
            if ($tamanho<3145728){
                if($tipo[1]=='jpg'||$tipo[1]=='jpeg'||$tipo[1]=='png'){
                    move_uploaded_file($nomeTemporario, $pasta.$nomearquivo.'.'.$tipo[1]);
                    echo 'Arquivo enviado com sucesso<br>';
                    
                    $SQL = "INSERT INTO PEDIDO"
                            . " (CLIENTE_USUARIO_id_usuario, CLIENTE_id_cliente,"
                            . " dt_abertura_pedido,"
                            . " ic_delivery_sim_nao, im_foto_receita,"
                            . " ds_status_pedidos, ic_forma_pagamento_dinheiro_cartao)"
                            . " VALUES (?,?,NOW(),'0',?,'Aberto',?);";
                    $nomeCompleto = $nomearquivo.".".$tipo[1];
                    insertPedido($SQL, $nomeCompleto);
                } else {
                    echo 'Aviso: Tipo de arquivo incompativel<br>';
                }
            } else {
                echo 'Aviso: Arquivo muito grande.<br> '.$tamanho;
            }
        } else {
            echo '<h3>Por favor selecione uma imagem para enviar</h3>';
        }
    }
    
    function getPedidoByID(){
        global $pedido;
        if (!empty($_GET['id'])) $id = $_GET['id'];
        else die ('ID NÃO ESPECIFICADO DO PEDIDO');
        $pedido = selectPedido($id);
        getCliente($pedido->idUsuario);
    }
    function getCliente($id){
        global $cliente;
        $cliente =  selectCliente($id);
    }
?>
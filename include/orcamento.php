<?php
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
?>
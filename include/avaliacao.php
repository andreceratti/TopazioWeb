<?php

    function popularAvaliacao(){
        $SQL = "SELECT FARMACIA_id_farmacia,"
                . " AVG(vl_avaliacao), ds_nota FROM AVALIACAO"
                . " GROUP BY FARMACIA_id_farmacia, ds_nota"
                . " ORDER BY 2 DESC ;";
        popularAvalicao($SQL);
    }
?>

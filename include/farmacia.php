<?php
    function cadastrarFarmacia(){
        $SQL = "INSERT INTO farmacia"
                . " (USUARIO_id_usuario, nm_farmacia, cd_telefone_comercial_farmacia,"
                . " cd_telefone_celular_farmacia,"
                . " nm_lougradouro, nm_bairro, nm_cidade, nm_estado,"
                . " hr_inicio_funcionamento, hr_final_funcionamento)"
                . "VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        //
        insertFarmacia($SQL);
    }
?>
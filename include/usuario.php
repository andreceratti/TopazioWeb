<?php
    function cadastrarUsuario($tipo){
        insertUsuario("INSERT INTO USUARIO" 
                . " (nm_login_email, nm_senha, ic_situacao_conta_ativa_desativada,"
                . " nm_pergunta_senha,nm_dica_senha,ds_tipo_usuario)"
                . " VALUES" //
                . " (?,?,0,?,?,$tipo)");

    }
    function pesquisaUsuario(){
        
        if (!empty($_GET["ativo"]))
            $c_ativa = $_GET["ativo"];
        else
            $c_ativa = "ambos";
        if (empty($_GET["email"])){
            if($c_ativa=="ativo"){
                $SQL = "SELECT id_usuario, nm_login_email,"
                        . " ic_situacao_conta_ativa_desativada, ds_tipo_usuario"
                        . " FROM USUARIO"
                        . " WHERE ic_situacao_conta_ativa_desativada = 1;";
            }else if(($c_ativa=="naoativo")){
                $SQL = "SELECT id_usuario, nm_login_email,"
                        . " ic_situacao_conta_ativa_desativada, ds_tipo_usuario"
                        . " FROM USUARIO"
                        . " WHERE ic_situacao_conta_ativa_desativada = 0;";                
            }else{
                $SQL = "SELECT id_usuario, nm_login_email,"
                        . " ic_situacao_conta_ativa_desativada, ds_tipo_usuario"
                        . " FROM USUARIO;";
            }
        }else{
            if($c_ativa=="ativo"){
                $SQL = "SELECT id_usuario, nm_login_email,"
                        . " ic_situacao_conta_ativa_desativada, ds_tipo_usuario"
                        . " FROM USUARIO"
                        . " WHERE ic_situacao_conta_ativa_desativada = 1"
                        . " AND nm_login_email = ?;";
            }else if(($c_ativa=="naoativo")){
                $SQL = "SELECT id_usuario, nm_login_email,"
                        . " ic_situacao_conta_ativa_desativada, ds_tipo_usuario"
                        . " FROM USUARIO"
                        . " WHERE ic_situacao_conta_ativa_desativada = 0"
                        . " AND nm_login_email = ?;";
            }else{
                $SQL = "SELECT id_usuario, nm_login_email,"
                        . " ic_situacao_conta_ativa_desativada, ds_tipo_usuario"
                        . " FROM USUARIO"
                        . " WHERE nm_login_email = ?;";
            }
        }
        selectUsuario($SQL, false);
    }
    function deletarUsuario(){
        if (!empty($_GET["excluir"])) $id = ($_GET["excluir"]);
        dropUsuario("DELETE FROM USUARIO WHERE id_usuario = " . $id . ";");
    }
    function alterarUsuario(){
        if (!empty($_GET['senha'])){
            $SQL = 'UPDATE USUARIO SET nm_login_email = ?, nm_senha = ?,'
                    . ' ic_situacao_conta_ativa_desativada = ?,'
                    . ' ds_tipo_usuario = ? WHERE id_usuario = ' . $_GET['id']
                    . ' ;';
            $senha = TRUE;
        }
        else {
            $SQL = 'UPDATE USUARIO SET nm_login_email = ?,'
                    . ' ic_situacao_conta_ativa_desativada = ?,'
                    . ' ds_tipo_usuario = ? WHERE id_usuario = ' . $_GET['id']
                    . ' ;';
            $senha = FALSE;
        }
        updateUsuario($SQL, $senha);
        
        
    }
    function popularTabelaUsuario($id, $email, $situacao, $tipo){
    echo '<tr>';
    echo '<td>'.$id.'</td><td>'.$email.'</td>';
    if ($situacao==0 || empty($situacao)) echo '<td>Desativado</td>';
    else if ($situacao==1) echo '<td>Ativo</td>';


    if ($tipo==1) echo "<td>Administrador</td>";
    else if ($tipo==2) echo "<td>Cliente</td>";
    else if ($tipo==3) echo "<td>Farmacia</td>";
    else echo "<td>---</td>";
    echo '<td><form action="alterar.php" method="GET">'
    . '<input type="submit" value="Editar">'
    . '<input type="hidden" name="alterar" value="'. $id .'"></form></td>';

    echo '<td><form>';
    echo '<input type="submit" value="Excluir">'
    . '<input type="hidden" name="excluir" value="'. $id .'"></form></td>';
    echo '</tr>';
}
?>
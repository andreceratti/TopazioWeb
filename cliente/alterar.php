<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <?php
            include "../include/cliente.php";
            include "../include/conexao.php";
            include "../include/usuario.php";

            if (!empty($_GET['email'])){
                
                alterarUsuario();
            }
        ?>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <?php
            if(!empty($_GET["alterar"])):?>
            <?php
            $id=$_GET["alterar"];
            $SQL = "SELECT id_usuario, nm_login_email,"
                        . " ic_situacao_conta_ativa_desativada, ds_tipo_usuario"
                        . " FROM USUARIO"
                        . " WHERE id_usuario = ".$id.";";
            $info = pesquisaAlterar($SQL);
            ?>
            <form method="get">
                
            <center><div class="center"> 
                    
                
                    <p><label>Email:</label></p>
                    <p><input type="text" name="email" value='<?php echo $info->email ?>'></p>
                    
                    <table>
                    <tr>
                        <td><select name="ativo">
                        <option value="1" <?php if ($info->conta==1) echo 'selected="selected"' ?>>Ativada</option>
                        <option value="0" <?php if ($info->conta==0) echo 'selected="selected"' ?>>Desativada</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><select name="tipo">
                        <option value="2" <?php if ($info->tipo==2) echo 'selected="selected"' ?>>Cliente</option>
                        <option value="3" <?php if ($info->tipo==3) echo 'selected="selected"' ?>>Farmacia</option>
                        <option value="1" <?php if ($info->tipo==1) echo 'selected="selected"' ?>>Administrador</option>
                            </select></td>
                    </tr>
                    </table>
                    
                    <p><label>Nova Senha:</label></p>
                    <p><input type="password" name="senha"/>
                        <input type="hidden" value="<?php echo $info->id ?>" name="id"/></p>
                    
                
                <input type="submit" value="Alterar"/>
            </form>
        </center></div> 
                
        <a href="../usuario/pesquisar.php">VOLTAR</a>
        <?php endif; ?>
    </body>
</html>
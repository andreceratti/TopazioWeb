<?php
        $servidor = "localhost";
        $banco = "projetoTopazio";
        $usuario_banco = "root";
        $senha_banco = "";
        $link = mysql_connect($servidor, $usuario_banco, $senha_banco);
        $db = mysql_select_db($banco,$link);
        
        function logarCliente($SQL){
            $RS  = mysql_query($SQL);
            while($RF = mysql_fetch_array($RS)){
                $_SESSION["usuario.login"] = $RF['nm_login_email'];
                $_SESSION["loginAtivo"] = TRUE;
            }
        }
?>
<?php
    session_start();
    include 'include/conexao.php';
    
    function logar(){
        if (!empty($_GET['login'])||!empty($_GET['senha'])){
            $login = $_GET['login'];
            $senha = $_GET['senha'];
            logarCliente("SELECT nm_login_email FROM usuario "
                    . "WHERE nm_login_email = '$login';");

        }
        if (!empty($_GET['logout'])){
            unset($_SESSION["loginAtivo"]);
            unset($_SESSION["usuario.login"]);
        }
    }
    
    logar();
    
?>
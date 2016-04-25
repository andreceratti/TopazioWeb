<html>
    <head>
        <title>Topazio Farma</title>
        
    </head>
    <body>
        <div id="site">
            <div id="menu">
                <?php include "include/cliente.php"; ?>
                <?php if(empty($_SESSION["loginAtivo"])): ?>
                    <form method="get">
                        Login: <input type="text" name="login"/>
                        Senha: <input type="text" name="senha"/>
                        <input type="submit" value="Logar"/>
                    </form>
                <?php else: ?>
                <form method="get">
                    <b><?=$_SESSION["usuario.login"];?></b>
                    <input type="hidden" name="logout" value="sair"/>
                    <input type="submit" value="Deslogar"/>
                </form>
                <?php endif; ?>
                

                
            </div>
            <div id="corpo">
                
            </div>
            <div id="rodape">
                
            </div>
        </div>
        
    </body>
</html>
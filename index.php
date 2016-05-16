<html>
    <head>
        <title>Topazio Farma</title>
        <?php
            include "include/cliente.php";
            include "include/conexao.php";
            include "include/usuario.php";
            
            if (!empty($_GET['login'])||!empty($_GET['senha'])){
                login();
            }

            if (!empty($_GET['logout'])){
                logout();
            }
        ?>
        
    </head>
    <body>
        <div id="site">
            <div id="menu">
                <?php if(empty($_SESSION["loginAtivo"])): ?>
                    <form method="get">
                        Login: <input type="text" name="login"/>
                        Senha: <input type="text" name="senha"/>
                        <input type="submit" value="Logar"/>
                        <p><a href="cliente/cadastrar.php">Novo Cadastro</a></p>
                    </form>
                <?php else: ?>
                <form method="get">
                    <b><?=$_SESSION["usuario.login"];?></b>
                    <input type="hidden" name="logout" value="sair"/>
                    <input type="submit" value="Deslogar"/>
                    
                    <?php if ($_SESSION["usuario.tipo"]=='1'):?>
                    <P>
                        <span><a href="cliente/cadastrar.php">Cadastrar Cliente</a></span>
                        <span><a href="farmacia/cadastrar.php">Cadastrar Farmacia</a></span>
                        <span><a href="cliente/pesquisar.php">Pesquisar Usuario</a></span>
                    </P>
                    <?php elseif(($_SESSION["usuario.tipo"]=='2')): ?>
                        <p>Area de Cliente</p>
                    <?php elseif(($_SESSION["usuario.tipo"]=='3')): ?>
                        <p>Area da Farmacia</p>
                    <?php endif; ?>
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
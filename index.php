<html>
    <head>
        <title>Topazio Farma</title>
        <?php
            include "include/cliente.php";
            include "include/conexao.php";
            include "include/usuario.php";
            
            if (!empty($_POST['login'])||!empty($_POST['senha'])){
                login();
            }

            if (!empty($_POST['logout'])){
                logout();
            }
        ?>
        
    </head>
    <body>
        <div id="site">
            <div id="menu">
                <?php if(empty($_SESSION["loginAtivo"])): ?>
                    <form method="post">
                        Login: <input type="text" name="login"/>
                        Senha: <input type="password" name="senha"/>
                        <input type="submit" value="Logar"/>
                        <p><a href="cliente/cadastrar.php">Novo Cadastro</a></p>
                    </form>
                <?php else: ?>
                <form method="post">
                    <b><?=$_SESSION["usuario.login"];?></b>
                    <input type="hidden" name="logout" value="sair"/>
                    <input type="submit" value="Deslogar"/>
                    
                    <?php if ($_SESSION["usuario.tipo"]=='1'):?>
                    <P>
                        <span><a href="cliente/cadastrar.php">Cadastrar Cliente</a></span>
                        <span><a href="farmacia/cadastrar.php">Cadastrar Farmacia</a></span>
                        <span><a href="usuario/pesquisar.php">Pesquisar Usuario</a></span>
                        <span><a href="pedido/cadastrar.php">Criar Pedido</a></span>
                    </P>
                    <?php elseif(($_SESSION["usuario.tipo"]=='2')): ?>
                        <p>Area de Cliente</p>
                        <span><a href="pedido/cadastrar.php">Criar Pedido</a></span>
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
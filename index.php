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
        
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
                <?php if(empty($_SESSION["loginAtivo"])): ?>
        
                <center><div class="center"> <!-- inicio da centralização -->
                    
                    <form method="get">
                        
                        <p> Login: <input type="text" name="login"/> </p>
                        <p> Senha: <input type="text" name="senha"/> </p>
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
                    
                </div></center> <!-- fim da centralização -->
        
                <?php endif; ?>
                  
    </body>
</html>
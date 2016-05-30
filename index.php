<html>
    <head>
        <title>Topazio Farma</title>
                <meta charset="utf-8">
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
        
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
                <?php if(empty($_SESSION["loginAtivo"])): ?>
                    <form method="post">
                        
                    <div class="cabeca"> <!-- inicio cabeçalho -->
                        <h1>Topazio Farma</h1>
                    </div> <!-- fim cabeçalho -->
                     
                    <div class="corpo"> <!-- inicio corpo-->
                       
                        <center><div class="center"> <!-- inicio da centralização -->

                        <form method="post">

                            <p> Login: <input type="text" name="login"/> </p>
                            <p> Senha: <input type="password" name="senha"/> </p>
                            <input type="submit" value="Logar"/>
                            <p><a href="cliente/cadastrar.php">Novo Cadastro</a></p>
                        </form>
                    <?php else: ?>
                    <form method="post">     
                    <form method="post">
                        <b><?=$_SESSION["usuario.login"];?></b>

                        <input type="hidden" name="logout" value="sair"/>
                        <input type="submit" value="Deslogar"/>

                        </div></center><!-- fim da centralização -->
                    </div> <!-- fim corpo -->
                    
                    <div class="menu"> <!-- inicio de menu -->
                    <?php if ($_SESSION["usuario.tipo"]=='1'):?>
                    
                        <span><a href="cliente/cadastrar.php"><p>Cadastrar Cliente</p></a></span>
                        <span><a href="farmacia/cadastrar.php"><p>Cadastrar Farmacia</p></a></span>
                        <span><a href="usuario/pesquisar.php"><p>Pesquisar Usuario</p></a></span>
                        <span><a href="pedido/cadastrar.php"><p>Criar Pedido</p></a></span>
                    
                    <?php elseif(($_SESSION["usuario.tipo"]=='2')): ?>
                    
                        <!--<p>Area de Cliente</p>-->
                        <span><a href="pedido/cadastrar.php"><p>Criar Pedido</p></a></span>
                        
                    <?php elseif(($_SESSION["usuario.tipo"]=='3')): ?>
                        
                        <!--<p>Area da Farmacia</p>-->
                        
                    <?php endif; ?>
                    </div> <!-- fim de menu -->                    
                </form>
                
                <div class="rodape"> <!-- inicio de rodape -->
                    Topazio Farma - Solução de orçamentos para sua farmácia
                </div> <!-- fim de rodape -->                                    
                <?php endif; ?>
                  
    </body>
</html>

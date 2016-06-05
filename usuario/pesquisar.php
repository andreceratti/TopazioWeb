<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <?php
            include "../include/cliente.php";
            include "../include/conexao.php";
            include "../include/usuario.php";
        ?>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estrutura.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        <div class="linha">
                <div class="coluna col12">
                    <div class="cabeca"> <!-- inicio cabeçalho -->
                        <h1>Topazio Farma</h1>
                    </div> <!-- fim cabeçalho -->
                </div>
            </div>
        
              <div class="linha">
                <div class="coluna col8">                                
                    <div class="corpo"> <!-- inicio corpo-->        
        <?php
        if (empty($_SESSION["usuario.tipo"])||$_SESSION["usuario.tipo"]!=1):
            echo "<h1>Area restrita</h1>";
        else:?>

        <center><div class="center"> 
        <form>
            <p>
                Email:<input type="text" name="email"/>
            </p>
            
            <p>Ativo:</p>
                <p><input type="radio" name="ativo" value="ativo"/> Só Ativo </p>
                <p><input type="radio" name="ativo" value="naoativo"/> Só não ativo </p>
                <p><input type="radio" checked name="ativo" value="ambos"/> Ambos </p>
            
            <input type="hidden" value="1" name="pesquisa"/>
            
            <p>
                <input type="submit" value="Enviar"/>
            </p>
        </form>
            <?php
                if (!empty($_GET["pesquisa"])){
                    pesquisaUsuario();
                }
                if (!empty($_GET["excluir"])){
                    deletarUsuario();
                }
            ?>
        </center></div> 
            
        <p><a href="../index.php">Voltar</a></p>
        
        <?php endif; ?>
        
                </div> <!-- fim corpo -->                
            </div> <!--FIM col8-->                
        </div><!--Fim linha-->
            
            <div class="linha">
                <div class="coluna col12">   
                    <div class="rodape"> <!-- inicio de rodape -->
                        Topazio Farma - Solução de orçamentos para sua farmácia
                    </div> <!-- fim de rodape -->                                    
                </div> <!--FIM col12-->                
            </div><!--Fim linha-->    

    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <?php
            include "../include/cliente.php";
            include "../include/conexao.php";
            include "../include/usuario.php";
        ?>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <?php
        if (empty($_SESSION["usuario.tipo"])||$_SESSION["usuario.tipo"]!=1):
            echo '<h1>Area restrita</h1>';
        else: ?>
        <form>
            <p>
                Email:<input type="text" name="email"/>
            </p>
            <p>
                Ativo:
                <input type="radio" name="ativo" value="ativo"/> Só Ativo 
                <input type="radio" name="ativo" value="naoativo"/> Só não ativo 
                <input type="radio" checked name="ativo" value="ambos"/> Ambos 
            </p>
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
        <?php endif; ?>
        
        <p><a href="../index.php">Voltar</a></p>
    </body>
</html>
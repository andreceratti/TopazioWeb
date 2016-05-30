<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            include '../include/conexao.php';
            include '../include/avaliacao.php';
            include '../include/farmacia.php';
        ?>
        <title>Ranking das farmacias</title>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>    
    </head>
    <body>
        <center><div class="center"><form>
            <p>
                <label>Nome da Farmacia </label><input type="text" name="nomeFarmacia"/>
                <input type="submit" value="Pesquisar"/>
            </p>
        </form>
        
        <table>
            <tr>
                <th>Nome</th>
                <th>Pontuação</th>
                <th>Ranking</th>
            </tr>
            <?php popularAvaliacao() ?>
        </table></div></center>
    </body>
</html>
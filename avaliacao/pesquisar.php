<!DOCTYPE html>
<html>
    <head>
        <?php
            include '../include/conexao.php';
            include '../include/avaliacao.php';
            include '../include/farmacia.php';
        ?>
        <title>Ranking das Farmacias</title>
    </head>
    <body>
        <form>
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
        </table>
    </body>
</html>
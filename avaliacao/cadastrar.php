<!DOCTYPE html>
<html>
    <head>
        <?php
            include '../include/conexao.php';
            include '../include/avaliacao.php';
        ?>
        <title>Avaliar Farmacia</title>
    </head>
    <body>
        <form>
            <select>
                <?php popularSelectFarmacia() ?>
            </select>
            <p>
                <label>Nota:</label>
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </p>
            <p>
                Observação:
                <textarea rows="4" cols="50"></textarea>
            </p>
        </form>
        
        <?php
            $db->close();
        ?>
    </body>
</html>
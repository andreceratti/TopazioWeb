<!DOCTYPE html>
<html>
    <head>
        <?php
            include '../include/conexao.php';
            include '../include/avaliacao.php';
        ?>
        <title>Avaliar Farmacia</title>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>   
    </head>
    <body>
        <center><div class="center"><form>
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
        </form></div></center>
        
        <?php
            $db->close();
        ?>
    </body>
</html>
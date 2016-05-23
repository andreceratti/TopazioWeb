<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <?php
            include "../include/conexao.php";
            include '../include/pedido.php';
        ?>
        <title>Cadastro de Pedido</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <label>Pedido: <br/></label><input type="file" name="arquivo"/> <br/>
            <p><label>Forma de Pagamento: </label>
                <select name="pagamento">
                    <option>PagueSeguro</option>
                    <option>Dinheiro</option>
                </select>
            </p>
            <p><input type="submit" value="Enviar"/> </p>
        </form>
    </body>
</html>
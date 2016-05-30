<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            include '../include/conexao.php';
            include '../include/avaliacao.php';
        ?>
        <title>Avaliar Farmacia</title>
        
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        <center><div class="center">
        <form>
            <table>
                <tr>
            
                    <td><p><label>Farmacia:</label></p></td>
                    <td><select>
                        <?php popularSelectFarmacia() ?>
                        </select></td>            
                </tr>
                
                <tr>            
                    <td><p><label>Nota:</label></p></td>
                    <td><select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                        </select></td>
                </tr>
                
                <tr>            
                    <td><p><label>Observação:</label></p></td>
                    <td><textarea rows="4" cols="50"></textarea></td>
                </tr>
            </table>
            
            <input type="submit" value="Enviar"/>
        </form>
        
        </div></center>
    
        <?php
            $db->close();
        ?>
    </body>
</html>

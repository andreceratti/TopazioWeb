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
        <link href="../css/style2.css" rel="stylesheet" type="text/css"/>
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
                <div class="coluna col12">
                <img src="../img/topazio.png" height="300px" width="300px">
                    <div class="corpo"> <!-- inicio corpo-->
                        
                        
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
                </div> <!-- fim corpo -->                
                </div> <!--FIM col5-->                
            </div><!--Fim linha-->
    
            <div class="linha">
                <div class="coluna col12">   
                    <div class="rodape"> <!-- inicio de rodape -->
                        Topazio Farma - Solução de orçamentos para sua farmácia
                    </div> <!-- fim de rodape -->                                    
                </div> <!--FIM col12-->                
            </div><!--Fim linha-->
            
        <?php
            $db->close();
        ?>
    </body>
</html>

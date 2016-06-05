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
        
                    <center><div class="center"><form>
                        <p>
                            <label>Nome da Farmacia </label><input type="text" name="nomeFarmacia"/>
                            <input type="submit" value="Pesquisar"/>
                        </p>
                    </form>

                    <table>
                        <tr>
                            <td><p>Nome</p></td>
                            <td><p>Pontuação</p></td>
                            <td><p>Ranking</p></td>
                        </tr>
                        <tr>
                            <?php popularAvaliacao() ?>
                        </tr>
                    </table>

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
    
    </body>
</html>
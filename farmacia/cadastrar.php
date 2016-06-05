<html>
    <head>
        <title>Topazio Farma</title>
        <meta charset="utf-8">
        <?php 
            include "../include/conexao.php";
            include "../include/usuario.php";
            include '../include/farmacia.php';

            if(!empty($_GET['email'])&&!empty($_GET['senha'])&&!empty($_GET['pergunta'])&&!empty($_GET['resposta'])){
                cadastrarUsuario("2");
                cadastrarFarmacia();
            }
        ?>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style3.css" rel="stylesheet" type="text/css"/>
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
                <div class="coluna col6">                                
                    <div class="corpo"> <!-- inicio corpo-->
                        <center><div class="center">
                                <form method="get">
                                    <table>
                                        <tr>
                                            <td><p><label>Nome:</label></td>
                                            <td><input type="text" name="nome" class="span3 form-control"></p></td>
                                        </tr>                    
                                        <tr>
                                            <td><p><label>Telefone Comercial:</label></td>
                                            <td><input type="text" name="telefone" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Celular:</label></td>
                                            <td><input type="text" name="celular" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Logradouro:</label></td>
                                            <td><input type="text" name="lougradouro" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Bairro:</label></td>
                                            <td><input type="text" name="bairro" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p> <label>Cidade:</label></td>
                                            <td><input type="text" name="cidade" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p> <label>Estado:</label></td>
                                            <td><input type="text" name="estado" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Hora de Inicio Funcionamento:</label></td>
                                            <td><input type="text" name="inicio_funcionamento" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Hora de Fim Funcionamento:</label></td>
                                            <td><input type="text" name="final_funcionamento" class="span3 form-control" ></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Email:</label></td>
                                            <td><input type="text" name="email" class="span3 form-control"/></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Senha:</label></td>
                                            <td><input type="password" name="senha" class="span3 form-control"/></p></td>
                                        </tr>
                                        <tr>
                                            <td><p><label>Pergunta Secreta:</label></td>
                                            <td><select name="pergunta">
                                        <option value="1">Qual o nome de solteiro da sua mãe?</option>
                                        <option value="2">Qual o nome do seu primeiro animal de estimação?</option>
                                        <option value="3">Qual é o time do seu coração?</option>
                                        <option value="4">Qual cidade você passou a maior parte da sua vida?</option>
                                        <option value="5">Qual a sua comida favorita?</option>
                                    </select></p></td>
                                        <tr>
                                            <td><p><label>Resposta:</label></td>
                                            <td><input type="text" name="resposta" class="span3 form-control"/></p></td>
                                        </tr>                    
                                    </table>
                                    <input type="submit" value="Enviar"/>
                                </form>
                        </div></center>
                        
                <p><a href="../index.php">Voltar</a></p>

                        
                    </div> <!-- fim corpo -->                
            </div> <!--FIM col6-->                
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
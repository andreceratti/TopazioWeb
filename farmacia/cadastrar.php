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
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <center><div class="center">
                <form method="get">
                    <table>
                        <tr>
                            <td><p><label>Nome:</label></td>
                            <td><input type="text" name="nome" class="span3 form-control"><p/></td>
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
                            <td><input type="text" name="final_funcionamento" class="span3 form-control" ><br></td>
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
        </center></div>
            
            <p><a href="../index.php">Voltar</a></p>
            
        
    </body>
</html>
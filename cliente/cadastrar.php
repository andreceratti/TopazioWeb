<html>
    <head>
        <title>Topazio Farma</title>
        <?php 
            include "../include/conexao.php";
            include "../include/cliente.php";
            include "../include/usuario.php";

            if(!empty($_GET['email'])&&!empty($_GET['senha'])&&!empty($_GET['pergunta'])&&!empty($_GET['resposta'])){
                cadastrarUsuario("3");
                cadastrarCliente();
            }
        ?>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body>
              
                <center><div class="center"> 
                <form method="get">
                    <label>Nome</label>
                    <input type="text" name="nome" class="span3 form-control"><br/>
                    <label>Data Nascimento</label>
                    <input type="date" name="data_nascimento" class="span3 form-control"><br/>
                    <label>Telefone Residencial</label>
                    <input type="text" name="telefone" class="span3 form-control" ><br/>
                    <label>Telefone Comercial</label>
                    <input type="text" name="telefone_comercial" class="span3 form-control" ><br/>
                    <label>Celular</label>
                    <input type="text" name="celular" class="span3 form-control" ><br/>
                    <label>Logradouro</label>
                    <input type="text" name="logradouro" class="span3 form-control" ><br/>
                    <label>Complemento</label>
                    <input type="text" name="complemento" class="span3 form-control" ><br/>
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="span3 form-control" ><br/>
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="span3 form-control" ><br/>
                    <label>Estado</label>
                    <input type="text" name="estado" class="span3 form-control" ><br/>
                    <hr>
                    <label>Email:</label>
                    <input type="text" name="email" class="span3 form-control"/><br/>
                    <label>Senha:</label> 
                    <input type="password" name="senha" class="span3 form-control"/><br/>
                    <label>Pergunta Secreta:</label>
                    <select name="pergunta">
                        <option value="1">Qual o nome de solteiro da sua mãe?</option>
                        <option value="2">Qual o nome do seu primeiro animal de estimação?</option>
                        <option value="3">Qual é o time do seu coração?</option>
                        <option value="4">Qual cidade você passou a maior parte da sua vida?</option>
                        <option value="5">Qual a sua comida favorita?</option>
                    </select><br/>
                    <label>Resposta:</label>
                    <input type="text" name="resposta" class="span3 form-control"/><br/>
                    
                    <input type="submit" value="Enviar"/>
                </form>
                        
            <p><a href="../index.php">Voltar</a></p>
            </div></center>
    </body>
</html>
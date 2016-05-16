<?php
        $servidor = "mysql.hostinger.com.br";
        $banco = "u742772470_topaz";
        $usuario_banco = "u742772470_admin";
        $senha_banco = "topazio";
    
        $db = new mysqli($servidor,$usuario_banco,$senha_banco,$banco);
        if($db->connect_error){
            echo $db->connect_error;
            die('<br>Desculpe, mas estamos com alguns problemas');
        }
        
        function selectUsuario($SQL,$login){
            global $db;
            if($login){
            $usuario = new stdClass();

                if ($stmt = $db->prepare($SQL)) {
                    $stmt->bind_param("ss", $login, $senha);

                    $login = $_GET['login'];
                    $senha = $_GET['senha'];
                    $stmt->execute();

                    $stmt->bind_result($id, $login, $senha, $ativo, $pergunta, 
                            $dica, $tipo);
                    while($stmt->fetch()){
                        
                        $usuario->id = $id;
                        $usuario->login = $login;
                        $usuario->senha = $senha;
                        $usuario->ativo = $ativo;
                        $usuario->pergunta = $pergunta;
                        $usuario->dica = $dica;
                        $usuario->tipo = $tipo;
                    }
                $stmt->close();
                $db->close();
                }
                
                return $usuario;
            }else{
                if (empty($_GET["email"])){
                    if ($stmt = $db->prepare($SQL)){
                        $stmt->execute();
                        
                        $stmt->bind_result($id, $email, $situacao, $tipo);
                        echo "<table border='1'>";
                        echo "<tr>"
                                . "<th><form>ID</form></th>"
                                . "<th>Email</th>"
                                . "<th>Conta Ativa</th>"
                                . "<th>Tipo</th>"
                                . "<th>Editar</th>"
                                . "<th>Excluir</th>"
                            . "</tr>";
                        while($stmt->fetch()){
                            popularTabelaUsuario($id, $email, $situacao, $tipo);
                        }
                        echo '</table>';
                        $stmt->close();
                        $db->close();
                    }
                }else{
                    if ($stmt = $db->prepare($SQL)){
                        $stmt->bind_param("s", $u_email);
                        $u_email = $_GET['email'];
                        
                        $stmt->execute();
                        
                        $stmt->bind_result($id, $email, $situacao, $tipo);
                        echo "<table border='1'>";
                        echo "<tr><th>ID</th><th>Email</th>"
                        . "<th>Conta Ativa</th><th>Tipo</th><th>Editar</th>"
                        . "<th>Excluir</th></tr>";
                        while($stmt->fetch()){
                            popularTabelaClientes($id, $email, $situacao, $tipo);
                        }
                        echo '</table>';
                        $stmt->close();
                        $db->close();
                    }
                    
                }
            }
        }
        function insertUsuario($SQL){
            global $db;
            
            if($stmt = $db->prepare($SQL)){
                $stmt->bind_param("ssis", $email, $senha, $pergunta, $resposta);
                
                $email = $_GET['email'];
                $senha = $_GET['senha'];
                $pergunta = $_GET['pergunta'];
                $resposta = $_GET['resposta'];
                
                $stmt->execute();
                $stmt->close();
                //$db->close();
            }
        }
        function insertFarmacia($SQL){
            global $db;
            $ID;
            $BUSCA_ID = "SELECT id_usuario FROM USUARIO"
                    . " WHERE nm_login_email = ?;";
            
            if($stmt = $db->prepare($BUSCA_ID)){
                $stmt->bind_param("s", $email);
                 $email = $_GET['email'];
                
                $stmt->execute();
                $stmt->bind_result($IDs);
                while($stmt->fetch()){ $ID = $IDs; }
                $stmt->close();
            }
            if($stmt = $db->prepare($SQL)){
                $stmt->bind_param("isssssssss", $ID, $nome, $tel_com, $tel_cel,
                        $logradouro, $bairro, $cidade, $estado, $hr_ini, $hr_fim);
                $nome = $_GET['nome'];
                $tel_com = $_GET['telefone'];
                $tel_cel = $_GET['celular'];
                $logradouro = $_GET['lougradouro'];
                $bairro = $_GET['bairro'];
                $cidade = $_GET['cidade'];
                $estado = $_GET['estado'];
                $hr_fim= $_GET['inicio_funcionamento'];
                $hr_ini= $_GET['final_funcionamento'];
                
                $stmt->execute();
                $stmt->close();
                $db->close();
                
                echo '<h1>Cadastro Concluido</h1>';
            }
            
        }
        function insertCliente($SQL){
            global $db;
            $ID;
            $BUSCA_ID = "SELECT id_usuario FROM usuario"
                    . " WHERE nm_login_email = ?;";
            
            if($stmt = $db->prepare($BUSCA_ID)){
                $stmt->bind_param("s", $email);
                 $email = $_GET['email'];
                
                $stmt->execute();
                $stmt->bind_result($IDs);
                while($stmt->fetch()){ $ID = $IDs; }
                $stmt->close();
            }
            if($stmt = $db->prepare($SQL)){
                $stmt->bind_param("issssssssss", $ID, $nome, $dt_nascimento, $tel_res,
                        $tel_cel, $tel_com, $logradouro, $complemento, $bairro, $cidade,
                        $estado);
                $nome = $_GET['nome'];
                $dt_nascimento = $_GET['data_nascimento'];
                $tel_cel = $_GET['telefone'];
                $tel_com = $_GET['telefone_comercial'];
                $tel_res = $_GET['celular'];
                $logradouro = $_GET['logradouro'];
                $complemento = $_GET['complemento'];
                $bairro = $_GET['bairro'];
                $cidade = $_GET['cidade'];
                $estado = $_GET['estado'];
                
                $stmt->execute();
                $stmt->close();
                $db->close();
                
                echo '<h1>Cadastro Concluido</h1>';
            }
        }
        function dropUsuario($SQL){
            global $db;
            
            if($stmt = $db->prepare($SQL)){
                $stmt->execute();
                $stmt->close();
                $db->close();
                
                echo "<h1>Registro excluido";
            }
        }
        function pesquisaAlterar($SQL){
            global $db;
            $info = new stdClass();
            if ($stmt = $db->prepare($SQL)){
                $stmt->execute();
                $stmt->bind_result($id,$email,$conta,$tipo_usuario);
                while($stmt->fetch()){
                    $info->id = $id;
                    $info->email = $email;
                    $info->conta = $conta;
                    $info->tipo = $tipo_usuario;
                }
                $stmt->close();
                $db->close();
                return $info;
            }
        }
        function updateUsuario($SQL,$senha){
            global $db;
            if ($stmt = $db->prepare($SQL)){
                if ($senha){
                    $stmt->bind_param("ssii", $email, $senha, $ativo, $tipo);
                    $senha=$_GET['senha'];
                }else{
                    $stmt->bind_param("sii", $email, $ativo, $tipo);
                }
                $email = $_GET["email"];
                $ativo = $_GET["ativo"];
                $tipo = $_GET["tipo"];
                $stmt->execute();
                
                echo "<h1>Registro atualizado</h1>";
                echo "<a href='pesquisar.php'>Voltar</a>";
                $stmt->close();
                $db->close();
            }
        }
            

?>
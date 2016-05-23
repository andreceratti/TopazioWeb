<?php
    $datahora = date('dmyHis');
    if(!empty($_FILES['arquivo'])){
        $nomeantigo = $_FILES['arquivo']['name'];
        $tipo = explode("/", $_FILES['arquivo']['type']);
        $tamanho = $_FILES['arquivo']['size'];
        $nomeTemporario = $_FILES['arquivo']['tmp_name'];
        
        if (empty($_SESSION["usuario.id"])){
            $nomearquivo = '99999' . $datahora;
        } else{
            $nomearquivo = $_SESSION['usuario.id'] . $datahora;
        }
    }
    $pasta = 'uploads/';
    

    if (isset($nomearquivo)){
        if (!empty($nomeantigo)){
            if (!$tamanho>3048){
                if($tipo[1]=='jpg'||$tipo[1]=='jpeg'||$tipo[1]=='png'){
                    move_uploaded_file($nomeTemporario, $pasta.$nomearquivo.'.'.$tipo[1]);
                    echo 'Arquivo enviado com sucesso<br>';
                } else {
                    echo 'Aviso: Tipo de arquivo incompativel<br>';
                }
            } else {
                echo 'Aviso: Arquivo muito grande.';
            }
        } else {
            echo '<h3>Por favor selecione uma imagem para enviar</h3>';
        }
    }
?>
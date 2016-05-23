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
            move_uploaded_file($nomeTemporario, $pasta.$nomearquivo.'.'.$tipo[1]);
            echo 'Arquivo enviado com sucesso';
        } else {
            echo '<h3>Por favor selecione uma imagem para enviar</h3>';
        }
    }
?>
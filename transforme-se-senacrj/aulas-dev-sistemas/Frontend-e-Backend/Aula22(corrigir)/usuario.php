<?php

// Inclui o array que simula um BD
require_once("conexao_bd_array.php");


function getUltimoId() {
    if (isset($_SESSION['usuariosBD']) && count($_SESSION['usuariosBD']) > 0) {
        $ult_usuario = $_SESSION['usuariosBD'][count($_SESSION['usuariosBD'])-1];
        $ultimo_id = $ult_usuario['id_usuario'] +1;
        return $ultimo_id;
    } else {
        return 1;
    }
}


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Código para cadastrar ou editar usuários... 
    
    // Recebe os dados do formulário
    $id_usuario = isset($_POST["id_usuario"]) ? $_POST["id_usuario"] : null;
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dataCadastro = $_POST["data_cadastro"];
    $situacao = isset($_POST["situacao"]) ? $_POST["situacao"] : 0;
    $funcao = $_POST["funcao"];
    $foto_preview = isset($_POST["foto_preview"]) ? $_POST["foto_preview"] : null;;

    //Verifica se o campo foto existe no formulário, se não houve erro de UPLOAD e se o arquivo foi enviado
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === UPLOAD_ERR_OK && !empty($_FILES["foto"]["tmp_name"])) {
   
        $foto_temp = $_FILES["foto"]["tmp_name"];
        $foto_nome = $_FILES["foto"]["name"];

        // Define o diretório de upload
        $diretorio_upload = "img/";

        // Move o arquivo para o diretório de upload
        $caminho_foto = $diretorio_upload . $foto_nome;

        if (!move_uploaded_file($foto_temp, $caminho_foto)) {
            // Handle erro de upload, se necessário
            echo "Erro no upload da foto.";
            exit();
        }

    } else {
        //Usa a foto padrão caso não tenha sido enviada a imagem por algum motivo

        // Define o diretório de upload
        $diretorio_upload = "img/";
        $foto_nome = "userpadrao.png";

        if (empty($foto_preview)) {
            // Define o caminho da imagem e nome se $foto_preview estiver vazio
            $caminho_foto = $diretorio_upload . $foto_nome;
        } else {
            // Usa o caminho da pré-visualização se $foto_preview não estiver vazio
            $caminho_foto = $foto_preview;
        }
        
        // Adiciona o caminho da foto ao array de usuário
        // $usuario["Foto"] = $caminho_foto;

    }
    
    // Crie um array associativo para armazenar os dados
    $usuario = array(
        // count($_SESSION['usuariosBD'])+1,
        "id_usuario" => $id_usuario !== null ? $id_usuario : getUltimoId(),
        "Nome" => $nome,
        "Email" => $email,
        "DataCadastro" => $dataCadastro,
        "Situacao" => $situacao,
        "Funcao" => $funcao,
        "Foto" => $caminho_foto
    );
    
    // Adiciona ou atualiza o usuário no array de USUÁRIOS (variável global) (simula uma tabela de BD)
    if ($id_usuario !== null) {
        // Editar usuário existente
        foreach ($_SESSION['usuariosBD'] as $indice => $usuario) {
            if ($usuario['id_usuario'] == $id_usuario) {
                // Usuário encontrado
                $_SESSION['usuariosBD'][$indice] = $usuario;
                break;
            }
        }
    } else {
        // Adicionar novo usuário
        var_dump($_SESSION['usuariosBD'], $usuario);
        array_push($_SESSION['usuariosBD'], $usuario);
        echo "<br><br><br><br>";
        var_dump($_SESSION['usuariosBD'], $usuario);
    }

    
    
    // Pode fazer algo com os dados aqui, como salvar em um banco de dados

    // Redireciona para a página de listar usuários com a mensagem
    // header("Location: usuario_listar_card.php?mensagem=Usuario+cadastrado+com+sucesso+" . getUltimoId());
    
    var_dump($caminho_foto);
    exit();

} elseif (isset($_GET['acao']) && isset($_GET['id'])) {
     // Se o parâmetro 'acao' e 'id' estiverem presentes na URL
     echo '<script>alert("acao: ' . $_GET['acao'] . ' id: ' . $_GET['id'] . '");</script>';
     $acao = $_GET['acao'];
     $id_usuario = $_GET['id'];
 
     // Verifica a ação desejada
     switch ($acao) {
         case 'excluir':
             // Implementa a lógica para excluir usuário

             // Procura o índice do usuário no array com base no id
             $indice_usuario = -1;
             foreach ($_SESSION['usuariosBD'] as $indice => $usuario) {
                 if ($usuario['id_usuario'] == $id_usuario) {
                     $indice_usuario = $indice;
                     break;
                 }
             }
 
             // Remove o usuário se encontrado
             if ($indice_usuario != -1) {
                 unset($_SESSION['usuariosBD'][$indice_usuario]);
                 array_values($_SESSION['usuariosBD']);
                 header("Location: usuario_listar_card.php?mensagem=Usuario+excluido+com+sucesso");
                 exit();
             } else {
                 // Usuário não encontrado
                 header("Location: usuario_listar_card.php?mensagem=Usuario+não+encontrado");
                 exit();
             }
             break;
        default:
            // Ação desconhecida
            header("Location: usuario_listar_card.php?mensagem=Acao+desconhecida");
            exit();
    }

} else {
    // Ação padrão quando nenhum parâmetro é fornecido
    header("Location: usuario_listar_card.php");
    exit();
}
?>

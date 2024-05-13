<?php
session_start();

// Inclui o array que simula um BD
require_once("conexao_bd_array.php");

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

    // Verifica se um arquivo de imagem foi enviado
    if (isset($_FILES["foto"])) {
        $foto_temp = $_FILES["foto"]["tmp_name"];
        $foto_nome = $_FILES["foto"]["name"];

        // Define o diretório de upload
        $diretorio_upload = "img/";

        // Move o arquivo para o diretório de upload
        $caminho_foto = $diretorio_upload . $foto_nome;

        if (move_uploaded_file($foto_temp, $caminho_foto)) {
            // Upload bem-sucedido, adiciona o caminho da foto ao array de usuário
            $usuario["Foto"] = $caminho_foto;
        } else {
            // Handle erro de upload, se necessário
            echo "Erro no upload da foto.";
            exit();
        }
    }
    
    // Crie um array associativo para armazenar os dados
    $usuario = array(
        "id_usuario" => count($_SESSION['usuariosBD'])+1,
        "Nome" => $nome,
        "Email" => $email,
        "DataCadastro" => $dataCadastro,
        "Situacao" => $situacao,
        "Funcao" => $funcao,
        "Foto" => isset($usuario["Foto"]) ? $usuario["Foto"] : null
    );
    
    // Adiciona ou atualiza o usuário no array de USUÁRIOS (variável global) (simula uma tabela de BD)
    if ($id_usuario !== null) {
        // Editar usuário existente
        $_SESSION['usuariosBD'][$id_usuario] = $usuario;
    } else {
        // Adicionar novo usuário
        array_push($_SESSION['usuariosBD'], $usuario);
    }

    
    // Pode fazer algo com os dados aqui, como salvar em um banco de dados

    // Redireciona para a página de listar usuários com a mensagem
    header("Location: usuario_listar_card.php?mensagem=Usuario+cadastrado+com+sucesso");
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
                 if ($usuario['id'] == $id_usuario) {
                     $indice_usuario = $indice;
                     break;
                 }
             }
 
             // Remove o usuário se encontrado
             if ($indice_usuario != -1) {
                 unset($_SESSION['usuariosBD'][$indice_usuario]);
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

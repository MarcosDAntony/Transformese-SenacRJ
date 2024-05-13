<?php
// Inclui a conexão com o banco de dados
require_once('config.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Código para cadastrar ou editar usuários... 
    
    // Recebe os dados do formulário
    $id = isset($_POST["id"]) ? $_POST["id"] : null;
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

        if($id !== null){

            $sql = "UPDATE usuarios SET "; 
            $sql .=" nome = '" . $nome . "' ,";
            $sql .=" email = '" . $email . "' ,";
            $sql .=" data_cadastro = '" . $dataCadastro . "' ,";
            $sql .=" situacao = '" . $situacao . "' ,";
            $sql .=" funcao = '" . $funcao . "' ,";
            $sql .=" foto = '" . $caminho_foto . "' ,";
            $sql .=" WHERE id =".$id;
            $res = $conn->query($sql);

            if ($res == true){
               //usuario apagado
               header("Location: usuario_listar_card_bd.php?mensagem=Usuario+excluido+com+sucesso");
            }else{
               // Usuário não encontrado
               header("Location: usuario_listar_card_bd.php?mensagem=Usuario+não+encontrado");
               exit();
            }

        } else {
            $sql = "INSERT INTO usuarios(nome, email, data_cadastro, situacao, funcao,foto) "; 
            $sql .=" nome = '" . $nome . "' ,";
            $sql .=" email = '" . $email . "' ,";
            $sql .=" data_cadastro = '" . $dataCadastro . "' ,";
            $sql .=" situacao = '" . $situacao . "' ,";
            $sql .=" funcao = '" . $funcao . "' ,";
            $sql .=" foto = '" . $caminho_foto . "' ,";
            $sql .=" WHERE id =".$id;
            $res = $conn->query($sql);
 
        }
    // Pode fazer algo com os dados aqui, como salvar em um banco de dados

    // Redireciona para a página de listar usuários com a mensagem
    // header("Location: usuario_listar_card.php?mensagem=Usuario+cadastrado+com+sucesso+" . getUltimoId());
    
    var_dump($caminho_foto);
    exit();

} elseif (isset($_GET['acao']) && isset($_GET['id'])) {

     $acao = $_GET['acao'];
     $id = $_GET['id'];
 
     // Verifica a ação desejada
     switch ($acao) {
         case 'excluir':
             // Implementa a lógica para excluir usuário
             $sql = "DELETE FROM usuarios WHERE id =".$id;
             $res = $conn->query($sql);

             var_dump($sql);
             if ($res == true){
                //usuario apagado
                header("Location: usuario_listar_card_bd.php?mensagem=Usuario+excluido+com+sucesso");
             }else{
                // Usuário não encontrado
                header("Location: usuario_listar_card_bd.php?mensagem=Usuario+não+encontrado");
                exit();
             }
             break;

             // Procura o índice do usuário no array com base no id
 
             
             // Remove o usuário se encontrado
             

        default:
            // Ação desconhecida
            header("Location: usuario_listar_card_bd.php?mensagem=Acao+desconhecida");
            exit();
    }

} else {
    // Ação padrão quando nenhum parâmetro é fornecido
    header("Location: usuario_listar_card_bd.php");
    exit();
}
?>

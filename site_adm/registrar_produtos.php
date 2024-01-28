<?php
// Configurações do banco de dados
$servername = "localhost"; // endereço do servidor
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "deluxuniformespro-bd"; // nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepara as variáveis para inserção no banco de dados
        $descricao = $_POST['descricao'];
        $imagem = $_FILES['imagem'];

        if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK && !empty($_FILES['imagem']['tmp_name'])){

            $nomeTemporario = $_FILES['imagem']['tmp_name'];
            $nomeDafoto = $_FILES['imagem']['name']; // Correção aqui
            $diretorio = "../imagens/";
         
            $caminhofoto = $diretorio . $nomeDafoto;
            
            if (!move_uploaded_file($nomeTemporario, $caminhofoto)){
         
               echo"Erro no upload da foto";
               exit();
            }
        }
        // Query SQL para inserir os dados na tabela de produtos
        $sql = "INSERT INTO `produtos`(`descricao`, `imagem`) VALUES ('$descricao', '$caminhofoto')";
        $res = $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            echo "Produto registrado com sucesso.";
        } else {
            echo "Erro ao registrar o produto: " . $conn->error;
        }
    }


// Fecha a conexão com o banco de dados
$conn->close();
?>

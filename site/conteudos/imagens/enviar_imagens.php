<?php
// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'deluxuniformespro-bd');

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Caminho da imagem
$imagePath = 'caminho/para/sua/imagem.jpg';

// Converte a imagem em um formato adequado para o banco de dados
$imageData = file_get_contents($imagePath);

// Insere a imagem na tabela
$sql = "INSERT INTO produtos (imagem) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("b", $imageData);
$stmt->execute();

// Verifica se a inserção foi bem sucedida
if ($stmt->affected_rows > 0) {
    echo "Imagem inserida com sucesso!";
} else {
    echo "Erro ao inserir imagem: " . $conn->error;
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>

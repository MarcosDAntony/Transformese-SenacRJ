<?php
//criar conexao banco de dados mysql
$host = "localhost";   //servidor
$user = "root";        //usuario do banco de dados
$pass = "";            //senha do banco de dados (vazio = sem senha no)
$base = "deluxuniformespro-bd"; //nome do banco de dados

// Crie a conexão com o BD
$conn = new mysqli($host, $user, $pass, $base);

// Checando a conexão. Se falhar, exibe mensagem de erro e finaliza o script
if ($conn->connect_error) {
    die("Conexão com o BD falhou: " . $conn->connect_error);
}
 echo "Conexão com o BD realizada com sucesso!";
?>

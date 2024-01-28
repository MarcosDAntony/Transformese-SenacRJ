<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    // Número de telefone para onde você deseja direcionar o usuário
    $numero_whatsapp = "+5521972606501";

    // Monta a URL do WhatsApp com a mensagem pré-definida
    $url_whatsapp = "https://wa.me/{$numero_whatsapp}?text=" . urlencode("Olá, {$nome}! Recebemos sua mensagem: '{$mensagem}'. Como podemos ajudar?");

    // Redireciona o usuário para o WhatsApp
    header("Location: {$url_whatsapp}");
    exit();
}

?>

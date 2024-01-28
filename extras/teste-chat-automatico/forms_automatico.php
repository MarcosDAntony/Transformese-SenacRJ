<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Contato</title>
</head>
<body>

<h2>Formulário de Contato</h2>

<form action="enviar_whatsapp.php" method="post">
  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome" required><br><br>
  
  <label for="mensagem">Mensagem:</label><br>
  <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br><br>
  
  <input type="submit" value="Enviar">
</form>

</body>
</html>

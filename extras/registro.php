<?php

// Restante do código permanece o mesmo...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuário</title>
</head>
<body>
    <h2>Registro de Usuário</h2>
    <form action="registro_processa.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>

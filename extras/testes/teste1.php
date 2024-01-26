<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administração</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .admin-panel {
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        textarea {
            width: 100%;
            height: 200px;
            resize: none;
            margin-bottom: 10px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>Página de Administração</h1>
    </header>

    <main>
        <div class="admin-panel">
            <h2>Bloco de Notas</h2>
            <form action="salvar_nota.php" method="post">
                <input type="hidden" name="cliente_id" value="1"> <!-- Substitua 1 pelo ID do cliente -->
                <input type="text" name="cliente_nome" placeholder="Nome do Cliente" required>
                <textarea name="nota" placeholder="Escreva os pedidos dos clientes aqui..." required></textarea>
                <button type="submit">Salvar Nota</button>
            </form>
        </div>
    </main>

</body>
</html>
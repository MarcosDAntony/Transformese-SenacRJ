<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="adicionar.php" method="post">
        <input type="text" name="tarefa" placeholder="Tarefa">

        <select name="status">
            <option value="Pendente">Pendente</option>
            <option value="Concluída">Concluída</option>
        </select>
        
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>
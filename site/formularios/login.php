<?php require_once("config.php");  //Inclui Banco de Dados?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Faça seu Login</title>

  <style>
    * {
      font-family: 'sans-serif';
      /* Tahoma, Geneva, Verdana, sans-serif, Segoe UI */
    }

    .position-login {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      width: 450px;
      overflow: hidden;
      padding: 20px; /* Adiciona margem interna */
    }

    .form-label {
      font-size: 18px;
      font-weight: bold;
    }

    .btn-entrar {
      background-color: #28a745; /* Cor verde do Bootstrap para botões de sucesso */
      color: white;
    }

    h2 {
      margin-bottom: 20px; /* Adiciona espaçamento abaixo do título */
    }
  </style>
</head>
<?php include_once("../formularios/heade.php");?>
<body>
  <div class="position-login">
  <div class="container">
    <h2>Login</h2>
    <form class="row g-3">

      <div class="col-md-12">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="E-mail">
      </div>

      <div class="col-md-12">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="senha" placeholder="Senha">
      </div>

      <div class="col-md-12">
        <button type="submit" class="btn btn-sucess">Entrar</button>
      </div>
    </form>
  </div>
  </div>
</body>
<?php include_once("../formularios/footer.php");?>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Esqueci minha senha</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <style>
*{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}


.position-esqueci-senha {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }



    form {
      background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);     
      padding: 20px;
      border-radius: 8px;
      width: 400px;
    }
  
    .imgcadastro {
  background-image: url(../site/conteudos/imagens/Img-Ref/Atual/fundo-forms.jpg);
  background-size: cover;
  background-position: center; /* Adiciona esta linha para posicionar no centro */
  background-attachment: fixed; /* Adiciona esta linha se quiser que a imagem seja fixa durante o scroll */
  width: 100%;
  height: 115%;
}

    </style>
</head>
<body>
<?php include("heade.php");?>
  <div class="position-esqueci-senha">

    <form action="action_esqueci_senha.php" class="form" method="post">
    <h2>Recupere sua senha</h2>

        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required><br>

        <label for="nova_senha">Nova Senha:</label>
        <input type="password" class="form-control" id="nova_senha" name="nova_senha" required><br>

        <label for="nova_senha">Confime a nova senha:</label>
        <input type="password" class="form-control" id="nova_senha" name="nova_senha" required><br>

      <button class="btn btn-" type="submit">Renomear</button>
    </form>
  </div>

</body>
<?php include("footer.php");?>
</html>
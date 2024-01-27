<?php

include("./heade.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Esqueci minha senha </title>

</head>
<body>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Esqueci minha senha</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

  <div class="">
    <div class="container pt-3 pb-3 d-flex justify-content-between" style="font-size: 28px;">
      <div><b>Recupere sua Senha</b></div>
      <div><button class="btn btn-outline-light"><a href="http://">Registre-se</a></button></div>
    </div>
  </div>

  <div class="container">

    <h1 class="mt-3" style="text-align: center;">Esqueci minha senha</h1>
    <form action="action_esqueci_senha.php" class="form">
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email"><br>

        <label for="email">Nova Senha:</label>
        <input type="password" class="form-control" id="nova_senha" name="nova_senha"><br>
        <label for="email">Confime a nova senha:</label>
        <input type="password" class="form-control" id="nova_senha" name="nova_senha"><br>
      </div>


      <button class="btn btn-success" type="submit">Recuperar</button>

    </form>
  </div>

</body>

</html>


</body>
</html>l
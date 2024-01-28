

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
  <!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!--FavIcon--> <link rel="shortcut icon" href="../site/conteudos/imagens/icons/atual/conta.ico" type="image/x-icon">
    <style>
*{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}


.position-login {
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
      width: 300px;
    }
  
    .imglogin {
  background-image: url(../site/conteudos/imagens/Img-Ref/Atual/fundo-forms.jpg);
  background-size: cover;
  background-position: center; /* Adiciona esta linha para posicionar no centro */
  background-attachment: fixed; /* Adiciona esta linha se quiser que a imagem seja fixa durante o scroll */
  width: 100%;
  height: 115%;
}

    </style>
    <title>Logar-se</title>
  </head>
  
  <?php include("heade.php");?>
  <body class="imglogin">
    <div class="position-login">
        <form class="row g-3" action="validacao_login.php" method="post" enctype="multipart/form-data">
        <h2 style="text-align: center;">Login</h2>

          <div class="col-12">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <br>
          <div class="col-12">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
          </div>
 
          <div class="col-12">
            <button type="submit" class="btn btn-">
                Entrar
            </button>
            <br>
          </div>
          
          <div class="col-12">
            <a class="btn btn-" href="cadastro.php">
              Cadastre-se
            </a>
            <br>

            <a class="btn btn-" href="esqueci_minha_senha.php">
              Esqueceu a senha?
            </a>
          </div>
        </form>
  </div>
</body>
<?php include("footer.php");?>
</html>

   
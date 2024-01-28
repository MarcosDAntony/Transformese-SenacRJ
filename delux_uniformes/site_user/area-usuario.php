<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
  <!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!--FavIcon--> <link rel="shortcut icon" href="../conteudos/imagens/icons/atual/cadastro.ico" type="image/x-icon">
    <title>Página de Administração</title>
    <style>
        *{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}


        header {
            background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
            padding: 1em;
            text-align: center;
            height: 190px;
        }

        .logo {
            position: relative;
            bottom: 15px;
            width: 240px;
            height: 250px;
        }

/**Painel do Usuário====================================================================================*/
        .painel-adm {
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            
        }

  

    .round-image {
        width: 200px;
        height: 200px;
        border-radius: 50%; /* Define o border-radius como 50% para criar uma forma circular */
        overflow: hidden; /* Garante que a imagem seja cortada para se ajustar ao círculo */
    }

    .round-image img {
        width: 100%; /* Garante que a imagem preencha completamente o círculo */
        height: auto; /* Mantém a proporção da imagem */
        display: block; /* Remove qualquer espaço extra em torno da imagem */
    }
       
    .imguser {
  background-image: url(../site/conteudos/imagens/Img-Ref/Atual/atual\ -\ fundo\ principal\ melhoradas.png);
  background-size: cover;
  background-position: center; /* Adiciona esta linha para posicionar no centro */
  background-attachment: fixed; /* Adiciona esta linha se quiser que a imagem seja fixa durante o scroll */
  width: 100%;
  height: 115%;
}

button{
    background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
}
/**================================================================================================= */
    </style>
</head>
<body>
  <!-- =============================================Header=========================================================================-->
  <header>
        <div class="navbar navbar-expand-md text-black-80 container-fluid">
            <a href="#" class="animate-img w3-animate-left" target="_self">
                <img src="../conteudos/imagens/img-ref/atual/deluxpro-semmaquina-removebg-preview.png" class="logo" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></h5>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 pe-3" style="font-size: 17px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="principal-user.php">
                              <img src="../conteudos/imagens/icons/atual/home.png" style="height:25px; width:25px;" alt="home" >
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="carrinho.php">
                            <img src="../conteudos/imagens/icons/atual/carrinho.png" style="height:20px; width:20px;" alt="carrinho">
                          </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">
                            <img src="../conteudos/imagens/icons/atual/sair.png" style="height:20px; width:20px;" alt="logout">
                          </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="painel-adm">
        <form action="#" method="post" enctype="multipart/form-data">

        <div class="round-image">
        <img src="../conteudos/imagens/Img-Ref/Atual/deluxpro-semmaquina-removebg-preview.png" alt="Imagem Redonda">
        </div>

          <div class="col-md-6">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>

          

          <div class="col-md-6">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
          </div>

          <div class="col-md-6">
            <label for="numero" class="form-label">Número de Celular:</label>
            <input class="form-control" id="numero" name="numero" placeholder="+55 (21)00000-0000" required>
          </div>

          <div class="col-md-6">
            <label for="uf" class="form-label">UF</label>
            <select id="uf" class="form-control" name="uf" required>
              <option selected>...</option>
              <option>RJ</option>
            </select>
          </div>

          <div class="col-12">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Cidade, bairro, complemento..." style="width: 300px;" required>
          </div>

         
          <div class="col-md-2">
            <label for="cep" class="form-label">CEP:</label>
            <input class="form-control" id="cep" name="cep" placeholder="00000-000" style="width:100px;" required>
          </div>

          <br>
          <div class="col-12">
            <button type="submit" class="btn btn-">
                Alterar dados
            </button>
          </div>
       </form>
</div>
    
</body>
<!-- Bootstrap JavaScript (não pode remover se não perde a função do menu) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php include("../site/includes/footer.php");?>

</html>
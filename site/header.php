<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  *{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}
/*======================================================== Style Header=========================================================*/
  header{
    background: linear-gradient(0deg, rgba(106,255,111,1) 0%, green);
    direction:unset;
    height: 260px;
  }

  .logo{
    width: 325px;
    height: 325px;
  }

  .whatsapp-image {
    display: flex;
    position:fixed;
    direction: unset;
    bottom: 70px;
    right: 15px;
    width: 35px;
    height: 35px;
    animation: normal alternate;
  }
  
  .imgmain {
  background-size: cover;
  bottom: 50px;
}


.divBusca{
  border-radius:3px;
  width:290px;
  height: 36px;
  background-color: white;
  }
  
  .inputBusca{
  border-radius:3px;
  width:250px;
  height: 36px;
  border: transparent;
  }
</style>
</head>
<body>
  
</body>
</html>
<!-- =============================================Header=========================================================================-->
    <header class="header">
    <div class="navbar navbar-expand-md text-black-70 container-fluid">


        <a  href="principal.php" class="animate-img w3-animate-left" target="_self">
          <img src="../site/conteudos/imagens/img_ref/atual/deluxpro-semmaquina-removebg-preview.png" class="logo" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></h5>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav flex-grow-1 pe-3"  style="font-size: 19px;">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../site/conteudos/sobre.html">Sobre</a>
              </li>

              <li class="nav-item dropdown">
                <a href="#Produtos" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                 Produtos     
                </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../site/conteudos/medicina.html">Medicina</a></li>
                <li><a class="dropdown-item" href="../site/conteudos/beleza.html">Beleza</a></li> 
                <li><a class="dropdown-item" href="../site/conteudos/culinaria.html">Culinaria</a></li>
                <li><a class="dropdown-item" href="../site/conteudos/auxiliarlimpeza.html">Auxiliar de Limpeza</a></li>
              </ul>
            </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#Conta" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Conta
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../site/conteudos/formularios/cadastro.html">  Cadastro</a></li>
                  <li><a class="dropdown-item" href="../site/conteudos/formularios/login.html">Login</a></li>
                  </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../site/conteudos/formularios/carrinho.html" style="font-size: 24px;"><i class="fa fa-cart-plus"></i></a>
              </li>
            </ul>
            <!-- Barra de Pesquisa -->
              <div class="divBusca">
              <input name="Pesquisa" id="Pesquisa" type="search" class="inputBusca" placeholder=" Buscar..." method="post"/>
              <a href="#Pesquisa" target="_top" class="animate-img"><img src="../site/conteudos/imagens/icons/atuais/lupa2-2.png" style="height:25px; width:25px;"/></a>
              </div>
          </div>
        </div>
      </div>
    
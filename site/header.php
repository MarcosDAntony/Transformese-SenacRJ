
<head>
<style>
  *{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}
/*======================================================== Style Header=========================================================*/
  header{
    background: linear-gradient(0deg, rgba(106,255,111,1) 0%, green);
    height: 180px;
  }

  .logo{
    position:relative;
    bottom:15px;
    width: 240px;
    height: 250px;
  }

/**Barra de Pesquisa */
.divBusca{
  border-radius:3px;
  width: 295px;
  height: 32px;
  background-color: white;
  }
  
  .inputBusca{
  border-radius:3px;
  width:260px;
  height: 32px;
  border: transparent;
  }

  .lupa{
    width: 2px;
    height: 2px;
  }
/**===================== */
</style>
</head>
<body>
  <!-- =============================================Header=========================================================================-->
  <header>
    <div class="navbar navbar-expand-md text-black-80">
    <div class="container-fluid">
        <a  href="principal.php" class="animate-img w3-animate-left" target="_self">
          <img src="../site/conteudos/imagens/img-ref/atual/deluxpro-semmaquina-removebg-preview.png" class="logo" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></h5>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav flex-grow-1 pe-3"  style="font-size: 17px;">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../site/conteudos/sobre.php">Sobre</a>
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
              <a href="#Pesquisa" target="_top" class="animate-img"><img src="../site/conteudos/imagens/icons/atual/lupa2-2.png" style="height:25px; width:25px;"/></a>
              </div>

          </div>
        </div>
      </div>
  </header>
</body>
</html>

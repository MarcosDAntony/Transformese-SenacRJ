<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <link rel="shortcut icon" href="../site/imagens/icons/deluxunipro.ico" type="image/x-icon">
    <link rel="stylesheet" href="../site/style_principal.css">
    <!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
  <!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!-- Style Proprio --><link rel="stylesheet" href="../site/style_principal.css">

    <title>Sobre nós</title>
    <style>
        .imgsobre {
            background-image: url("../conteudos/imagens/img-ref/atual/fundo-\ imagem.png");
            background-size:cover;
            background-repeat: no-repeat;
            font-size: 20px;
        }

        p{
            border: 1px transparent;
            width: 400px;
            border-radius: 2%;
            padding: 10px;
            background: linear-gradient(1deg, rgba(106,255,111,1) 0%, green);
        }

    </style>
</head>
<body class="imgsobre">
    <header>
        <div class="navbar navbar-expand-md text-black-70">
    
          <div class="container-fluid">
    
            <a href="../site/principal.php" class="animate-img w3-animate-left" target="_self">
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
                <ul class="navbar-nav flex-grow-1 pe-3"  style="font-size: 17px; ">
    
    
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
                  <a href="#Pesquisa" target="_parent" class="animate-img"><img src="../conteudos/imagens/icons/atual/lupa2-2.png" class="lupa"/></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        </header>

<div>
<!--<fieldset></fieldset> pode ser uma opção-->
<h1>Sobre a Empresa</h1>
</div> 

 <div>
    <br>
        <p>A De Lux produz os mais diversos tipos de jalecos para profissionais que trabalham em<br>
           hospitais, clínicas, consultórios, 
           assim como para estudantes<br> e demais profissionais que vestem jaleco para exercer sua atividade profissional.</p>
    <br>
        <p>Produzimos também para os segmentos de bares, lanchonetes, restaurantes, limpeza<br> e para profissionais que prestam serviços.</p>
    <br>
        <p>Nossos produtos são ideais para profissionais que priorizam conforto e qualidade.</p>
    </div>

</body>
</html>
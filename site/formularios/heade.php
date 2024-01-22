
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- W3schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FavIcon das Páginas -->
    <link rel="shortcut icon" href="../site/conteudos/imagens/icons/atual/logodeluxunipro-remaster.ico" type="image/x-icon">
    <style>
        * {
            font-family: 'sans-serif';
            /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
        }

        /*======================================================== Style Header=========================================================*/
        header {
            background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
            height: 180px;
        }

        .logo {
            position: relative;
            bottom: 15px;
            width: 240px;
            height: 250px;
        }

        /**Barra de Pesquisa */
        .posicao-pesquisa {
            position: relative;
            right: 15px;
        }

        .divBusca {
            border-radius: 3px;
            width: 295px;
            height: 32px;
            background-color: white;
        }

        .inputBusca {
            border-radius: 3px;
            width: 260px;
            height: 32px;
            border: transparent;
        }

        .lupa {
            width: 2px;
            height: 2px;
        }

        /**===================== */
    </style>
</head>
    <!-- =============================================Header=========================================================================-->
    <header>
        <div class="navbar navbar-expand-md text-black-80 container-fluid">
            <a href="../principal.php" class="animate-img w3-animate-left" target="_self">
                <img src="../conteudos/imagens/Img-Ref/Atual/deluxpro-semmaquina-removebg-preview.png" class="logo" alt="logo">
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
                            <a class="nav-link active" aria-current="page" href="../sobre.php">Sobre</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                Produtos
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">Feminino</li>
                                <li class="dropdown-item">Masculino</li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                Conta
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../formularios/cadastro.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="../formularios/login.php">Login</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../formularios/carrinho.php" style="font-size: 24px;"><i class="fa fa-cart-plus"></i></a>
                        </li>
                    </ul>

                    <!-- Barra de Pesquisa -->
                    <div class="divBusca posicao-pesquisa">
                        <input name="Pesquisa" id="Pesquisa" type="search" class="inputBusca" placeholder=" Buscar..." method="post" />
                        <a href="#Pesquisa" target="_top" class="animate-img"><img src="../conteudos/imagens/icons/atual/lupa2-2.png" style="height:25px; width:25px;" /></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Bootstrap JavaScript (não pode remover se não perde a função do menu) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
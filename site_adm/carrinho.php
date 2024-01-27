
<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Documentation -->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- W3schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FavIcon -->
    <link rel="shortcut icon" href="../site/conteudos/imagens/icons/atual/carrinho.ico" type="image/x-icon">

    <title>Envie aqui sua compra :)</title>

    <style>
        * {
            font-family: 'sans-serif';
            /* Tahoma, Geneva, Verdana, sans-serif, Segoe UI */
        }


        .position-carrinho {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }



    .form_carrinho {
      background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);     
      padding: 20px;
      border-radius: 8px;
      width: 450px;
    }
  
    </style>
</head>

<?php include("heade-user.php");?>

<body>
    <div class="container">
        <form class="form_carrinho" action="">
        <h2>Carrinho</h2>
        
        </form>
    </div>
</body>

<?php include("../site/footer.php");?>

</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
  <!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!-- FavIcon das Páginas --><link rel="shortcut icon" href="../site/conteudos/imagens/icons/atual/logodeluxunipro-remaster.ico" type="image/x-icon">
  <style>
    *{
    font-family: 'sans-serif';
    /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
  }

  body {
  background-size: cover;
  background-image: url("../site/conteudos/imagens/Img-Ref/Atual/fundo-sobre_resized.jpg");
}

.caixa-sobre-empresa{
    border: 1px transparent;
    width: 400px;
    border-radius: 2%;
    padding: 10px;
    background: linear-gradient(1deg, rgba(106,255,111,1) 0%, green);
  }
.sobre-empresa-posicao{
    position:relative;
    left: 80px;
    top: 80px;
    font-size:larger;
}


  </style>  
  <title>Sobre nós</title>
</head>
<body>
<?php include_once("../site/header.php");?>
<div class="sobre-empresa-posicao">
<h1>Sobre a Empresa</h1>
      <p class="caixa-sobre-empresa">A De Lux produz os mais diversos tipos de jalecos para profissionais que trabalham em hospitais, clínicas, consultórios, 
           assim como para estudantes e demais profissionais que vestem jaleco para exercer sua atividade profissional.</p>
    <br>
      <p class="caixa-sobre-empresa">Produzimos também para os segmentos de bares, lanchonetes, restaurantes, limpeza<br> e para profissionais que prestam serviços.</p>
    <br>
      <p class="caixa-sobre-empresa">Nossos produtos são ideais para profissionais que priorizam conforto e qualidade.</p>
</div>
<br>
<?php include_once("../site/footer.php");?>
</body>
</html>
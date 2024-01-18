<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"> 
  <style>
    *{
    font-family: 'sans-serif';
    /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
  }

  body {
            position: absolute;
            background-image: url("../conteudos/imagens/img-ref/atual/fundo-sobre.png");
            background-size:cover;
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
    top: 20px;
    font-size:x-large;
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

</body>
</html>
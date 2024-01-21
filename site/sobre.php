<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre a De Lux</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>
    body {
  font-family: 'sans-serif';
  font-size: 22px;
  margin: 0;
  padding: 0;
}

.imagem-de-fundo {
  background-image: url('../site/conteudos/imagens/Img-Ref/Atual/fundo-sobre_ok.png');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height: 100vh;
  display: flex;
  flex-direction: row;
  align-items: center;
  color: black;
}

@media (max-width: 768px) {
  .imagem-de-fundo {
    height: 100%;
  }
}

.conteudo-texto {
  flex: 1;
  text-align: left;
  max-width: 50%;
  margin-left: 20px;
}

.conteudo-texto h2 {
  margin-bottom: 20px;
}

.section-subheading,
.tahoma-50,
.lead {
  font-size: 25px;
}

.caixa-sobre-empresa {
  border: 1px transparent;
  width: 400px;
  border-radius: 2%;
  padding: 10px;
  background: linear-gradient(1deg, rgba(106, 255, 111, 1) 0%, green);
}

.sobre-empresa-posicao {
  position: relative;
  left: 80px;
  top: 80px;
  font-size: larger;
}

  </style>
</head>
<body>
  <?php include_once("../site/heade.php");?>
  <section class="imagem-de-fundo">
    <div class="conteudo-texto">
      <h2 class="section-heading text-uppercase">Sobre a Empresa</h2>
      <br>
      <p class="section-subheading text-muted">"Costure sua elegância com nossos tecidos de qualidade e transforme cada ponto em uma expressão única de estilo e sofisticação."</p>
      <br>
      <p class="section-subheading text-muted">
        A De Lux Uniformes Profissionais fabrica uma ampla variedade de jalecos para profissionais que atuam em hospitais, clínicas, consultórios, bem como para estudantes e outros profissionais que utilizam jalecos em suas atividades. Além disso, também produzimos vestimentas para funcionários de bares, lanchonetes, restaurantes, limpeza e serviços de beleza. Nossos produtos são especialmente projetados para profissionais que valorizam conforto e qualidade.
      </p>
    </div>
  </section>
  <?php include_once("../site/footer.php");?>
</body>
</html>

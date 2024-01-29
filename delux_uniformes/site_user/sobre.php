

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre a DeLux</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>
    * {
      font-family: 'sans-serif';
      line-height: 1.6; /* Espaçamento entre linhas */
    }

    .imagem-sobre {
      background-image: url('../conteudos/imagens/Img-Ref/Atual/fundo-sobre_ok.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      min-height: 100vh; /* Alterado para min-height */
      display: flex;
      flex-direction: row;
      align-items: center;
      color: black;
    }

    .conteudo-texto {
      flex: 1;
      text-align: left;
      max-width: 45%;
      margin-left: 20px;
      font-size: 18px; /* Tamanho da fonte ajustado */
    }

    .section-subheading {
  font-size: 24px; /* Tamanho da fonte ajustado */
  text-align: center; /* Centralizar o texto */
  font-weight: bold; /* Negrito adicionado */
}
    .valores {
      font-size: 20px; /* Tamanho da fonte ajustado */
      margin-top: 20px; /* Espaçamento superior adicionado */
    }

    .empresa{
      font-size: 20px; /* Tamanho da fonte ajustado */
      margin-top: 20px; /* Espaçamento superior adicionado */
      text-align: center; /* Centralizar o texto */
    }
  </style>
</head>
<body>
  <?php include("./includes/heade-user.php"); ?>

  <section class="imagem-sobre">
    <div class="conteudo-texto">
      <br><br>
      <p class="section-subheading text-muted">"<b>Costure sua elegância com nossos tecidos de qualidade e transforme cada ponto em uma expressão única de estilo e sofisticação.</b>"</p>
      <br><br>
      <p class="empresa text-muted">
        A missão da <b>DeLux Uniformes Profissionais</b> é fornecer vestimentas de alta qualidade e conforto, atendendo às necessidades específicas de profissionais da área da saúde, estudantes e outros segmentos que exigem uniformes especializados. Buscamos não apenas fornecer produtos, mas também contribuir para a segurança, identidade e bem-estar dos nossos clientes, através de soluções inovadoras e design personalizado.
      </p>
      <br><br><br>

      <p class="valores text-muted">
        <b>Qualidade:</b> Oferecemos produtos de excelência, utilizando materiais duráveis e técnicas de fabricação avançadas, garantindo a satisfação e confiança dos nossos clientes.
        <br><br>

      <b>Conforto:</b> Priorizamos o conforto em cada peça que produzimos, reconhecendo a importância do bem-estar dos profissionais em seu ambiente de trabalho.
      <br><br>
 
     <b>Inovação:</b> Buscamos constantemente a inovação em design e funcionalidade, mantendo-nos atualizados com as últimas tendências e avanços tecnológicos no setor de uniformes profissionais.
     <br><br>

    <b>Comprometimento com o Cliente:</b> Estamos dedicados a entender e superar as expectativas dos nossos clientes, proporcionando um atendimento personalizado e soluções sob medida para suas necessidades específicas.
     <br><br>

   <b>Identidade Profissional:</b> Reconhecemos a importância da identidade profissional e, portanto, projetamos nossos uniformes para refletir a seriedade, confiança e profissionalismo exigidos em diferentes setores.
   <br><br>

      </p>
    </div>
  </section>
  <?php include("../site/includes/footer.php");?>
</html>

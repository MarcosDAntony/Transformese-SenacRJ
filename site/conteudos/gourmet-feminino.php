
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--FavIcon--> <link rel="shortcut icon" href="../conteudos/imagens/icons/atual/produtos.ico" type="image/x-icon">
  <title>Uniformes Beleza Femininos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #f5f5f5;
    }

    .gourmetfem {
      color: #fff;
      text-align: center;
      padding: 350px;
      background-image: url('../conteudos/imagens/Img-Ref/Atual/gourmet-feminino.png');
      /* Imagem de fundo adicionada */
      background-size: cover;
    
    }

    .principal {
      text-align: center;
      padding: 20px;
    }

    .image-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .image-container>div {
      text-align: center;
      margin: 20px;
      background-color: #fff;
      /* Fundo branco para destacar as imagens e descrições */
      padding: 15px;
      border-radius: 8px;
      /* Cantos arredondados */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      /* Sombra suave */
      transition: transform 0.3s ease;
      /* Efeito de transição suave */
    }

    .image-container>div:hover {
      transform: scale(1.05);
      /* Aumenta ligeiramente ao passar o mouse */
    }

    .image-container img {
      width: 100%;
      height: auto;
      max-width: 200px;
      border-radius: 8px;
      /* Cantos arredondados para as imagens */
    }

    .image-container .description {
      width: 100%;
      margin-top: 10px;
    }

    @media screen and (max-width: 768px) {
      header {
        font-size: 18px;
        /* Reduz a fonte no cabeçalho para dispositivos menores */
      }

      .image-container>div {
        width: 90%;
        /* Utiliza a largura máxima para dispositivos menores */
      }
    }
  </style>



</head>

<body>
<?php include_once("heade-produtos.php");?>
  <header class="gourmetfem"></header>
  <div class="principal">
    <h1>Uniformes Gourmet Femininos</h1>
    <p>
      Aqui você encontra uma variedade de uniformes gourmet femininos para profissionais da culinária, como chefs, confeiteiros e sommeliers.
    </p>
    <p>
      Nossos uniformes são elaborados com tecidos premium e design sofisticado, proporcionando conforto e elegância em sua jornada culinária.
    </p>
  </div>
<body>
  <div class="image-container">
    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-1.png" alt="Product 1">
      <p>Avental sem bolso para cozinha preto -  100 %  Poliéster</p>
      <br>
      <label for="quantity1">Quantidade:</label>
      <input type="number" id="quantity1" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-2.png" alt="Product 2">
      <p> Uniforme chef de cozinha feminino blusa branca com botões e saia azul - 100 %  Poliéster </p>
      <br>
      <label for="quantity2">Quantidade:</label>
      <input type="number" id="quantity2" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-3.png" alt="Product 3">
      <p>Avental sem bolso para cozinha azul turqueza -  100 %  Poliéster </p>
      <br>
      <label for="quantity3">Quantidade:</label>
      <input type="number" id="quantity3" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-4.png" alt="Product 4">
      <p>Uniforme garçonete -conjunto colete preto ,camiseta manga longa branca e calça preta -  100 %  Poliéster</p>
      <br>
      <label for="quantity4">Quantidade:</label>
      <input type="number" id="quantity4" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-5.png" alt="Product 5">
      <p>Touca para Cozinha preta - 100 %  Poliéster  </p>
      <br>
      <label for="quantity5">Quantidade:</label>
      <input type="number" id="quantity5" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-6.png" alt="Product 6">
      <p>Avental branco com botões e bolso único - 100 %  Poliéster</p>
      <br>
      <label for="quantity6">Quantidade:</label>
      <input type="number" id="quantity6" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-7.png" alt="Product 7">
      <p>Uniforme garçonete com gravata - conjunto blusa e saia - 100 %  Poliéster </p>
      <br>
      <label for="quantity7">Quantidade:</label>
      <input type="number" id="quantity7" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-8.png" alt="Product 8">
      <p>Uniforme garçonete - conjunto blusa branca com 1 bolso superior e avental para cintura preto - 100 %  Poliéster </p>
      <br>
      <label for="quantity8">Quantidade:</label>
      <input type="number" id="quantity8" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-9.png" alt="Product 9">
      <p>Uniforme chef de cozinha - conjunto blusa branca com botões e saia preta - 100 %  Poliéster</p>
      <br>
      <label for="quantity9">Quantidade:</label>
      <input type="number" id="quantity9" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-10.png" alt="Product 10">
      <p>Avental Branco com bolso em cima e na parte de baixo - 100 %  Poliéster </p>
      <br>
      <label for="quantity10">Quantidade:</label>
      <input type="number" id="quantity10" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-11.png" alt="Product 11">
      <p>Avental Branco com bolso e laço - 100 %  Poliéster</p>
      <br>
      <label for="quantity11">Quantidade:</label>
      <input type="number" id="quantity11" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>

    <div>
      <img src="../conteudos/imagens/Img-Produtos/Img-Feminino/feminino-gourmet-12.png" alt="Product 12">
      <p>Avental Personalizado Verde Oliva com bolso - - 100 %  Poliéster</p>
      <br>
      <label for="quantity12">Quantidade:</label>
      <input type="number" id="quantity12" class="quantity-input" value="1" min="1">
      <button class="add-to-cart">🛒➕</button>
      <span class="cart-counter"> </span>
    </div>
  </div>
</body>
<?php include_once("footer-formas-pagamento.php");?>

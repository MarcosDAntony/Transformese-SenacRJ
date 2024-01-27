
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

    .limpezamasc {
      color: #fff;
      text-align: center;
      padding: 350px;
      background-image: url('../conteudos/imagens/Img-Ref/Atual/limpeza-masculina.png');
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
<?php include("heade-produtos.php");?>
  <header class="limpezamasc"></header>
  <div class="principal">
    <h1>Uniformes de Limpeza Masculina</h1>
    <p>Explore nossa linha de uniformes de limpeza masculina, projetados para profissionais dedicados à higiene e manutenção de ambientes com estilo e conforto.</p>
    <p>Nossos uniformes combinam praticidade e elegância, proporcionando um visual profissional enquanto realiza suas tarefas de limpeza com eficiência.</p>
  <div class="image-container">
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-1.png" alt="Product 1">
          <p> Camisa azul com bolso superior gola V - 100% Algodão </p>
          <br>
          <label for="quantity1">Quantidade:</label>
          <input type="number" id="quantity1" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-2.png" alt="Product 2">
          <p> Kit Macação Azul 3 bolsos 1 superior e 2 dois na cintura = camisa branca - 100% Algodão   </p>
          <br>
          <label for="quantity2">Quantidade:</label>
          <input type="number" id="quantity2" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-3.png" alt="Product 3">
          <p> Macação Azul 3 bolsos 1 superior e 2 dois na cintura com alças reforçadas - 100% Algodão  </p>
          <br>
          <label for="quantity3">Quantidade:</label>
          <input type="number" id="quantity3" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-4.png" alt="Product 4">
          <p> Calça Brim Pesado Reforçada para trabalho pesado 2 bolsos na cintura cinza - 100%  Algodão</p>
          <br>
          <label for="quantity4">Quantidade:</label>
          <input type="number" id="quantity4" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-5.png" alt="Product 5">
          <p> Uniforme Cinza Profissional Calça + Camisa Brim com Manga Curta cinza - 100% Algodão </p>
          <br>
          <label for="quantity5">Quantidade:</label>
          <input type="number" id="quantity5" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-6.png" alt="Product 6">
          <p> Calça Oxford 2 bolsos na cintura cinza - 100% Algodão</p>
          <br>
          <label for="quantity6">Quantidade:</label>
          <input type="number" id="quantity6" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-7.png" alt="Product 7">
          <p> Camisa Brim com Manga Curta bolso superior azul escuro - 100% Algodão</p>
          <br>
          <label for="quantity7">Quantidade:</label>
          <input type="number" id="quantity7" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-8.png" alt="Product 8">
          <p>  Macacão Reforçado de Brim Pesado com Faixa Refletivo com Manga Longa - 4 bolsos dois superiores e 2 na cintura cinza - 100% Algodão</p>
          <br>
          <label for="quantity8">Quantidade:</label>
          <input type="number" id="quantity8" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
    
        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-9.png" alt="Product 9">
          <p> Jaleco brim profissional 3/4 com Manga Curta - 3 bolsos 1 superior e 2 na cintura cinza - 100% Algodão</p>
          <br>
          <label for="quantity9">Quantidade:</label>
          <input type="number" id="quantity9" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>

        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-10.png" alt="Product 10">
          <p> Camisa  cinzamanga longa para Pedreiro em malha fria - 65% poliéster 35% viscose</p>
          <br>
          <label for="quantity10">Quantidade:</label>
          <input type="number" id="quantity10" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>

        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-11.png" alt="Product 11">
          <p> Calça preta Oxford Para Trabalho Leve Uniforme Pedreiro Mecânico Obra</p>
          <br>
          <label for="quantity11">Quantidade:</label>
          <input type="number" id="quantity11" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>

        <div>
          <img src="../conteudos/imagens/Img-Produtos/Img-Masculino/masculino-limpeza-12.png" alt="Product 12">
          <p> Calça preta Reforçada Brim pesado com faixa reflexiva Para Trabalho Leve Uniforme Pedreiro Mecânico Obra</p>
          <br>
          <label for="quantity11">Quantidade:</label>
          <input type="number" id="quantity12" class="quantity-input" value="1" min="1">
          <button class="add-to-cart">🛒➕</button>
          <span class="cart-counter"> </span>
        </div>
        </div>
</body>
<?php include("footer-formas-pagamento.php");?>



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
  <?php

include '../config/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['search'])) {
    $searchTerm = filter_input(INPUT_GET, 'search');
    $sqlProdutos = "SELECT * FROM produtos WHERE tipo = 'limpeza-masculino' AND descricao LIKE '%$searchTerm%'";
} else {
    $sqlProdutos = "SELECT * FROM produtos WHERE tipo = 'limpeza-masculino'";
}
$resultProdutos = $conn->query($sqlProdutos);

while ($rowProduto = $resultProdutos->fetch_assoc()) {

    echo '<div>';
    echo '<img src="./imagens/Img-Produtos/Img-Feminino/' . $rowProduto['imagem'] . '" alt="' . $rowProduto['descricao'] . '">';
    echo '<p>' . $rowProduto['descricao'] . '</p>';
    echo '<br>';
    echo '<form method="post" action="../carrinho.php">';
    echo '<input type="number" class="form-control" name="quantidade" min="1" placeholder="Qtd:" style="width:80px;">';
    echo '<input type="hidden" name="product_id" value="' . $rowProduto['id_produto'] . '">';
    echo '<input type="hidden" name="descricao" value="' . $rowProduto['descricao'] . '">';
    echo '<br>';
    echo '<br>';
    echo '<button type="submit" class="add-to-cart" style="text-decoration: none;">';
    echo '<img src="./imagens/icons/atual/carrinho.png" style="height:25px; width:25px;" alt="adicionar_carrinho">+';
    echo '</button>';
    echo '</form>';
    echo '</div>';

}

?>
        </div>
</body>
<?php include("footer-formas-pagamento.php");?>


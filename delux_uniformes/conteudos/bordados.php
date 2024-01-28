<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <lin../conteudos/imagens/Img-Produtos/img-Feminino/feminino-bordado-1.jpg rel="shortcut icon" href="../conteudos/imagens/icons/atual/produtos.ico" type="image/x-icon">
  <title>Bordados de Uniformes Profissionais</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #f5f5f5;
    }

    .bordados {
      color: #fff;
      text-align: center;
      padding: 350px;
      background-image: url('../conteudos/imagens/Img-Ref/Atual/fundo-bordados.jpg');
      background-size: cover;
    }

    .main-content {
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
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .image-container>div:hover {
      transform: scale(1.05);
    }

    .image-container img {
      width: 100%;
      height: auto;
      max-width: 200px;
      border-radius: 8px;
    }

    .image-container .description {
      width: 100%;
      margin-top: 10px;
    }

    @media screen and (max-width: 768px) {
      header {
        font-size: 18px;
      }

      .image-container>div {
        width: 90%;
      }
    }
  </style></style>
</head>

<body>
  <?php include_once("heade-produtos.php"); ?>
  <header class="bordados"></header>
  <div class="main-content">
    <h1>Bordados em Uniformes Profissionais</h1>
    <p>
      Personalize seus uniformes profissionais com bordados exclusivos. Oferecemos uma variedade de opções para atender às suas necessidades.
    </p>
    <p>
      Garanta uma imagem profissional e única para sua equipe. Nossos bordados são feitos com qualidade e estilo.
    </p>
  </div>

<!-- Restante dos produtos... -->

  <div class="image-container">
  <?php 

include '../site/config/connect.php';

$sqlProdutos = "SELECT * FROM produtos WHERE tipo = 'bordados'";
$resultProdutos = $conn->query($sqlProdutos);

// Exibir os produtos dinamicamente
while ($rowProduto = $resultProdutos->fetch_assoc()) {
    echo '<div>';
    echo '<img src="./imagens/Img-Produtos/Img-Feminino/' . $rowProduto['imagem'] . '" alt="' . $rowProduto['descricao'] . '">';
    echo '<p>' . $rowProduto['descricao'] . '</p>';
    echo '<br>';
    echo '<input type="number" class="form-control" id="quantity" name="quantity" min="1" placeholder="Qtd:" style="width:80px;">';
    echo '<br>';
    echo '<br>';
    echo '<a class="add-to-cart" style="text-decoration: none;" href="../login.php">';
    echo '<img src="./imagens/icons/atual/carrinho.png" style="height:25px; width:25px;" alt="adicionar_carrinho">+';
    echo '</a>';
    echo '</div>';
}

?>
  </div>
</body>
<?php include_once("footer-formas-pagamento.php");?>
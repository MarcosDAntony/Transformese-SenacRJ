<?php
session_start();

// Adicionando produto ao carrinho
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = [
        'id' => $_POST['product_id'],
        'descricao' => $_POST['descricao'],
        'quantidade' => $_POST['quantidade'],
    ];

    // Inicializa o carrinho se não existir
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Adiciona o produto ao carrinho
    $_SESSION['carrinho'][] = $produto;
}

// Remover produto do carrinho
if (isset($_GET['action']) && $_GET['action'] == 'remover_item' && isset($_GET['item_key'])) {
    $item_key = $_GET['item_key'];

    // Verifica se o índice do item existe no carrinho
    if (isset($_SESSION['carrinho'][$item_key])) {
        // Remove o item do carrinho
        unset($_SESSION['carrinho'][$item_key]);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

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
    <link rel="shortcut icon" href="./conteudos/imagens/icons/atual/carrinho.ico" type="image/x-icon">

    <title>Envie aqui sua compra</title>

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

        .mb-3 {
            margin-bottom: 15px;
        }

        .btn-success {
            margin-top: 15px;
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
<body>
     <!-- =============================================Header=========================================================================-->
     <header>
        <div class="navbar navbar-expand-md text-black-80 container-fluid">
            <a href="principal-user.php" class="animate-img w3-animate-left" target="_self">
                <img src="../conteudos/imagens/img-ref/atual/deluxpro-semmaquina-removebg-preview.png" class="logo" alt="logo">
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
                            <a class="nav-link active" aria-current="page" href="./sobre.php">Sobre</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                Produtos
                            </a>
                            <?php

                            include './config/connect.php';

                            $sql = "SELECT DISTINCT tipo FROM produtos";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo '<ul class="dropdown-menu">';
                                
                                while ($row = $result->fetch_assoc()) {
                                    $tipo = $row['tipo'];
                                    $link = strtolower(str_replace(' ', '-', $tipo)) . '.php';
                                    
                                    echo '<li><a href="./conteudos/' . $link . '" class="dropdown-item">' . $tipo . '</a></li>';
                                }
                                echo '</ul>';
                            } else {
                                echo "Sem tipos de produto no momento.";
                            }


                            $conn->close();
                            ?>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./area-usuario.php">
                              <img src="./conteudos/imagens/icons/atual/conta.png" style="height:20px; width:20px;" alt="home" >
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./carrinho.php">
                            <img src="./conteudos/imagens/icons/atual/carrinho.png" style="height:20px; width:20px;" alt="carrinho">
                          </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>
    
<div class="position-carrinho">

        <?php if (!empty($_SESSION['carrinho'])) : ?>
            <form class="form_carrinho" method="post">
            <h1>Carrinho de Compras</h1>
                <?php foreach ($_SESSION['carrinho'] as $key => $produto) : ?>
                    <div class="mb-3">
                        <label for="produto" class="form-label">Nome do Produto:</label>
                        <input type="text" class="form-control" id="produto" name="descricao[]" value="<?= $produto['descricao'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" id="quantidade" name="quantidade[]" value="<?= $produto['quantidade'] ?>" readonly>
                    </div>
                    <a href="?action=remover_item&item_key=<?= $key ?>" class="btn btn-danger">Remover</a>
                <?php endforeach; ?>

                <a href="?action=fazer_pedido" class="btn btn-">Envie Pedido</a>
            </form>
        <?php else : ?>
            <p>O carrinho está vazio.</p>
        <?php endif; ?>
    </div>
    <?php

    // Redirecionar para o WhatsApp se o carrinho não estiver vazio
    if (isset($_GET['action']) && $_GET['action'] == 'fazer_pedido' && !empty($_SESSION['carrinho'])) {
        $mensagem = "Olá! Gostaria de fazer um pedido. Itens no carrinho:";

        foreach ($_SESSION['carrinho'] as $produto) {
            $mensagem .= "\n{$produto['quantidade']} x {$produto['descricao']}";
        }

        // Verificar se o telefone está disponível na sessão
        $numero_whatsapp = isset($_SESSION['telefone']) ? $_SESSION['telefone'] : '5521966381670'; // esse ultimo é o seu numero

        // Montar a URL do WhatsApp com a mensagem
        $url_whatsapp = "https://wa.me/{+5521968603959}?text=" . urlencode($mensagem);

        // Redirecionar para o WhatsApp
        header("Location: {$url_whatsapp}");
        exit;
    }
?>


    <?php include("./includes/footer.php");?>
</body>


<!-- Bootstrap JavaScript (não pode remover se não perde a função do menu) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>

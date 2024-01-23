<?php require_once("../banco-de-dados/config.php");  //Inclui Banco de Dados?>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
  <!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!--FavIcon--> <link rel="shortcut icon" href="../imagens/icons/atual/cadastro.ico" type="image/x-icon">
    <style>
*{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}
  
.position-cadastro {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
      width: 400px; /* Adjusted maximum width */
    }

    .container {
      background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    </style>
    <title>Cadastre-se</title>
  </head>
  <?php include_once("../formularios/heade.php");?>
  <body>
    <div class="position-cadastro">
    <div class="container">
        <h2>Cadastro</h2>
        <form class="row g-3" action="../banco-de-dados/config.php" method="post" enctype="multipart/form-data">

          <div class="col-md-6">
            <label for="Nome" class="form-label">Nome: </label>
            <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome Completo">
          </div>

          <div class="col-md-6">
            <label for="Email" class="form-label">Email:</label>
            <input type="Email" class="form-control" id="Email" name="Email" placeholder="Email">
          </div>

          <div class="col-md-6">
            <label for="Senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="Senha" name="Senha" placeholder="Senha">
          </div>

          <div class="col-md-6">
            <label for="Tipo-Cadastro" class="form-label">Tipo de Cadastro:</label>
            <select id="Tipo-Cadastro" class="Tipo-Cadastro" name="Tipo-Cadastro">
              <option selected>...</option>
              <option value="Usuario">Usuario</option>
              <option value="Administrador">Administrador</option>
              <option value="Gerente">Gerente</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="UF" class="form-label">UF</label>
            <select id="UF" class="UF" name="UF">
              <option selected>...</option>
              <option>RJ</option>
            </select>
          </div>

          <div class="col-12">
            <label for="Endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="Endereco" name="Endereco" placeholder="Cidade, bairro, complemento...">
          </div>

         
          <div class="col-md-2">
            <label for="CEP" class="form-label">CEP:</label>
            <input type="number" class="form-control" id="CEP" name="CEP" placeholder="00000-000" style="width:100px;">
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Lembrar sempre
              </label>
            </div>
          </div>
          <div class="col-6">
            <button type="submit" class="btn btn-">Enviar</button>
          </div>
          </div>
        </form>
</div>
</body>
<?php include_once("../formularios/footer.php");?>
</html>

   
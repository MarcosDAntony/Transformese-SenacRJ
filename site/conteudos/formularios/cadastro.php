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
  
  body {
  display: flex;
  justify-content: center;
  align-items: center;
  }
  
  .container {
    background: linear-gradient(0deg, rgba(106,255,111,1) 0%, green);
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    width: 450px;
    overflow: hidden;
  }

  
    </style>
    <title>Cadastre-se</title>
  </head>
  <body>
    <div class="container fluid">
        <h2>Cadastro</h2>
        <form class="row g-3">

          <div class="col-md-6">
            <label for="nome" class="form-label">Nome: </label>
            <input type="email" class="form-control" id="nome" placeholder="Nome Completo">
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email">
          </div>

          <div class="col-md-6">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha">
          </div>

          <div class="col-md-4">
            <label for="uf" class="form-label">UF</label>
            <select id="uf" class="uf">
              <option selected>...</option>
              <option>RJ</option>
            </select>
          </div>

          <div class="col-12">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="endereco" placeholder="Cidade, Número, e Complemento">
          </div>

         
          <div class="col-md-2">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" placeholder="00000-000" style="width:100px;">
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Lembrar sempre
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-">Enviar</button>
          </div>
        </form>
    </div>
</div>

</body>
</html>

   
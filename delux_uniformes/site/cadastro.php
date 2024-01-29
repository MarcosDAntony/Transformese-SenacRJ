
<head>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- api de cep -->

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
  <!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <!--FavIcon--> <link rel="shortcut icon" href="../site/conteudos/imagens/icons/atual/conta.ico" type="image/x-icon">
    <style>
*{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}


.position-cadastro {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }



    form {
      background: linear-gradient(0deg, rgba(106, 255, 111, 1) 0%, green);
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);     
      padding: 20px;
      border-radius: 8px;
      width: 500px;
    }
  
    .imgcadastro {
  background-image: url(../conteudos/imagens/Img-Ref/Atual/fundo-forms.jpg);
  background-size: cover;
  background-position: center; /* Adiciona esta linha para posicionar no centro */
  background-attachment: fixed; /* Adiciona esta linha se quiser que a imagem seja fixa durante o scroll */
  width: 100%;
  height: 115%;
}

    </style>
    <title>Cadastre-se</title>
  </head>
  <?php include("./includes/heade.php");?>
  <body class="imgcadastro">
    <div class="position-cadastro">

        <form class="row g-3" action="./config/envio_cadastro.php" method="post" enctype="multipart/form-data">
        <h2 style="text-align: center;">Cadastro</h2>

          <div class="col-md-6">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>

          <div class="col-md-6">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
          </div>

          <div class="col-md-6">
            <label for="telefone" class="form-label">Número de Celular:</label>
            <input class="form-control" id="telefone" name="telefone" placeholder="+55 (21)00000-0000" required>
          </div>

          <div class="col-md-6">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" style="width:100px;" required>
          </div>

          <div class="col-md-6">
            <label for="rua" class="form-label">RUA:</label>
            <input class="form-control" id="street" name="rua" style="width:100px;" required>
          </div>

          <div class="col-md-6">
            <label for="numero" class="form-label">NÚMERO:</label>
            <input class="form-control" id="numero" name="numero" style="width:100px;" required>
          </div>

          <div class="col-md-6">
            <label for="bairro" class="form-label">BAIRRO:</label>
            <input class="form-control" id="neighborhood" name="bairro" style="width:100px;" required>
          </div>

          <div class="col-md-6">
            <label for="cidade" class="form-label">CIDADE:</label>
            <input class="form-control" id="city" name="cidade" style="width:100px;" required>
          </div>

          <div class="col-md-6">
            <label for="uf" class="form-label">UF</label>
            <input type="text" class="form-control" name="uf" id="state" placeholder="UF do estado. Ex: RJ"  style="width:100px;">
          </div>


          <div class="col-12">
            <button type="submit" class="btn btn-">
                Enviar
            </button>
          </div>
       </form>


       <script>

        window.onload = () => {
            const cepInput = document.getElementById('cep');
            cepInput.addEventListener('keyup', async (event) => {
                var cep = cepInput.value.replace(/([.-])/g, '');


                if(cep.length == 8) {

                    const data = await findCEP(cep);

                    if(data.erro){
                        cepInput.style.border = '1px solid #a53c3c';
                    } else {
                        cepInput.style.border = '1px solid #ccc';
                        document.getElementById('neighborhood').value = data.bairro || '...';
                        document.getElementById('street').value = data.logradouro || '...';
                        document.getElementById('city').value = data.localidade || '...';
                        document.getElementById('state').value = data.uf || '...';
                    }
                } else {
                    cepInput.style.border = '1px solid #ccc';
                    document.getElementById('neighborhood').value = '';
                    document.getElementById('street').value = '';
                    document.getElementById('city').value = '';
                    document.getElementById('state').value = '';
                }

                if(cep.length > 8) {
                    cepInput.style.border = '1px solid #a53c3c';
                }

            });

        }

        async function findCEP(cep) {
            
            const response = await axios.get(`https://viacep.com.br/ws/${cep}/json/`);
            const data = response.data;

            return data;
        }

    </script>
  </div>
</body>
<?php include("./includes/footer.php");?>
</html>

   
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro de Usuários</title>
    <link rel="shortcut icon" href="img/art_logo.svg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

     <!-- Inclui o link para a fonte Roboto da Google Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <!-- Inclui estilos personalizados -->
    <link rel="stylesheet" href="style.css">
</head>



<body>
    <!-- Inclui o cabecalho dinamicamente -->
   <?php include_once("header.php"); ?>
    
    <!-- <div class="container p-1 mt-1 bg-primary rounded text-white text-center"> -->
    <!-- <div  class="container pt-1 mt-2 bg-white border shadow-sm"> -->
    <div  class="container pt-1 mt-2 text-muted">
        <h4>Cadastro de Usuários</h4>
    </div>
    <div class="container pt-1 shadow-sm bg-white">
        <div class="row mt-2">
            <div class="col-md-6">
                
                <form action="Usuario_bd.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="data_cadastro" class="form-label">Data Cadastro:</label>
                        <input type="date" class="form-control" id="data_cadastro" name="data_cadastro" placeholder="YYYY-MM-DD" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="situacao" name="situacao" value="1" checked>
                        <label class="form-check-label" for="situacao">Ativo</label>
                    </div>
                    <div class="mb-3">
                        <label for="funcao" class="form-label">Função:</label>
                        <select class="form-select" id="funcao" name="funcao" required>
                            <option value="1">Usuário</option>
                            <option value="2">Gerente</option>
                            <option value="3">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto (upload da imagem):</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*" >
                    </div>
                    <div class="mb-3 col-3">
                        <label for="foto_preview" class="form-label">Preview da Foto:</label>
                        <img src="img/userpadrao.png" alt="Preview da Foto" id="foto_preview" class="img-fluid w-251 h-251 border">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 ">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-secondary" >Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, necessário apenas para funcionalidades avançadas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Exemplo de script para visualizar a foto antes de enviar o formulário
        document.getElementById('foto').addEventListener('change', function () {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('foto_preview').src = e.target.result;
            }
            reader.readAsDataURL(this.files[0]);
        });
    </script>

    <!-- Inclui o rodapé dinamicamente -->
    <?php include_once('footer.php'); ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro_usuario.css">
</head>
<body>
<header>

	<a href="">SNRC</a>
	<nav>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="login.php" >Login</a></li>
    <li><a href="cadastro_usuario.php">Cadastro</a></li>
    <li><a href="sobre.php">Sobre</a></li></li>
	</nav>
</header>

<div class="formulário">
	
	<h2>Usuário</h2>
    
    <form action="../controller/cadastrar.php" method="POST">

        <div class="meio">
          <input type="text" name="nome" required="">
          <label>Nome</label>
        </div>

       <div class="meio">
          <input type="email" name="email" required="">
          <label>Email</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="endereco" required="">
       <label>Endereço</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="cidade" required="">
       <label>Cidade</label>
       </div>    
       
       <div class="meio">
       <input type="text" name="estado" required="">
       <label>Estado</label>
       </div>    
       
       <div class="meio">
       <input type="password" name="senha" required="" id="senha" oninput="noway()">
       <label>Senha</label>
       </div>   

  
        <input type="submit" name="" value="entrar">
     </form>
       
</div>
      <script>

      function get(id){
        return document.getElementById(id);
      }

      function noway(){
        let senha = get('senha').value.length;
        let submit = get('submit');
        let getsenha = senha;

      
      if (getsenha < 6 || getsenha.value ==""){
        submit.disabled = true;
        submit.style.cursor = "not-allowed";
      
      }else{
        submit.disabled = false;
        submit.style.cursor = "pointer";
      } 
      
     }
   </script>

</body>
</html>

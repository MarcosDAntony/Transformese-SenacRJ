<!DOCTYPE html>
<html lang="pt-br"
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro_usuario.css">
	body {
  font-family: sans-serif;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: green;
  color: white;
  padding: 10px;
}

header a {
  color: white;
  text-decoration: none;
  padding: 5px;
}

header a:hover {
  background-color: #3366CC;
}

nav li {
  display: inline-block;
  margin-right: 10px;
}

.formulário {
  margin: 0 auto;
  width: 400px;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 5px;
}

.formulário h2 {
  text-align: center;
  margin-bottom: 20px;
}

.meio {
  margin-bottom: 15px;
}

.meio label {
  display: block;
  margin-bottom: 5px;
}

.meio input {
  width: 100%;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

.meio input[type="submit"] {
  background-color: #4285F4;
  color: white;
  border: none;
  cursor: pointer;
  padding: 10px;
}

.meio input[type="submit"]:disabled {
  background-color: #ddd;
  cursor: not-allowed;
}
</head>
<body>
<header>

  <a href=""> De Lux Uniformes</a>
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

  
        <input type="submit" name="" value="Entrar">
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
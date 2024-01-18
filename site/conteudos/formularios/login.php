
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap-->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- Funções Bootstrap --> <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
<!-- W3schools--> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Funções W3Schools --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<title>Faça seu Login</title>

<style>
 *{
  font-family: 'sans-serif';
  /*, Tahoma, Geneva, Verdana, sans-serif, Segoe UI*/
}
  
  body {
  background: linear-gradient(0deg, rgba(106,255,111,1) 0%, green);
  display: flex;
  justify-content: center;
  align-items: center;
  }
  
  .container {
    background-color:  linear-gradient(0deg, rgba(106,255,111,1) 0%, green);;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    width: 450px;
    overflow: hidden;
  }
</style>
</head>
<body>
  <?=include("../site/header.php");?>
  <div class="container fluid">
    <h2>Login</h2>
    <form class="row g-3">

      <div class="col-md-6">
        <label for="email" class="form-label">Email:  </label>
        <input type="email" class="form-control" id="email" placeholder="E-mail">
      <br>
        <label for="senha" class="form-label">Senha:  </label>
        <input type="password" class="form-control" id="senha" placeholder="Senha">
      </div>
    </div>
</body>
</html>

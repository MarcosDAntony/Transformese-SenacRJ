<!DOCTYPE html>
<?php
	session_start();

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Login</h1>
	<form action="verify.php" method="POST">
		<input type="text" name="nome" placeholder="Nome">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" name="">
	</form>
</body>
</html>

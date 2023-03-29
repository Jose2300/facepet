<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="inicio.css">
	<title>Cadastro de Usuário</title>
</head>
<body>
	<h1>Cadastro de Usuário</h1>
	<form action="cadastro.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" required><br>

		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" required><br>

		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" required><br>

		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>

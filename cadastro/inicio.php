<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="inicio.css">
	<title>Cadastro de Usuário</title>
</head>

<body>
<div id="passo1">
</div>
<form action="cadastro.php" method="post" id="form">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required><br>

    <input type="submit" value="Cadastrar" onclick="mudarDisplay()"> 
	<input type="submit" value="Entrar" onclick=""> 
	
</form>
 
<script src="inicio.js"></script>


<div id="passo2">
	 <button> Criar Perfil</button>
</div>
</body>
</html>

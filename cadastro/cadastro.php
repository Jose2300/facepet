<?php
// Conexão com o banco de dados
$servidor = "localhost";
$banco = "chat";
$usuario = "root1";
$senha = "123";


$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica se houve um POST do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	// Insere os dados no banco de dados
	$sql = "INSERT INTO cadastro  (email, senha) VALUES ('$email', '$senha')";
	if (mysqli_query($conn, $sql)) {
		echo "Cadastro realizado com sucesso!";
	} else {
		echo "Erro ao cadastrar o usuário: " . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

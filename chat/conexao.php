<?php  

$hostname = "localhost";
$bancodedados = "chat";
$usuario = "root1";
$senha = "123";

$id= 1;
$id1= 13;
$mensagem = $_POST["mensagem"];
$conn = new mysqli($hostname, $usuario, $senha, $bancodedados);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// inserindo mensagem usuario 1 no ID:1
$sql = "INSERT INTO usuario (mensagem)
VALUE ('$mensagem') WHERE id = $id";

// a mensagem vai para resposta do usario 2 ID:13
$sql1 = "INSERT INTO usuario SET resposta = '$mensagem' WHERE id = $id1";
if ($conn->query($sql1) === TRUE) {

  echo "Resposta enviada:";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
  
}

if ($conn->query($sql) === TRUE) {

  echo "Mensagem enviada:";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}


$resposta = "SELECT resposta FROM usuario WHERE id = $id";
$result = mysqli_query($conn, $resposta);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $mensagem = $row["mensagem"];
  echo '<input type="text" value="' . $mensagem . '">';
} else {
  echo "Nenhum registro encontrado.";
};

$conn->close();
 
<?php  

$hostname = "localhost";
$bancodedados = "chat";
$usuario = "root1";
$senha = "123";

$id= 13;
$id1= 1;
$mensagem = $_POST["mensagem"];
$conn = new mysqli($hostname, $usuario, $senha, $bancodedados);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// inserindo mensagem usuario 2 no ID:13
$sql = "INSERT INTO usuario (mensagem)
VALUE ('$mensagem') WHERE id = $id";

// a mensagem vai para resposta do usario 1 ID:1
$sql1 = "INSERT INTO usuario SET resposta = '$mensagem' WHERE id = $id1";;
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
 
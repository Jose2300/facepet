<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="inicio.css">
    <title>Enviar Imagem para API</title>
  </head>
  <body>
    <h1>Imagem de Perfil </h1>
    <form>
    <img  type="file" id= "" src="https://via.placeholder.com/150" alt="Imagem do Card">
      <button type="button" onclick="uploadImage()">Enviar Imagem</button>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required><br>

      </form>
    <script src="perfil.js"></script>
  </body>
</html>
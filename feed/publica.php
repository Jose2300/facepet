<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enviar Imagem para API</title>
  </head>
  <body>
    <h1>Enviar Imagem para API</h1>
    <form>
      <input type="file" id="fileInput">
      <button type="button" onclick="uploadImage()">Enviar Imagem</button>
    </form>
    <script>
      function uploadImage() {
        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0];
        const formData = new FormData();
        formData.append('file', file);
        fetch('https://sua-api.com/upload', {
          method: 'POST',
          body: formData
        })
        .then(response => {
          if (!response.ok) {
            throw new Error('Não foi possível enviar a imagem.');
          }
          return response.json();
        })
        .then(data => {
          console.log(data);
          alert('Imagem enviada com sucesso!');
        })
        .catch(error => {
          console.error(error);
          alert('Não foi possível enviar a imagem.');
        });
      }
    </script>
  </body>
</html>

function carregarPerfil() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("passo1").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "http://localhost/chat/cadastro/perfil.php", true);
    xhttp.send();}
// Sua chave de API do Imgur
const client_id = "1f474406443e3f4";

// URL do endpoint de upload de imagem
const url = "https://api.imgur.com/3/image";

// Arquivo de imagem que deseja fazer upload
const imagem = document.getElementById("imagem").files[0];

// Cria um objeto FormData para enviar a imagem
const formData = new FormData();
formData.append("image", imagem);

// Envia a solicitação de upload para a API do Imgur
axios.post(url, formData, {
  headers: {
    Authorization: `Client-ID ${client_id}`,
    "content-type": "multipart/form-data",
  },
})
  .then((resposta) => {
    const link_imagem = resposta.data.data.link;
    console.log("A imagem foi enviada com sucesso: ", link_imagem);
  })
  .catch((erro) => {
    console.log("O upload da imagem falhou: ", erro.response.data.data.error);
  });

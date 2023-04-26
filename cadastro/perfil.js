function uploadImage() {
    const fileInput = document.getElementById('imagem');
    const nomeInput = document.getElementById('nome');
    const url = 'https://example.com/api/upload'; // Replace with your API endpoint
    
    if (fileInput.files.length > 0) {
      const file = fileInput.files[0];
      const formData = new FormData();
      formData.append('image', file);
      formData.append('nome', nomeInput.value);
      
      fetch(url, {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (response.ok) {
          alert('Imagem enviada com sucesso!');
        } else {
          alert('Erro ao enviar imagem');
        }
      })
      .catch(error => {
        alert('Erro ao enviar imagem: ' + error.message);
      });
    } else {
      alert('Selecione uma imagem para enviar');
    }
  }
  
  
  
  
  
  
  
  
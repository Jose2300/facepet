function carregar() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("passo1").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "http://localhost/chat/cadastro/perfil.php", true);
    xhttp.send();

 }

  function mudarDisplay(){
    const form = document.getElementById('form');
    
    if (form.style.display === "none") {
      form.style.display = "block";
    } else{
      form.style.display = "none";
    }
    
  
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // previne o comportamento padrão de submit

        const formData = new FormData(form);

        fetch('cadastro.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // atualiza o conteúdo da página com a resposta recebida
            document.getElementById("passo1").innerHTML = data;
        })
        .catch(error => {
            console.error(error);
        });
    });

  }
  
  
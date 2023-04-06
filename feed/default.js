function carregarChat() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("resultado").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "http://localhost/chat/chat/chat1.php", true);
    xhttp.send();}
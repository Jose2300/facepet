$(document).ready(function() {
    $('#meuFormulario').submit(function(event) {
      // Impede que o formulário seja enviado via método padrão
      event.preventDefault();
  
      // Obtém os dados do formulário
      var formData = $(this).serialize();
  
      // Envia os dados via AJAX para o arquivo PHP
      $.ajax({
        url: 'conexao.php',
        type: 'post',
        data: formData,
        success: function(response) {
          // Exibe a resposta do PHP na mesma página
          $('#resultado').html(response);
        }
      });
    });
  });
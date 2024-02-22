<?php

class PopupHTML {
    public static function gerarPopup() {
        // HTML do popup
        $popup_html = '
        <!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Popup HTML</title>
<style>
/* Estilos para o popup */
.popup {
  display: none; /* Inicialmente oculto */
  position: fixed; /* Para manter o posicionamento mesmo quando a página é rolada */
  top: 50%; /* Centraliza verticalmente */
  left: 50%; /* Centraliza horizontalmente */
  transform: translate(-50%, -50%); /* Centraliza completamente */
  background-color: #ffffff;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 0 20px rgba(0,0,0,0.2); /* Sombra suave */
  z-index: 9999; /* Garante que o popup esteja acima do conteúdo */
  max-width: 80%; /* Largura máxima */
  text-align: center; /* Texto centralizado */
}

.overlay {
  /* Overlay para cobrir o conteúdo por trás do popup */
  display: none; /* Inicialmente oculto */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5); /* Cor escura semitransparente */
  z-index: 9998; /* Abaixo do popup, mas acima do conteúdo */
}
</style>
</head>
<body onload="openPopup()">

<div id="popup" class="popup">
  <h2>Problemas na conexão</h2>
  <p>Tente novamente em alguns instantes</p>
</div>

<div id="overlay" class="overlay"></div>

<script>
function openPopup() {
  document.getElementById("popup").style.display = "block"; /* Exibe o popup */
  document.getElementById("overlay").style.display = "block"; /* Exibe o overlay */
}
</script>

</body>
</html>

        
        

        ';
        
        return $popup_html;
    }
}

?>

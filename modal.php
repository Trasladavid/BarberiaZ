<!DOCTYPE html>
<html>
<head>
  <title>Vanilla JS Modal Example</title>
  <style>

  .modal {
  display: none;
  position: fixed;
  top: 5em;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  overflow: scroll;
}

.modal-content {
  background-color: #fff;
  width: 90%;
  margin: 50px auto;
  padding: 20px;
  border-radius: 5px;
 
  
}

.close {
  float: right;
  cursor: pointer;
}

/* Add some animations */
.modal-content {
  animation: modal-show 0.3s;
}

.reserva{


}

@keyframes modal-show {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>
</head>
<body>


<?php
session_start();

if (!isset($_SESSION['rol']) && empty($_SESSION['rol']) && $val !== 2) {
 header("Status: 301 Moved Permanently");
 header("Location: ./index.html");
 echo"<script language='javascript'>window.location='index.php'</script>;";
 exit();
 
}

?>
  <button id="openModalBtn" class="openModal">Reservar</button>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="reserva"></div>
    </div>
  </div>

  <script type="module">

 
 import {ConexionApi}  from './peticionesFetch.js'; 
 let conexion =new ConexionApi();
 

    let fechaReserva, horaReseva, idServicio, idUsuario, idBarbero, idFactura, dibujar = ''; 




    document.getElementById("openModalBtn").addEventListener("click", function() {
  
  // Hacer la petecion de barberos a php 

  document.getElementById("myModal").style.display = "block";


 dibujar =  "<h3>Elija el barbero </h3>";

 conexion.responseBarberos()
 
  
});



document.querySelector(".close").addEventListener("click", function() {
  document.getElementById("myModal").style.display = "none";
});







/* PETICIONES AJAX  */






  </script>
</body>
</html>
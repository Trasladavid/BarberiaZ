<?php

$id_fac = $_POST['idFactura'];
$id_user = $_POST['idUsuario'];


include "./conexionDb.php";

$sql = " SELECT  Factura.idFactura, Reserva.fechaReserva, Reserva.horaReserva, Servicios.nomServicios, Servicios.precio
FROM Reserva
inner join Factura on Factura.idFactura = Reserva.Factura_idFactura
inner join  Servicios  on Servicios.Idservicios =  Reserva.Servicios_idServicios
where  Reserva.Factura_idFactura = $id_fac
and  Reserva.Usuarios_idUsuarios = $id_user 
 
 ";


    
$result = $con->query($sql);


if ($result->num_rows > 0) {
  
    while ( $fila=$result->fetch_assoc() )  {
    
   echo  $fila['idFactura'] . $fila['fechaReserva'] .  $fila['horaReserva'] . $fila['nomServicios'] . $fila['precio'] ;
           
    }    
   
  
    // Convertimos el array a JSON
    
    
    // Enviamos la respuesta con el encabezado adecuado
    
   
} else {
     echo "Hay un error ";
}

?>
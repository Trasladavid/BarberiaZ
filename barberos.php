<?php 

include "conexionDb.php"; 




    // Realiza alguna operación con el dato si es necesario
    // En este ejemplo, simplemente lo devolvemos como respuesta
    

    $sql = " SELECT  Barberos.idBarberos, Barberos.nomBarberos, Barberos.telefonos FROM Barberos";


    
    $result = $con->query($sql);
    
   
    if ($result->num_rows > 0) {
      
        while ( $fila=$result->fetch_assoc() )  {
        
       echo "<div><img src='https://st2.depositphotos.com/2931363/9695/i/600/depositphotos_96952028-stock-photo-young-handsome-man-in-barbershop.jpg' />
       <button value='" . $fila['idBarberos']  . "'>" . $fila['nomBarberos'] . "</button><p> telefono " . $fila['telefonos'] ."</p></div";
               
        }    
       
      
        // Convertimos el array a JSON
        
        
        // Enviamos la respuesta con el encabezado adecuado
        
       
    } else {
         echo "Hay un error ";
    }








?>
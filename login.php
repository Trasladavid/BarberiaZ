<?php 



if (!empty($_POST["password"]) && !empty($_POST["id"]) && !empty($_POST["rol"])) {
    require "conexionDb.php";
 
    
    $id = $_POST["id"];
    $pass = $_POST["password"];
    $sql = "SELECT Usuarios.idUsuarios, Usuarios.password FROM Usuarios WHERE Usuarios.idUsuarios = $id AND Usuarios.password = $pass";

    $result = $con->query($sql);


    if ($result->num_rows > 0) {
    
        while ( $fila=$result->fetch_assoc() )  {
            
        session_start();
        $_SESSION['id'] = $fila['idUsuarios'];
        $_SESSION['rol'] = $fila['Rol_idRol'];
        
        
            if($fila['Rol_idRol'] == 1){
                     header("Location: sessionAdmin.php");
            }else{
                header("Location: sessionCliente.php");
            }

           
        }



        
       

    } else {
        header("Location: login.html");
    }


}


?>
<?php

if (!empty($_POST["nombre"]) && !empty($_POST["id"]) && !empty($_POST["telefono"]) && !empty($_POST["password"])) {
    require "conexionDb.php";



    $nombre = $_POST["nombre"];
    $id = $_POST["telefono"];
    $telefono = $_POST["id"];
    $password = $_POST["password"];
    echo "nombre " . $nombre . " id " . $id . " tel " . $telefono . "pas" . $password;


    // validamo si el usuario no existe en la base de datos

    $sql = "SELECT Usuarios.idUsuarios FROM Usuarios WHERE Usuarios.idUsuarios = $id";

    $result = $con->query($sql);


    if ($result->num_rows > 0) {

        echo "<script>
        
        alert('el usuario ya exite') 
    
        </script>";

        header("Location: registro.html");
       

    } else {

        echo "<p>El valor no exite, se puede crear el d</p>";

        $sql = "INSERT INTO Usuarios (idUsuarios, nomUsuarios, telefono, `password`, Rol_idRol)
             VALUES ($id, '$nombre', '$telefono', '$password', 2)";

        mysqli_query($con, $sql) or die
            ("problemas en el select" . mysqli_error($con));
        mysqli_close($con);
        echo "cliente resgistrado con exito";
        header("Location: ./sessionCliente");

    }


}




?>
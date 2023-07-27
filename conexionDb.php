<?php 

$severname = "localhost";
$username = "root";
$port = "3307";
$password = "";
$db = "barberiaz2";

// creamos la conexion 

$con = mysqli_connect($severname, $username, $password, $db, $port);

if($con->connect_error){
   die("Error de la conexion: ". $con->connect_error);
}


?>
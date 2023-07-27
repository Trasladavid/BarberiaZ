<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

session_start();
$val = $_SESSION['rol'];

if (!isset($_SESSION['rol']) && empty($_SESSION['rol']) && $val != 1) {
 header("Status: 301 Moved Permanently");
 header("Location: ./index.html");
 echo"<script language='javascript'>window.location='index.php'</script>;";
 exit();
 
}
echo "Soy Admin";


?>
<a href="http://localhost:8080/barberia/logout.php"><iconify-icon icon="ph:x-bold" style="color: black;"></iconify-icon></a>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>



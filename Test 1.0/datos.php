<?php
include 'connection.php';

if(!empty($_POST["btnsent"])){
   if (empty($_POST["correo"]) && empty($_POST["pass"])){
    echo "Los campos estan vacios";
   }else{
$correo = $_POST["correo"]; 
$contra = $_POST["pass"];

$sql = "SELECT * FROM datos WHERE correo='$correo' AND pass='$contra'";
$login = mysqli_query($conn, $sql);

    if($datos= $login->fetch_object()){
        header("location: vista.html");
    }else{
        echo "El usuario no existe";
    }
    }

}



?>
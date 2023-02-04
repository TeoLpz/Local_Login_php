<?php 
//Conexion MYSQL
include 'connection.php';

//OBTENER DATOS
$correo = $_POST['correo'];
$contra = $_POST['pass'];

//COMANDO
$sql = "INSERT INTO datos (correo, pass)
VALUES ('$correo', '$contra')";

//GUARDAR DATOS
$update = mysqli_query($conn, $sql);
if(!$update){
	die(mysqli_error($conn));
}else{
    echo "Cuenta creada exitosamente<br><a href='index.html'>Volver </a>";
}

?>


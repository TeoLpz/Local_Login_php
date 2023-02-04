<?php 

//Conexion MYSQL
$conn = mysqli_connect('localhost', 'root', '', 'Plogin');

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}else{
    echo "Conexion exitosa";
}

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
    echo "Datos guardados exitosamente"; 
    echo $sql;
}


?>
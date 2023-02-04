<?php 

$conn = mysqli_connect('localhost', 'root', '', 'Plogin');

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>
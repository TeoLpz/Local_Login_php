<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'login-php';

try {
    $connection = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
} catch (PDOException $error){
    die('Connección fallida: '.$error->getMessage());
}
?>
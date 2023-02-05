<?php
  require 'BD.php';

  $message= "";

  if (!empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stnt = $connection->prepare($sql);
    $stnt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stnt->bindParam(':password',$password);

    if ($stnt->execute()){
        $message = "Usuario creado exitosamente";
    } else {
        $message = "Ha ocurrido un error al intentas crear el usuario";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Recursos/CSS/Estilo.css">
</head>
<body>

<header><a href="/Login_PHP"><img src="Recursos/Plantilla/images/beet.png"></a></header>
    
    <?php if(!empty($message)): ?>
    <p><?= $message ?></p>
    <?php endif; ?>


    <h1>Registrate</h1>
    <spam>ó <a href="login.php">Inicia sesión</a></spam>

    <form action="registrarse.php" method="post">
        <input type="text" name="email" placeholder="Ingresa tu email">
        <input type="password" name="password" placeholder="Crea una contraseña">
        <input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
        <input type="submit" value="Crear cuenta">
    </form>

    
</body>
</html>
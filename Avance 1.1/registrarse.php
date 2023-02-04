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
    <title>Registro</title>
    <link rel="stylesheet" href="Recursos/CSS/Estilo.css">
</head>
<body>
    <header>
        <a href="/Login_PHP">MyPageWeb</a>
    </header>
    
    <?php if(!empty($message)); ?>
    <p><?= $message ?></p>


    <h1>Registrate</h1>
    <spam>o <a href="login.php">Inicia sesión</a></spam>

    <form action="registrarse.php" method="post">
        <input type="text" name="email" placeholder="Ingresa tu email">
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="password" name="confirm_password" placeholder="Confirmar contraseña">
        <input type="submit" value="Crear cuenta">
    </form>

    
</body>
</html>
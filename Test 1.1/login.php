<?php
  session_start();

  require 'BD.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])){
    $registro = $connection->prepare('SELECT id, email, password FROM usuarios WHERE email=:email');
    $registro->bindParam(':email', $_POST['email']);
    $registro->execute();
    $resultado = $registro->fetch(PDO::FETCH_ASSOC);

    $message = "";

    if (count($resultado) > 0 && password_verify($_POST['password'], $resultado['password'])){
       $_SESSION['user_id'] = $resultado['id'];
       header('Location: /Login_PHP');
    } else {
        $message = "El correo o contraseña no coiciden";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="Recursos/CSS/Estilo.css">
</head>
<body>
    <header>
        <a href="/Login_PHP">MyPageWeb</a>
    </header>

    <?php if(!empty($message)): ?>
    <p><?= $message ?></p>
    <?php endif; ?>
    
   
<h1>Iniciar Sesión</h1>
<spam>o <a href="registrarse.php">Registrate</a></spam>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingresa tu email">
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Acceder">
    </form>
</body>
</html>
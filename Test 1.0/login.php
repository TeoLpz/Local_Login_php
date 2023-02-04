<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <div class="form" >
<form action="" method="POST">
    <! ––CORREO -->
    <h1>Login</h1>
    <?php 
  include('datos.php');
  include('connection.php')
    ?>
    <p> Correo Electronico</p>
    <input type="email" name="correo" placeholder="Ejemplo@gmail.com" ><! ––Dato recuperado (NAME)  -->
    <br>
    <! ––PASSWORD -->
    <p> Contraseña</p>
    <input type="text" name="pass" placeholder="Contraseña" > <! ––Dato recuperado (NAME)  -->
    <br>
    <! ––SENT BOTTOM -->
    <input type="submit" value="Iniciar Sesion" name="btnsent"> 
</form>
    </div>
</body>
</html>
<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - Lizbeth Hair Salon</title>
    <link rel="stylesheet" href="css/styleIS.css">
    <link rel="icon" href="images/fevicon.jpg" type="image/jpg" />
    <link rel="php" href="login.php">


  </head>
<body>
  <div class="myformulario">
    <h1>Inicio de Sesión</h1>
    <form name = "form" action="http://localhost/proyecto-integrador-v1210/login.php" method="POST">
      <div class="username">
        <!--<label >Correo</label>-->
        <input type="text" 
           required id="email" name="email" placeholder="Email">
      </div>
      <div class="username">
        <!--<label>Contraseña</label>-->
        <input type="password" required id="password" name="password" placeholder="Contraseña">
      </div>
<!--<div class="recordar">¿Olvidó su contraseña?</div>-->
<input type="submit" id="btn" value="Login" name="submit">
<div class="registrarse">
    Quiero hacer el <a href="register.php">registro</a>
</div>
    </form>
  </div>
</body>
</html>
<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="css/styleIS.css">
  <link rel="icon" href="images/fevicon.jpg" type="image/jpg" />

</head>
<body>
  <div class="myformulario">
    <h1>Inicio de Sesión</h1>
    <form name = "form" action="login.php" method="POST">
      <div class="username">
        <!--<label >Correo</label>-->
        <input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}
          " required id="email" name="email" placeholder="Email">
      </div>
      <div class="username">
        <!--<label>Contraseña</label>-->
        <input type="password" required id="password" name="password" placeholder="Contraseña">
      </div>
<!--<div class="recordar">¿Olvidó su contraseña?</div>-->
<input type="submit" id="btn" value="Login" name="submit">
<div class="registrarse">
    Quiero hacer el <a href="register.html">registro</a>
</div>
    </form>
  </div>
</body>
</html>
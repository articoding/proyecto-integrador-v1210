<?php
?>

<!DOCTYPE html>
 <html lang="en">
  <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styleIS.css">
    <link rel="icon" href="images/fevicon.jpg" type="image/jpg" />

  </head>
  <body>
         
    <div class="myformulario">
      <h1>Registro</h1>
      <form method="post" action="connect.php">
        <div class="username">
          <input type="text" required id="username" name="username" placeholder="Nombre">
          <!--<label for="user_name">Nombre</label>-->
        </div>
        <div class="username">
          <input type="text" required id="user_lastname" name="user_lastname" placeholder="Apellido">
          <!--<label for="user_lastname">Apellido</label>-->
        </div>
        <div class="username">
          <input type="date" required id="user_birthdate" name="user_birthdate" placeholder="Fecha de nacimiento">
          <!--<label for="user_birthdate">Fecha de nacimiento</label>-->
        </div>
        <div class="username">
          <input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}
          "
          required id="user_email" name="user_email" placeholder="Email">
          <!--<label for="user_email">Correo electronico</label>-->
        </div>
        <div class="username">
  <input type="password" required id="user_password" name="user_password" placeholder="Contraseña">
  <!--<label for="user_password">Contraseña</label>-->
        </div>
  <input type="submit" value="Registrarse">
      </form>
    </div>
  </body>
</html>

<?php

   include("../../conexion.php");
   
   if(isset($_GET['idUsers'])){
       $txtidUsuario = (isset($_GET['idUsers'])?$_GET['idUsers']:"");
       $stm = $conexion->prepare("SELECT * FROM users WHERE idUsers = :txtidUsuario");
       $stm->bindParam(":txtidUsuario",$txtidUsuario);
       $stm->execute();
       $registro = $stm->fetch(PDO::FETCH_LAZY);
       $nombre = $registro['username'];
       $apellidos = $registro['user_lastname'];
       $fechanacimiento = $registro['user_birthdate'];
       $correo = $registro['user_email'];
       $contrasena = $registro['user_password'];
       $tipousuario = $registro['usertype'];
   }

   if($_POST) {
         $txtidUsuario = (isset($_POST['txtidUsuario'])?$_POST['txtidUsuario']:"");
         $nombre = (isset($_POST['nombre'])?$_POST['nombre']:"");
         $apellidos = (isset($_POST['apellidos'])?$_POST['apellidos']:"");
         $fechanacimiento = (isset($_POST['fechanacimiento'])?$_POST['fechanacimiento']:"");
         $correo = (isset($_POST['correo'])?$_POST['correo']:"");
         $contrasena = (isset($_POST['contrasena'])?$_POST['contrasena']:"");
         $tipousuario = (isset($_POST['tipousuario'])?$_POST['tipousuario']:"");
    
         $stm = $conexion->prepare("UPDATE users SET username = :nombre, user_lastname = :apellidos, user_birthdate = :fechanacimiento, user_email = :correo, user_password = :contrasena, usertype = :tipousuario WHERE idUsers = :txtidUsuario");
         $stm->bindParam(":txtidUsuario",$txtidUsuario);
         $stm->bindParam(":nombre",$nombre);
         $stm->bindParam(":apellidos",$apellidos);
         $stm->bindParam(":fechanacimiento",$fechanacimiento);
         $stm->bindParam(":correo",$correo);
         $stm->bindParam(":contrasena",$contrasena);
         $stm->bindParam(":tipousuario",$tipousuario);
         $stm->execute();
         header("location: index.php");
   }




?>

<?php include("../../Templates/header4.php"); ?>


    <form action="" method="post">

            <input type="hidden" class="form-control" name="txtidUsuario" value="<?php echo $txtidUsuario; ?>" placeholder="Ingresa">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" placeholder="Actualiza tu nombre" >
            <label for="">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Actualiza tus apellidos" >
            <label for="">Fecha de nacimiento</label>
            <input type="text" class="form-control" name="fechanacimiento" value="<?php echo $fechanacimiento; ?>" placeholder="Actualiza tu fecha de nacimiento" >
            <label for="">Correo</label>
            <input type="text" class="form-control" name="correo" value="<?php echo $correo; ?>" placeholder="Actualiza tu correo" >
            <label for="">Contraseña</label>
            <input type="text" class="form-control" name="contrasena" value="<?php echo $contrasena; ?>" placeholder="Actualiza tu contraseña" >
            <label for="">Tipo de usuario</label>
            <select type="text" class="form-control" name="tipousuario" value="<?php echo $tipousuario; ?>" placeholder="Actualiza tu tipo de usuario" >
                <option value="" disabled selected>Cambia el tipo de usuario</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuario</option>
            </select>

            <div class="modal-footer">
                <a href="index.php" class="btn btn-danger">Cancelar</a>     
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
    </form>






<?php include("../../Templates/footer.php"); ?>
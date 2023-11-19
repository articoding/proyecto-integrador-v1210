<?php

if ($_POST) {
    
        $nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
        $apellidos = (isset($_POST['apellidos']) ? $_POST['apellidos'] : "");
        $fechanacimiento = (isset($_POST['fechanacimiento']) ? $_POST['fechanacimiento'] : "");
        $correo = (isset($_POST['correo']) ? $_POST['correo'] : "");
        $contrasena = (isset($_POST['contrasena']) ? $_POST['contrasena'] : "");
        $tipousuario = (isset($_POST['tipousuario']) ? $_POST['tipousuario'] : "");

        $stm = $conexion->prepare("CALL sp_creatU (:nombre, :apellidos, :fechanacimiento, :correo, :contrasena, :tipousuario)");
        $stm->bindParam(':nombre', $nombre);
        $stm->bindParam(':apellidos', $apellidos);
        $stm->bindParam(':fechanacimiento', $fechanacimiento);
        $stm->bindParam(':correo', $correo);
        $stm->bindParam(':contrasena', $contrasena);
        $stm->bindParam(':tipousuario', $tipousuario);
        $stm->execute();


}



?>

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="" placeholder="Ingresa tu nombre" >
        <label for="">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" value="" placeholder="Ingresa tus apellidos" >
        <label for="">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fechanacimiento" value="" placeholder="Ingresa tu fecha de nacimiento" >
        <label for="">Correo</label>
        <input type="text" class="form-control" name="correo" value="" placeholder="Ingresa tu correo" >
        <label for="">Contraseña</label>
        <input type="text" class="form-control" name="contrasena" value="" placeholder="Ingresa tu contraseña" >
        <label for="">Tipo de usuario</label>
        <select type="text" class="form-control" name="tipousuario" value="" placeholder="Ingresa el tipo de usuario deseado" >
            <option value="" disabled selected>Seleccione el tipo de usuario</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuario</option>
        </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php


if($_POST){

    $nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
    $telefono = (isset($_POST['telefono']) ? $_POST['telefono'] : "");
    $email = (isset($_POST['email']) ? $_POST['email'] : "");
    $comment = (isset($_POST["comment"]) ? $_POST["comment"] :"");
    $fecharegistro = (isset($_POST['fecharegistro'])?$_POST['fecharegistro']:"");


    $stm = $conexion->prepare("CALL sp_cretcon (:nombre, :telefono, :email, :comment, :fecharegistro)");
    $stm->bindParam(':nombre', $nombre);
    $stm->bindParam(':telefono', $telefono);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':comment', $comment);
    $stm->bindParam(':fecharegistro', $fecharegistro);
    $stm->execute();

    

}

?>


<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="" placeholder="Ingresa tu nombre" >
        <label for="">Teléfono</label>
        <input type="text" class="form-control" name="telefono" value="" placeholder="Ingresa tu teléfono" >
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" value="" placeholder="Ingresa tu email">
        <label for="">Comentario</label>
        <input type="text" class="form-control" name="comment" value="" placeholder="Ingresa un comentario">
        <label for="">Fecha de registro</label>
        <input type="date" class="form-control" name="fecharegistro" value="" placeholder="Ingresa tu fecha de registro" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
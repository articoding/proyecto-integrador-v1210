<?php


if($_POST){

    $historia = (isset($_POST['historia']) ? $_POST['historia'] : "");
    $mision = (isset($_POST['mision']) ? $_POST['mision'] : "");
    $valores = (isset($_POST['valores']) ? $_POST['valores'] : "");

    $stm = $conexion->prepare("INSERT INTO aboutus (historia, mision, valores) VALUES (:historia, :mision, :valores)");
    $stm->bindParam(':historia', $historia);
    $stm->bindParam(':mision', $mision);
    $stm->bindParam(':valores', $valores);
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
        <label for="">Historia</label>
        <input type="text" class="form-control" name="historia" value="" placeholder="Ingresa la historia">
        <label for="">Misión</label>
        <input type="text" class="form-control" name="mision" value="" placeholder="Ingresa la misión">
        <label for="">Valores</label>
        <input type="text" class="form-control" name="valores" value="" placeholder="Ingresa los valores">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
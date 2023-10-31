<?php

if ($_POST) {

$Serv_name=(isset($_POST['Serv_name'])?$_POST['Serv_name']:"");
$Serv_description=(isset($_POST['Serv_description'])?$_POST['Serv_description']:"");
$Serv_price=(isset($_POST['Serv_price'])?$_POST['Serv_price']:"");

$stm=$conexion->prepare("INSERT INTO services(idServices,Serv_name,Serv_description,Serv_price)VALUES(NULL,:Serv_name,:Serv_description,:Serv_price)");

$stm->bindParam(":Serv_name",$Serv_name);
$stm->bindParam(":Serv_description",$Serv_description);
$stm->bindParam(":Serv_price",$Serv_price);
$stm->execute();


}

?>




<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="Serv_name" placeholder="Ingresar datos">
        <br>

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="Serv_description" placeholder="Ingresar datos">
        <br>

        <label for="">Precio</label>
        <input type="text" class="form-control" name="Serv_price" placeholder="Ingresar datos">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
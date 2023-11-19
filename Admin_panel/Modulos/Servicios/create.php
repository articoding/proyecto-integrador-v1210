<?php

if ($_POST) {

$Serv_name=(isset($_POST['Serv_name'])?$_POST['Serv_name']:"");
$categories=(isset($_POST['categories'])?$_POST['categories']:"");
$Serv_description=(isset($_POST['Serv_description'])?$_POST['Serv_description']:"");
$Serv_price=(isset($_POST['Serv_price'])?$_POST['Serv_price']:"");
$Serv_img=(isset($_FILES['Serv_img']['name'])?$_FILES['Serv_img']['name']:"");

$fecha = new DateTime();
$nombreArchivo=($Serv_img!="")?$fecha->getTimestamp()."_".$_FILES["Serv_img"]["name"]:"imagen.png";

$tmpimagen=$_FILES["Serv_img"]["tmp_name"];
if($tmpimagen!=""){

  move_uploaded_file($tmpimagen,"../../../images/Servicios/".$nombreArchivo);

}
$stm=$conexion->prepare("CALL sp_cs (:categories,:Serv_name,:Serv_description,:Serv_price,:Serv_img)");

$stm->bindParam(":Serv_name",$Serv_name);
$stm->bindParam(":categories",$categories);
$stm->bindParam(":Serv_description",$Serv_description);
$stm->bindParam(":Serv_price",$Serv_price);
$stm->bindParam(':Serv_img',$nombreArchivo);
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
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="Serv_name" placeholder="Ingresar datos">
        <br>

        <label for="">Categoría</label>
        <select type="text" class="form-control" name="categories" value="" placeholder="Selecciona la categoría">
          <option value="" disabled selected>Seleccione la categoría</option>
          <option value="Cabello">Cabello</option>
          <option value="Tratamientos">Tratamientos capilares</option>
          <option value="Manos">Manos</option>
          <option value="Pies">Pies</option>
          <option value="Pestanas">Pestañas</option>
          <option value="Maquillaje">Maquillaje</option>
          <option value="Rostro">Rostro</option>
          <option value="Cuerpo">Cuerpo</option>
        </select>
        <label for="">Descripción</label>
        <input type="text" class="form-control" name="Serv_description" placeholder="Ingresar datos">
        <br>

        <label for="">Precio</label>
        <input type="text" class="form-control" name="Serv_price" placeholder="Ingresar datos">
        <br>

        <label for="Serv_img">Imagen</label>
        <input type="file" accept="image/*" class="form-control" name="Serv_img" placeholder="Cargar Imagen">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
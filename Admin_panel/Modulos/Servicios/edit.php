<?php   

include("../../conexion.php");

if (isset($_GET['idServices'])){

  $txtidServices=(isset($_GET['idServices'])?$_GET['idServices']:"");
  $stm=$conexion->prepare("SELECT * FROM services WHERE idServices=:txtidServices");
  $stm->bindParam(":txtidServices",$txtidServices);
  $stm->execute();
  $registro=$stm->fetch(PDO::FETCH_LAZY);
  $Serv_name=$registro['Serv_name'];
  $Serv_description=$registro['Serv_description'];
  $Serv_price=$registro['Serv_price'];
  $Serv_img=$registro['Serv_img'];
  }
  
  if ($_POST) {
    $txtidServices=(isset($_POST['txtidServices'])?$_POST['txtidServices']:"");
    $Serv_name=(isset($_POST['Serv_name'])?$_POST['Serv_name']:"");
    $Serv_description=(isset($_POST['Serv_description'])?$_POST['Serv_description']:"");
    $Serv_price=(isset($_POST['Serv_price'])?$_POST['Serv_price']:"");
    $Serv_img=(isset($_POST['Serv_img'])?$_POST['Serv_img']:"");
    
    $stm=$conexion->prepare("UPDATE services SET Serv_name=:Serv_name,Serv_description=:Serv_description,Serv_price=:Serv_price,Serv_img=:Serv_img WHERE idServices=:txtidServices");
    $stm->bindParam(":Serv_name",$Serv_name);
    $stm->bindParam(":Serv_description",$Serv_description);
    $stm->bindParam(":Serv_price",$Serv_price);
    $stm->bindParam(":Serv_img",$Serv_img);
    $stm->bindParam(":txtidServices",$txtidServices);
    
    $stm->execute();
    header("location: index.php");
    }
  
  

?>

<?php include("../../Templates/header.php");?>

<form action="" method="post">
        <input type="hidden" class="form-control" name="txtidServices" value="<?php echo $txtidServices; ?>">

        <label for="">Nombre</label>
        <input type="text" class="form-control" name="Serv_name" placeholder="Ingresar datos" value="<?php echo $Serv_name; ?>">
        <br>

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="Serv_description" placeholder="Ingresar datos" value="<?php echo $Serv_description; ?>">
        <br>

        <label for="">Precio</label>
        <input type="text" class="form-control" name="Serv_price" placeholder="Ingresar datos" value="<?php echo $Serv_price; ?>">
        <br>

        <label for="">Imagen</label>
        <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="Serv_img" placeholder="Cargar Imagen" value="<?php echo $Serv_img; ?>">
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>

<?php include("../../Templates/footer.php"); ?>
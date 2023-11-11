<?php   
include("../../conexion.php");

if (isset($_GET['idServices'])) {
    $txtidServices = isset($_GET['idServices']) ? $_GET['idServices'] : "";
    $stm = $conexion->prepare("SELECT * FROM services WHERE idServices=:txtidServices");
    $stm->bindParam(":txtidServices", $txtidServices);
    $stm->execute();
    $registro = $stm->fetch(PDO::FETCH_LAZY);
    $categories = $registro['categories'];
    $Serv_name = $registro['Serv_name'];
    $Serv_description = $registro['Serv_description'];
    $Serv_price = $registro['Serv_price'];
    $Serv_img = $registro['Serv_img'];
}

if ($_POST) {
    $txtidServices = isset($_POST['txtidServices']) ? $_POST['txtidServices'] : "";
    $categories = isset($_POST['categories']) ? $_POST['categories'] : "";
    $Serv_name = isset($_POST['Serv_name']) ? $_POST['Serv_name'] : "";
    $Serv_description = isset($_POST['Serv_description']) ? $_POST['Serv_description'] : "";
    $Serv_price = isset($_POST['Serv_price']) ? $_POST['Serv_price'] : "";
    $Serv_img = isset($_FILES['Serv_img']['name']) ? $_FILES['Serv_img']['name'] : "";

    // Consulta el nombre de la imagen antigua
    $stm = $conexion->prepare("SELECT Serv_img FROM services WHERE idServices=:txtidServices");
    $stm->bindParam(":txtidServices", $txtidServices);
    $stm->execute();
    $registro = $stm->fetch(PDO::FETCH_LAZY);
    $oldImage = $registro['Serv_img'];

    // Elimina la imagen antigua del directorio de imágenes
    if (!empty($oldImage)) {
        unlink("../../../images/Servicios/" . $oldImage);
    }

    // Mueve la nueva imagen al directorio de imágenes
    if (!empty($Serv_img)) {
        $fecha = new DateTime();
        $nombreArchivo = $fecha->getTimestamp() . "_" . $_FILES["Serv_img"]["name"];
        $tmpimagen = $_FILES["Serv_img"]["tmp_name"];
        move_uploaded_file($tmpimagen, "../../../images/Servicios/" . $nombreArchivo);
    } else {
        $nombreArchivo = $oldImage;
    }

    // Realiza la actualización en la base de datos
    $stm = $conexion->prepare("UPDATE services SET categories=:categories,Serv_name=:Serv_name, Serv_description=:Serv_description, Serv_price=:Serv_price, Serv_img=:Serv_img WHERE idServices=:txtidServices");
    $stm->bindParam(":categories", $categories);
    $stm->bindParam(":Serv_name", $Serv_name);
    $stm->bindParam(":Serv_description", $Serv_description);
    $stm->bindParam(":Serv_price", $Serv_price);
    $stm->bindParam(":Serv_img", $nombreArchivo);
    $stm->bindParam(":txtidServices", $txtidServices);

    $stm->execute();
    header("location: index.php");
}
?>

<?php include("../../Templates/header.php");?>

<form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="txtidServices" value="<?php echo $txtidServices; ?>">

        <label for="categories">Categoría</label>
        <select type="text" class="form-control" name="categories" value="<?php echo $categories; ?>" placeholder="Selecciona la categoría">
          <option value="" disabled selected>Seleccione la categoría</option>
          <option value="Cabello" <?php if ($categories == 'Cabello') echo 'selected';   ?>>Cabello</option>
          <option value="Tratamientos" <?php if ($categories == 'Tratamientos') echo 'selected';   ?> >Tratamientos capilares</option>
          <option value="Manos" <?php if ($categories == 'Manos') echo 'selected';   ?>>Manos</option>
          <option value="Pies" <?php if ($categories == 'Pies') echo 'selected';   ?>>Pies</option>
          <option value="Pestanas <?php if ($categories == 'Pestanas') echo 'selected';   ?>">Pestañas</option>
          <option value="Maquillaje" <?php if ($categories == 'Maquillaje') echo 'selected';   ?>>Maquillaje</option>
          <option value="Rostro" <?php if ($categories == 'Rostro') echo 'selected';   ?>>Rostro</option>
          <option value="Cuerpo" <?php if ($categories == 'Cuerpo') echo 'selected';   ?>>Cuerpo</option>
        </select>

        <label for="Serv_name">Nombre</label>
        <input type="text" class="form-control" name="Serv_name" placeholder="Ingresar datos" value="<?php echo $Serv_name; ?>">
        <br>

        <label for="Serv_description">Descripcion</label>
        <input type="text" class="form-control" name="Serv_description" placeholder="Ingresar datos" value="<?php echo $Serv_description; ?>">
        <br>

        <label for="Serv_price">Precio</label>
        <input type="text" class="form-control" name="Serv_price" placeholder="Ingresar datos" value="<?php echo $Serv_price; ?>">
        <br>

        <label for="Serv_img">Imagen</label>
        <input type="file" accept="image/*" class="form-control" name="Serv_img" placeholder="Cargar Imagen" value="<?php echo $Serv_img; ?>">
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>

<?php include("../../Templates/footer.php"); ?>
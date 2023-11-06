<?php 

    include("../../conexion.php");

    if(isset($_GET['idContact'])){
        $txtidContact = (isset($_GET['idContact'])?$_GET['idContact']:"");
        $stm = $conexion->prepare("SELECT * FROM contact_us WHERE idContact = :txtidContact");
        $stm->bindParam(":txtidContact",$txtidContact);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $nombre = $registro['contact_name'];
        $direccion = $registro['contact_ubication'];
        $sociales = $registro['contact_social'];
        $telefono = $registro['contact_phone'];
        $email = $registro['contact_email'];
        $fecharegistro = $registro['contact_register'];
    }

    if($_POST){
        $txtidContact = (isset($_POST['txtidContact'])?$_POST['txtidContact']:"");
        $nombre = (isset($_POST['nombre'])?$_POST['nombre']:"");
        $direccion = (isset($_POST['direccion'])?$_POST['direccion']:"");
        $sociales = (isset($_POST['sociales'])?$_POST['sociales']:"");
        $telefono = (isset($_POST['telefono'])?$_POST['telefono']:"");
        $email = (isset($_POST['email'])?$_POST['email']:"");
        $fecharegistro = (isset($_POST['fecharegistro'])?$_POST['fecharegistro']:"");

        $stm = $conexion->prepare("UPDATE contact_us SET contact_name = :nombre, contact_ubication = :direccion, contact_social = :sociales, contact_phone = :telefono, contact_email = :email, contact_register = :fecharegistro WHERE idContact = :txtidContact");
        $stm->bindParam(":txtidContact",$txtidContact);
        $stm->bindParam(":nombre",$nombre);
        $stm->bindParam(":direccion",$direccion);
        $stm->bindParam(":sociales",$sociales);
        $stm->bindParam(":telefono",$telefono);
        $stm->bindParam(":email",$email);
        $stm->bindParam(":fecharegistro",$fecharegistro);
        $stm->execute();
        header("location: index.php");

    }


?>

<?php include("../../Templates/header2.php"); ?>


    <form action="" method="post">

            <input type="hidden" class="form-control" name="txtidContact" value="<?php echo $txtidContact; ?>" placeholder="Ingresa">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingresa tu nombre" >
            <label for="">Dirección</label>
            <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" placeholder="Ingresa tu dirección" >
            <label for="">Sociales</label>
            <input type="text" class="form-control" name="sociales" value="<?php echo $sociales; ?>" placeholder="Ingresa tu redes sociales" >
            <label for="">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="Ingresa tu teléfono" >
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Ingresa tu email">
            <label for="">Fecha de registro</label>
            <input type="text" class="form-control" name="fecharegistro" value="<?php echo $fecharegistro; ?>" placeholder="Ingresa tu fecha de registro" >
        </div>
        <div class="modal-footer">
            <a href="index.php" class="btn btn-danger">Cancelar</a>     
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>

<?php include("../../Templates/footer2.php"); ?>
<?php 

    include("../../conexion.php");

    if(isset($_GET['idContact'])){
        $txtidContact = (isset($_GET['idContact'])?$_GET['idContact']:"");
        $stm = $conexion->prepare("SELECT * FROM contact_us WHERE idContact = :txtidContact");
        $stm->bindParam(":txtidContact",$txtidContact);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $nombre = $registro['contact_name'];
        $telefono = $registro['contact_phone'];
        $email = $registro['contact_email'];
        $comment = $registro['contact_comment'];
        $fecharegistro = $registro['contact_register'];
    }

    if($_POST){
        $txtidContact = (isset($_POST['txtidContact'])?$_POST['txtidContact']:"");
        $nombre = (isset($_POST['nombre'])?$_POST['nombre']:"");
        $telefono = (isset($_POST['telefono'])?$_POST['telefono']:"");
        $email = (isset($_POST['email'])?$_POST['email']:"");
        $comment = (isset($_POST["comment"])?$_POST["comment"]:"");
        $fecharegistro = (isset($_POST['fecharegistro'])?$_POST['fecharegistro']:"");

        $stm = $conexion->prepare("CALL sp_editC (:txtidContact, :nombre, :telefono, :email, :comment, :fecharegistro)");
        $stm->bindParam(":txtidContact",$txtidContact);
        $stm->bindParam(":nombre",$nombre);
        $stm->bindParam(":telefono",$telefono);
        $stm->bindParam(":email",$email);
        $stm->bindParam(":comment",$comment);
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
            <label for="">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="Ingresa tu teléfono" >
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Ingresa tu email">
            <label for="">Comentario</label>
            <input type="text" class="form-control" name="comment" value="<?php echo $comment; ?>" placeholder="Cambia el Comentario">
            <label for="">Fecha de registro</label>
            <input type="text" class="form-control" name="fecharegistro" value="<?php echo $fecharegistro; ?>" placeholder="Ingresa tu fecha de registro" >
        </div>
        <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancelar</a>     
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>

<?php include("../../Templates/footer.php"); ?>
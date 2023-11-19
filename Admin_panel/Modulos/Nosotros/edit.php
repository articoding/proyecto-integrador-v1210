<?php

include("../../conexion.php");

    if(isset($_GET['idAbout'])){
        $txtidAbout = (isset($_GET['idAbout'])?$_GET['idAbout']:"");
        $stm = $conexion->prepare("SELECT * FROM aboutus WHERE idAbout = :txtidAbout");
        $stm->bindParam(":txtidAbout",$txtidAbout);
        $stm->execute();
        $registro = $stm->fetch(PDO::FETCH_LAZY);
        $historia = $registro['historia'];
        $mision = $registro['mision'];
        $valores = $registro['valores'];
    }

    if($_POST){
        $txtidAbout = (isset($_POST['txtidAbout'])?$_POST['txtidAbout']:"");
        $historia = (isset($_POST['historia'])?$_POST['historia']:"");
        $mision = (isset($_POST['mision'])?$_POST['mision']:"");
        $valores = (isset($_POST['valores'])?$_POST['valores']:"");

        $stm = $conexion->prepare("CALL sp_editN (:txtidAbout, :historia, :mision, :valores)");        $stm->bindParam(":txtidAbout",$txtidAbout);
        $stm->bindParam(":historia",$historia);
        $stm->bindParam(":mision",$mision);
        $stm->bindParam(":valores",$valores);
        $stm->execute();
        header("location: index.php");

    }

?>

<?php include("../../Templates/header3.php"); ?>


    <form action="" method="post">
        <input type="hidden" class="form-control" name="txtidAbout" value="<?php echo $txtidAbout; ?>" placeholder="Ingresa">
        <label for="">Historia</label>
        <input type="text" class="form-control" name="historia" value="<?php echo $historia; ?>" placeholder="Ingresa la historia">
        <label for="">Misión</label>
        <input type="text" class="form-control" name="mision" value="<?php echo $mision; ?>" placeholder="Ingresa la misión">
        <label for="">Valores</label>
        <input type="text" class="form-control" name="valores" value="<?php echo $valores; ?>" placeholder="Ingresa los valores">

        <div class="modal-footer">
            <a href="index.php" class="btn btn-danger">Cancelar</a>     
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>







    </form>

<?php include("../../Templates/footer.php"); ?>


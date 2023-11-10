<?php 

include("../../conexion.php");

$stml = $conexion->prepare("SELECT * FROM aboutus");
$stml->execute();
$aboutus = $stml->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['idAbout'])){
    $txtidAbout = (isset($_GET['idAbout'])?$_GET['idAbout']:"");
    $stm = $conexion->prepare("DELETE FROM aboutus WHERE idAbout = :txtidAbout");
    $stm->bindParam(":txtidAbout",$txtidAbout);
    $stm->execute();
    header("location: index.php");
}

?>


<?php include("../../Templates/header3.php"); ?>



<div class="table-responsive">
    <table class="table table-white">
        <thead class="table table-white">
            <tr>
                <th scope="col">Historia</th>
                <th scope="col">Misión</th>
                <th scope="col">Valores</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($aboutus as $about) { ?>
            <tr class="">
                <td scope="row"><?php echo $about['historia']; ?></td>
                <td scope="row"><?php echo $about['mision']; ?></td>
                <td scope="row"><?php echo $about['valores']; ?></td>
                <td>
                <a href="edit.php?idAbout=<?php echo $about['idAbout']; ?>" class="btn btn-success">Editar</a> <br>
                </td>
            </tr>
        <?php } ?>   
        </tbody>
    </table>
</div>

<?php include("create.php"); ?>


<?php include("../../Templates/footer.php"); ?>
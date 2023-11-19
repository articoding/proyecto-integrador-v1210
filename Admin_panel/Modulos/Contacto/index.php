<?php 

include("../../conexion.php");

$stml = $conexion->prepare("SELECT * FROM contact_us"); 
$stml->execute();
$contact_us = $stml->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['idContact'])){
    $txtidContact = (isset($_GET['idContact'])?$_GET['idContact']:"");
    $stm = $conexion->prepare("CALL sp_deletC (:txtidContact)");
    $stm->bindParam(":txtidContact",$txtidContact);
    $stm->execute();
    header("location: index.php");
}

?>


<?php include("../../Templates/header2.php"); ?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Nuevo
</button>

<div class="table-responsive">
    <table class="table table-white">
        <thead class="table table-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
                <th scope="col">Comentarios</th>
                <th scope="col">Fecha de registro</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contact_us as $contact) { ?>
            <tr class="">
                <td scope="row"><?php echo $contact['idContact']; ?></td>
                <td scope="row"><?php echo $contact['contact_name']; ?></td>
                <td><?php echo $contact['contact_phone']; ?></td>
                <td><?php echo $contact['contact_email']; ?></td>
                <td><?php echo $contact['contact_comment']; ?></td>
                <td><?php echo $contact['contact_register']; ?></td>
                <td>
                <a href="edit.php?idContact=<?php echo $contact['idContact']; ?>" class="btn btn-success">Editar</a> <br>
                <a href="index.php?idContact=<?php echo $contact['idContact']; ?>" class="btn btn-danger">Eliminar</a> <br>
                </td>
            </tr>
        <?php } ?>   
        </tbody>
    </table>
</div>
<?php include("create.php"); ?>


<?php include("../../Templates/footer.php"); ?>
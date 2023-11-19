<?php 

include("../../conexion.php");

$stml = $conexion->prepare("SELECT * FROM users");
$stml->execute();
$usuarios = $stml->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['idUsers'])){
    $txtidUsuario = (isset($_GET['idUsers'])?$_GET['idUsers']:"");
    $stm = $conexion->prepare("CALL sp_deletU (:txtidUsuario)");
    $stm->bindParam(":txtidUsuario",$txtidUsuario);
    $stm->execute();
    header("location: index.php");
}


?>


<?php include("../../Templates/header4.php"); ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Nuevo
</button>
<div class="table-responsive">
    <table class="table table-white">
        <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Tipo de usuario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario) { ?>
                <tr class="">
                    <td scope="row"><?php echo $usuario['idUsers']; ?></td>
                    <td scope="row"><?php echo $usuario['username']; ?></td>
                    <td scope="row"><?php echo $usuario['user_lastname']; ?></td>
                    <td scope="row"><?php echo $usuario['user_birthdate']; ?></td>
                    <td scope="row"><?php echo $usuario['user_email']; ?></td>
                    <td scope="row"><?php echo $usuario['user_password']; ?></td>
                    <td scope="row"><?php echo $usuario['usertype']; ?></td>
                    <td>
                    <a href="edit.php?idUsers=<?php echo $usuario['idUsers']; ?>" class="btn btn-success">Editar</a> <br>
                    <a href="index.php?idUsers=<?php echo $usuario['idUsers']; ?>" class="btn btn-danger">Eliminar</a> <br>
                    </td>
                </tr>
            <?php } ?>   
        </tbody>
    </table>
</div>

<?php include("create.php"); ?>

<?php include("../../Templates/footer.php"); ?>

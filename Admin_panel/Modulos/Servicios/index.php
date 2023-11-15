<?php   

include("../../conexion.php");

$stm=$conexion->prepare("SELECT * FROM services");
$stm->execute();
$services = $stm->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['idServices'])){

$txtidServices=(isset($_GET['idServices'])?$_GET['idServices']:"");
$stm=$conexion->prepare("DELETE FROM services WHERE idServices=:txtidServices");
$stm->bindParam(":txtidServices",$txtidServices);
$stm->execute();
header("location: index.php");
}


?>





<?php include("../../Templates/header.php"); ?>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Nuevo
</button>

  <div class="table-responsive">
  <table class="table">
    <thead class="table table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Categoría</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($services as $servicio) { ?>
      <tr class="">
        <td scope="row"><?php echo $servicio['idServices']; ?></td>
        <td><?php echo $servicio['categories']; ?></td>
        <td><?php echo $servicio['Serv_name']; ?></td>
        <td><?php echo $servicio['Serv_description']; ?></td>
        <td><?php echo $servicio['Serv_price']; ?></td>
        <td><?php echo $servicio['Serv_img']; ?></td>
        <td>


        <a href="edit.php?idServices=<?php echo $servicio['idServices']; ?>" class="btn btn-success">Editar</a>
        <a href="index.php?idServices=<?php echo $servicio['idServices']; ?>" class="btn btn-danger">Eliminar</a>

        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php include("create.php"); ?>

</body>

</html>

<?php include("../../Templates/footer.php"); ?>
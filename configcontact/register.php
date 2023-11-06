<?php
    include "connection.php";

    if(isset($_POST['register'])){
        if(strlen($_POST['name']) >= 1 && strlen($_POST['address']) >= 1 && strlen($_POST['social']) >= 1 && strlen($_POST['cellphone']) >= 1 && strlen($_POST['email']) >= 1){
            $name = trim($_POST['name']);
            $address = trim($_POST['address']);
            $social = trim($_POST['social']);
            $cellphone = trim($_POST['cellphone']);
            $email = trim($_POST['email']);
            $fechareg = date("d/m/y");
            $consulta = "INSERT INTO contact_us(contact_name, contact_ubication, contact_social, contact_phone, contact_email, contact_register) VALUES ('$name','$address','$social','$cellphone','$email','$fechareg')";
            $resultado = mysqli_query($conn,$consulta);
            if($resultado){
                ?>
                <h3 class="ok">¡Te has inscripto correctamente!</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
            }
        }   else {
            ?>
            <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
        }
    }


?>
<?php
    include "connection.php";

    if(isset($_POST['register'])){
        if(strlen($_POST['name']) >= 1 && strlen($_POST['cellphone']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['comment']) >= 1){
            $name = trim($_POST['name']);
            $cellphone = trim($_POST['cellphone']);
            $email = trim($_POST['email']);
            $comment = trim($_POST['comment']);
            $fechareg = date("d/m/y");
            $consulta = "INSERT INTO contact_us(contact_name, contact_phone, contact_email, contact_comment, contact_register) VALUES ('$name','$cellphone','$email','$comment','$fechareg')";
            $resultado = mysqli_query($conn,$consulta);
            if($resultado){
                ?>
                <h3 class="ok">¡Nos pondremos en contacto contigo! Gracias</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
            }
        }   else {
            ?>
            <h3 class="bad">¡Por favor completa los campos!</h3>
            <?php
        }
    }


?>
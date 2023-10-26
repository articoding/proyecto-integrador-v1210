<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $user_name = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND user_password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            header("location: welcome.html");
        }
        else{
            echo '<script>
                window.location.href = "signin.php";
                alert("Inicio de sesión fallido. Contraseña o usuario incorrecto");
            </script>';
    
        }
    }
    
?>

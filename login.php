    <?php
        include("connection.php");
        if(isset($_POST['submit'])){
            $user_email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            
                if ($row["usertype"]=="user") {
                    header("location: index.html");
                }
                
                elseif($row["usertype"]=="admin")
                {
                    header("location: Admin_panel/index.php");
                }
            else{
                echo '<script>
                    window.location.href = "signin.php";
                    alert("Login failed. Invalid Email or Password");
                </script>';
        
            }
        }
        
<<<<<<< HEAD
=======
        if($count == 1){
            header("location: index.php");
        }
        else{
            echo '<script>
                window.location.href = "signin.php";
                alert("Inicio de sesión fallido. Contraseña o usuario incorrecto");
            </script>';
>>>>>>> nocarrousel
    
        
    ?>

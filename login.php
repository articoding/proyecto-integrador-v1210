<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connection.php");

if (isset($_POST['submit'])) {
    $user_email = $_POST['email'];
    $password = $_POST['password'];

    // Buscar el usuario por su dirección de correo electrónico
    $sql = "SELECT * FROM users WHERE user_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows == 1) {
        // Obtener la fila del resultado
        $row = $result->fetch_assoc();

        // Verificar la contraseña usando password_verify
        if (password_verify($password, $row['user_password'])) {
            // Contraseña válida, redirigir según el tipo de usuario
            if ($row["usertype"] == "user") {
                header("location: index.php");
            } elseif ($row["usertype"] == "admin") {
                header("location: Admin_panel/index.php");
            }
        } else {
            // Contraseña inválida
            echo '<script>
                window.location.href = "signin.php";
                alert("Inicio de sesión fallido. Correo y/o contraseña inválidos. Intente de nuevo.");
            </script>';
        }
    } else {
        // Usuario no encontrado
        echo '<script>
            window.location.href = "signin.php";
            alert("Inicio de sesión fallido. Correo y/o contraseña inválidos. Intente de nuevo.");
        </script>';
    }
}
?>
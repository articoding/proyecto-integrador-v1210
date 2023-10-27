
<?php
$user_name = $_POST['user_name'];
$user_lastname = $_POST['user_lastname'];
$user_birthdate = $_POST['user_birthdate'];
$user_email = $_POST['user_email'];
/*$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);*/



$conn = new mysqli('localhost', 'root', '', 'db_pi');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO users (user_name, user_lastname, user_birthdate, user_email, user_password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $user_name, $user_lastname, $user_birthdate, $user_email, $user_password);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>

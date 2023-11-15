
<?php
$username = $_POST['username'];
$user_lastname = $_POST['user_lastname'];
$user_birthdate = $_POST['user_birthdate'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$hashed_password = password_hash($user_password, PASSWORD_BCRYPT);


$conn = new mysqli('localhost', 'easyappointments', 'easy_32point', 'easyappointments');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO users (username, user_lastname, user_birthdate, user_email, user_password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $user_lastname, $user_birthdate, $user_email, $hashed_password);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
    header("Location: index.php");
}
?>
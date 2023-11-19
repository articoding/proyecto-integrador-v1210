<?php 

class Database {

private $hostname = "localhost";
private $database = "lizbethh_easyappointments";
private $username = "lizbethh";
private $password = "Conejabolita183$";
private $charset = "utf8";

function conectar() {
  try{
  $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
  ];

  $pdo = new PDO($conexion, $this->username, $this->password, $options);

  return $pdo;

}catch(PDOException $e) {
  echo 'Error conection: ' . $e->getMessage();
  exit;

}
}

}

?>

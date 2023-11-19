<?php

$servidor = "localhost";
$db = "lizbethh_easyappointments";
$username = "lizbethh";
$password = "Conejabolita183$";

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
  
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
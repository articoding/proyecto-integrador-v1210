<?php

$servidor = "localhost";
$db = "easyappointments";
$username = "easyappointments";
$password = "easy_32point";

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
  
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
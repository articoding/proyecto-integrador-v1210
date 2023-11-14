<?php

    $servername = "localhost";
    $username = "easyappointments";
    $password = "easy_32point";
    $dbname = "easyappointments";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    echo "";


?>
<?php

    $servername = "localhost";
    $username = "lizbethh";
    $password = "Conejabolita183$";
    $dbname = "lizbethh_easyappointments";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    echo "";


?>
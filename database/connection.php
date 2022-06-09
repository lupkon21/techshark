<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "techshark";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn -> connect_error) {
        die("Connection to database failed...");
    }

    $conn->set_charset("utf8");
?>
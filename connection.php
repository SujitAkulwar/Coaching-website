<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "q";

    $con = new mysqli($servername,$username,$password,$dbname);

    if ($con->error) {
        die("Connection failed: " . $con->error);
    }

    
?>
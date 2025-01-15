<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="mydb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Failed " . $conn->connect_error);
        // die(mysqli_error($conn));
        // both line perform same operation.
    }
    
?>
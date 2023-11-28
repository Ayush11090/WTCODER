<?php
    $server ="localhost";
    $user = "root";
    $password = "";
    $database = "employee";

    $conn = mysqli_connect($server,$user, $password,$database);

    if(!$conn){
        die(mysqli_error($conn));
    }
?>
<?php
   $server = "localhost";
   $user = "root";
   $password = "";
   $database = "UserDetails";

   $conn = mysqli_connect($server,$user, $password, $database);

   if(!$conn){
      die(mysqli_error($conn));
   }

?>
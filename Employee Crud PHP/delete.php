<?php 
        include 'connect.php';
        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid'];
            $sql = "DELETE FROM `employee` WHERE `id` = $id";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                echo(mysqli_error($conn));
            }else{
                header('location:display.php');
        }
        }
        
?>

<?php 
        include 'connect.php';
        $sql = "select * from `employee`";

        $result = mysqli_query($conn, $sql);
       
        if(!$result){
            echo(mysqli_error($conn));
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1 class='d-flex '>Employee Details</h1>
    <button class="btn btn-primary"><a class="text-light" href="register.php"> Register</a></button>
<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Salary</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
    <?php
    if($result){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $gender = $row['gender'];
            $number = $row['number'];
            $salary = $row['salary'];
            echo '<tbody>
                        <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$number.'</td>
                        <td>'.$salary.'</td>
                        <td>
                        <button class="btn btn-primary "><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a></button>
                        </td>
                        </tr>
                  </tbody>';
        }
        
    }
     
    ?>
  
</table>
    </div>
</body>
</html>
<?php 
    $user = 0;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        include('connect.php');
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $salary = $_POST['salary'];
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
        } 
        $sql = "INSERT INTO `employee` (`id`, `name`, `gender`, `number`, `salary`) VALUES (NULL, '$name', '$gender', '$number', $salary);";

        $result = mysqli_query($conn, $sql);
       
        if(!$result){
            echo(mysqli_error($conn));
        }else{
           $user =1;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container">
<form action="register.php" method = "post">
  <div class="mb-3">
    <label for="name " class="form-label">Name</label>
    <input type="text" name = "name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">gender</label>
    <input type="text" class="form-control" id="gender" name = "gender">
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Mob No</label>
    <input type="text" name="number" class="form-control" id="number" >
  </div>
  <div class="mb-3">
    <label for="salary" class="form-label">Salary</label>
    <input type="text" name="salary" class="form-control" id="salary" >
  </div>

  <button type="submit" name="submit"class="btn btn-primary">Submit</button>
  <?php
  if($user == 1){
     header('location:display.php');
  }
  ?>
</form>
</div>
</body>
</html>
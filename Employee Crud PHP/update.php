<?php 

   include('connect.php');
       
    $id = $_GET['updateid'];
    $sql = "select * from `employee` where id = $id";
    $result = mysqli_query($conn, $sql); 
    if($result){
        $row =mysqli_fetch_assoc($result);
        $name = $row['name'];
        $gender = $row['gender'];
        $number = $row['number'];
        $salary = $row['salary'];
    }
    if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $number = $_POST['number'];
            $salary = $_POST['salary'];
            $sql = "UPDATE `employee` SET `name` = '$name', `gender` = '$gender', `number` = '$number' , `salary` = $salary WHERE `id` = $id";

        $result = mysqli_query($conn, $sql);
       
        if($result){
            header('location:display.php');
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
<form  method = "post">
  <div class="mb-3">
    <label for="name " class="form-label">Name</label>
    <input type="text" name = "name" class="form-control" id="name" value = <?php echo $name?>>
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="text" class="form-control" id="gender" name = "gender"value = <?php echo $gender?>>
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Mob No</label>
    <input type="text" name="number" class="form-control" id="number" value= <?php echo $number?>>
  </div>
  <div class="mb-3">
    <label for="salary" class="form-label">Salary</label>
    <input type="text" name="salary" class="form-control" id="salary" value=<?php echo $salary?>>
  </div>
  <button type="submit" name="submit"class="btn btn-primary">Update</button>

</form>
</div>
</body>
</html>
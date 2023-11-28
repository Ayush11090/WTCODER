<?php 
$user = 0;
$success = 0;

    if($_SERVER['REQUEST_METHOD']=='POST'){


    include 'connection.php';

       $email = $_POST['email'];
  
      $password = $_POST['password'];
    $sql = "select * from usera where email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    if($result){
      if(mysqli_num_rows($result)>0){
        session_start();
        $user = 1;
        $success= 1;
        $_SESSION['username'] = $email;
      header('location:welcome.php');
      }
    }else{
       $user = 0;
       $success = 0;
    }
  }
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <h1>Login Page</h1>
  <div class="w-25 mt-5 d-flex justify-content-center align-items-cente ">
  <form action="login.php" method = "post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit"class="btn btn-primary">Submit</button>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>  
</body>
</html>

<?php
if($success == 1){
    echo '<h1>Login Successfully </h1>';
}
?> 

<?php
if($user == 1){
    echo '<h1>User Exist</h1>';
}
?> 
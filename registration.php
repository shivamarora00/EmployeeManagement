<?php

$conn = mysqli_connect('localhost','root','','crud');
if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $salary = $_POST['salary'];
    $mobile= $_POST['contactno'];

    $sql = "INSERT INTO `addon` (`id`, `name`, `email_id`, `password`, `salary`, `contactno`) VALUES (NULL, '$name', '$email', '$pass', '$salary', '$mobile')";

    $result = mysqli_query($conn,$sql);

    if ($result) {
        // echo "data inserted successfully";
      header('location:main.php');
      
    }else {
        echo "find error--->".mysqli_error($conn);
    }
}





?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
 <div class="container my-5">
 <form method = "post">
  <div class="mb-4">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="enter your full name" name="name" autocomplete="off">
  </div>
  <div class="mb-4">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="enter your email id" name="email" autocomplete="off">
  </div>
  <div class="mb-4">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="enter your password" name="password" autocomplete="off">
  </div>
  <div class="mb-4">
    <label>Salary</label>
    <input type="number" class="form-control" placeholder="amount" name="salary" autocomplete="off">
  </div>
  <div class="mb-4">
    <label>Contact</label>
    <input type="number" class="form-control" placeholder="enter your phone number" name="contactno" autocomplete="off">
  </div>
  

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
 </div>

  </body>
</html>
<?php

$conn = mysqli_connect('localhost','root','','crud');
$id = $_GET['updatedata'];

$sql = "SELECT * FROM `addon` where id = '$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email= $row['email_id'];
$pass = $row['password'];
$salary = $row['salary'];
$mobile = $row['contactno'];

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
  $name = $row['name'];
  $email= $row['email_id'];
  $pass = $row['password'];
  $salary = $row['salary'];
  $mobile = $row['contactno'];



    $sql = "UPDATE `addon` SET `name` = '$name', `email_id` = '$email', `password` = '$pass' ,`salary` = '$salary', `contactno` = '$mobile' WHERE `addon`.`id` = '$id'";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo "data updated  successfully";
      header('location:main.php');
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
    <input type="text" class="form-control" placeholder="enter your full name" name="name" autocomplete="off" value= <?php echo $name;?> >
  </div>
  <div class="mb-4">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="enter your email id" name="email" autocomplete="off" value= <?php echo $email;?> >
  </div>
  <div class="mb-4">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="enter your password" name="password" autocomplete="off" value= <?php echo $pass;?>>
  </div>
  <div class="mb-4">
    <label>Salary</label>
    <input type="number" class="form-control" placeholder="amount" name="salary" autocomplete="off" value= <?php echo $salary;?> >
  </div>
  <div class="mb-4">
    <label>Contact</label>
    <input type="number" class="form-control" placeholder="enter your phone number" name="contactno" autocomplete="off" value= <?php echo $mobile;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
 </div>

  </body>
</html>
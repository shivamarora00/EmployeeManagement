<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container ">
    <h1 class="my-4">Employee Mangement Software</h1>
    <button type="submit" class="btn btn-primary my-5"><a href="registration.php" class="text-light" >  Add Users </a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Password</th>
      <th scope = "col">Salary</th>
      <th scope = "col">Contact</th>
      <th scope = "col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql = "SELECT * FROM `addon`";
$conn = mysqli_connect('localhost','root','','crud');
$result = mysqli_query($conn,$sql);

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
   
    $id = $row['id'];
    $name = $row['name'];
    $email= $row['email_id'];
    $pass = $row['password'];
    $salary = $row['salary'];
    $mobile = $row['contactno'];
    echo 
     '<tr>
      <th scope="row">'. $id .'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.  $pass.'</td>
      <td>'.'Rs'.' '. $salary.'</td>
      <td>'.$mobile.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php?updatedata='.$id.'" class="text-light">  Update  </a> </button>
      <button class="btn btn-danger"><a href="delete.php?deletedata='.$id.'" class="text-light"> Delete   </a>   </button>
    </td>
    </tr>';
  }


}

?>


   
  </tbody>
</table>


    </div>
    
</body>
</html>
<?php
$conn = mysqli_connect('localhost','root','','crud');
if (isset($_GET['deletedata'])) {
  $id=$_GET['deletedata'];


  $sql= "DELETE FROM addon WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  if ($result) {
header('location:main.php');
  }
 
}


?>
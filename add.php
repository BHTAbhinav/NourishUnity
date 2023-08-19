<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'dbconnect.php';
  $name=$_POST["name"];
  $email=$_POST["email"];
  $amount=$_POST["amount"];
  
  $sql="INSERT INTO userdata (username,email,amount)
  VALUES(\"$name\",\"$email\",\"$amount\")";
    
  $result=mysqli_query($conn,$sql);
//   header("Location:#");
header("location:javascript://history.go(-1)");
}

?>
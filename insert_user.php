<?php

  include("connection.php");

  if(isset($_POST['signup'])){

    $uname   = $_POST['txtsignname'];
  	$email   = $_POST['txtsignemail'];
  	$pass    = $_POST['txtsignpass'];
  	$num     = $_POST['txtsignnumber'];


      $insert = "insert into usermaster
      (User_Name,User_Email,User_Password,User_Mobile)
      values('$uname','$email','$pass','$num')";

      $query = mysqli_query($con,$insert);

      if($query){
        echo "<script>alert('Signup Successfully')</script>";
        exit();	
      } 

      else
      {
        echo "<script>alert('Signup failed')</script>";
      }


  }
?>
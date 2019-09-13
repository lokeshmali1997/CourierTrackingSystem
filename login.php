<?php

  session_start();
  $username = "" ;

 include("connection.php");

 if(isset($_POST['login'])) {
 	
 	$email = $_POST['txtloguser'];
 	$pass = $_POST['txtlogpass'];

   
   $select_user = "select * from usermaster where User_Email = '$email' AND User_Password = '$pass'";

	$query = mysqli_query($con,$select_user	);

   $check_user = mysqli_num_rows($query);

   if($check_user == 1)
   {
    $row = mysqli_fetch_assoc($query);
     
    $user = $row["User_Name"];
    $userid = $row["User_ID"];
    $_SESSION["userid"] = $userid; 
    $_SESSION["username"] = $user;


   	echo "<script>window.open('customer/customer.php','_self')</script>";
   }
   else
   {
   	echo "<script>alert('Email and password incorrect, try again ')</script>";
   }


 }


 if(!isset($_SESSION["username"]))
   {
    $username = "";
   }
   else
   {
     $username = $_SESSION["username"];
   }

?>
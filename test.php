<?php
session_start();
 include("connection.php");



 if(!isset($_SESSION["username"]))
 {
  echo "<script>alert('Please login')</script>";
  echo "<script>window.open('index.php','_self')</script>"; 
 
 }

else
{
	echo "<script>window.open('customer/customer.php','_self')</script>";
}

 
 

?>




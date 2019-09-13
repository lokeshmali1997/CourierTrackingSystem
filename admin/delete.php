<?php



$email =$_POST['txtadminemail'];
$pass = $_POST['txtadminpass'];

if(isset($_POST['btnlogin']))
{

if($email="loky1218@gmail.com" && $pass="loky1218")
{
	echo "<script>alert('Login Successfully ')</script>";
	echo "<script>window.open('indexadmin.php','_self')</script>";
   }
   else
   {
  echo "<script>alert('Email and password incorrect, try again ')</script>";
   }

}

?>
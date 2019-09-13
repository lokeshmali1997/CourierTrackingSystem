<?php
session_start();


include("../connection.php");
$userid = $_SESSION["userid"];

$username=$_SESSION["username"];

$select = "select * from usermaster where User_Name ='$username'";

 $query1 = mysqli_query($con,$select);

  $row = mysqli_fetch_assoc($query1);
     
    $username = $row["User_Name"];
    $usernumber = $row["User_Mobile"];
    $useremail = $row["User_Email"];
    $userpass = $row["User_Password"];



if(isset($_POST['btnupadteuser']))
{

   $username = $_POST['txtupdatename'];
   $usernumber = $_POST['txtupdatenumber'];
   $useremail = $_POST['txtupdateemail'];
   $userpass = $_POST['txtupdatepass'];




   $update = "update usermaster  set User_Name='$username',User_Email='$useremail',User_Password='$userpass',User_Mobile=$usernumber where User_ID = $userid ";


  $query = mysqli_query($con,$update);

   if($query)
     {
       echo "<script>alert('Update Successfully')</script>";
     }
   else
   {
   	 echo "<script>alert('Update Not Successfully, try again ')</script>";
   }


}



?>
<?php
include("../connection.php");

if(isset($_POST['btnapproved'])){

	$sdate = $_POST['txtshceduldate'];
    $pid   = $_POST['txttrackno'];
    $statusa = "Approved";

    $insert1 = "insert into trackingmaster(productid,scheduleddate)
      values($pid,'$sdate')";

      $update = "update product set status = '$statusa' where id = $pid ";
     
$sql = $insert1.";".$update;


$query = mysqli_multi_query($con,$sql);

      if($query){

        echo "<script>alert('Your Courier Booking Approved')</script>";
        echo "<script>window.open('indexadmin.php','_self')</script>";
        exit();	
      } 

      else
      {
        echo "<script>alert('Courier Booking Not Approved')</script>";
      }



}

?>
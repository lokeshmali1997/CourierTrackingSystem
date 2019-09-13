<?php

  include("connection.php");

  if(isset($_POST['btnbook'])){
    
    $userid =  $_SESSION["userid"];
    $bookdate      = date("d/M/Y");
    $recname       = $_POST['txtrecname']; 
    $recnumber     = $_POST['txtrecnumber'];
    $recemail      = $_POST['txtrecemail'];
    $recaddress    = $_POST['txtrecaddress'];    
    $bookname      = $_POST['txtbookname'];
    $bookemail     = $_POST['txtbookemail'];
    $booknumber    = $_POST['txtbooknumber'];
    $origin        = $_POST['txtorigin'];
    $destination   = $_POST['txtdestination'];
    $service       = $_POST['ddlservice'];
    $weight        = $_POST['txtweight'];
    $length        = $_POST['txtlength'];
    $width         = $_POST['txtwidth'];
    $height        = $_POST['txtheight'];
    $status        = "Pendding";


    
  
      $insert1 = "insert into receiver(name,number,email,address)
      values('$recname','$recnumber','$recemail','$recaddress')";
      
      $receiver = "";
      if(mysqli_query($con,$insert1))
      {
        $receiver = mysqli_insert_id($con);        
      }

 
      $insert2 = "insert into sender(name,email,number)
      values('$bookname','$bookemail','$booknumber')";
      
      $sender = "";
      if(mysqli_query($con,$insert2))
      {
        $sender = mysqli_insert_id($con);
      }
      
  

  $insert3 = "insert into product(userid,bookingdate,origin,destination,service,weight,length,width,height,receiverid,senderid,status)
            values($userid,'$bookdate','$origin','$destination','$service',$weight,$length,$width,$height,$receiver,$sender,'$status')";

      


      $query = mysqli_query($con,$insert3);

      if($query){

        echo "<script>alert('data Successfully insert')</script>";
        exit();	
      } 

      else
      {
        echo "<script>alert('data insert failed')</script>";
      }



}


?>
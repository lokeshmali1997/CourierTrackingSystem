<?php

include("connection.php");


if(isset($_POST['btntrack']))
{
  $div = "block";

$pid = $_POST['tracknumber'];

$select1 = "select * from trackingmaster where productid = $pid ";

$query1 = mysqli_query($con,$select1);

 while( $row1 = mysqli_fetch_assoc($query1))
  {    
    $sdate = $row1['scheduleddate'];
  }


 $select2 = "select * from Product where id = $pid";

   $query2 = mysqli_query($con,$select2);

  while($row2 = mysqli_fetch_assoc($query2)){
     
    
    $bookdate = $row2['bookingdate'];
    $type = $row2['service'];
    $from = $row2['origin'];
    $to = $row2['destination'];
    $recid = $row2['receiverid'];
    $senid = $row2['senderid'];

}
    
$select3 = "select * from sender where id=$senid ";
                            $query3 = mysqli_query($con,$select3);
      
                            while($row3 = mysqli_fetch_assoc($query3)){
        
                                  $senname  = $row3['name'];
                                  $sennumber  = $row3['number'];
                                  $senemail  = $row3['email'];
                                
                                  }

  $select4 = "select * from receiver where id=$recid ";
                            $query4 = mysqli_query($con,$select4);
      
                            while($row4 = mysqli_fetch_assoc($query4)){
        
                                  $recemail  = $row4['email'];
                                  $recnumber  = $row4['number'];
                                  $recaddress  = $row4['address'];
                                
                                  }

                                  
}
?>
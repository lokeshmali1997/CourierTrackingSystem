
<?php 
 session_start();

include("../connection.php");

$select = "select * from usermaster where User_ID = 5";
 $query1 = mysqli_query($con,$select);           
              while($row = mysqli_fetch_assoc($query1)){
                                     
      
                   $uname = 
                   $row["User_Name"];
                   $usernumber = $row["User_Mobile"];
                   $useremail = $row["User_Email"];
                   $userpass = $row["User_Password"];
}

if (isset($_POST['sendemail'])) {
  
/*$to = "rishisen1218@gmail.com";
$subject = "verify your email";

$msg = " Tracking number 10001 ";

$header  = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .=  'From: <lokeshmali1997@gmail.com>' . "\r\n";*/
$header = "From : lokeshmali1997@gmail.com";

if(mail("rishisen1218@gmail.com","helloooo","10001",$header))
{

echo "<script>alert('email sent')</script>";
}
else{
echo "<script>alert('email not sent')</script>";
}
}


?>
<html lang="en">

<head>

  <link rel="icon"  href="../img/titleimg.jpg" />
     <title>Tracking System</title
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="assets/css/demo.css">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->

<style type="text/css" >
  .dimg{
    width: 20px;
    height: 20px;
  }


</style>
<script type="text/javascript">
  
    $(document).ready(function(){
        $("#manage").click(function(){
           $("#form1").css("display", "none");  
          $("#form2").css("display", "block");
                
          });
      });
</script>
</head>

<body>
  <!-- WRAPPER -->
  <form method="POST">
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar row navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="col-md-3 navbar-header">
      <a class="navbar-brand" href="../index.php"><img src="logo1.png"  style="margin-top: -5px;height: 50px"></a>
    </div>
      <div class="col-md-3"></div>
      <div class="col-md-4">
    <ul class="nav navbar-nav"  >
         </ul>
</div>  
        
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../img/user.png" class="img-circle" alt="Avatar"> <span><!-- <?php echo $_SESSION["username"]; ?> --></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li style="margin-top: 50px;"><a href="indexadmin.php" class="active" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li style="margin-top: 10px;"><a href="" class="" ><i class="lnr lnr-screen"></i> <span>Manage</span></a></li>
            <li style="margin-top: 10px;"><a href="#" class=""><i class="lnr lnr-printer"></i> <span>Shipping update</span></a></li>
            <li style="margin-top: 10px;"><a href="client.php" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
            
            <li style="margin-top: 10px;"><a href="logout.php" ><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h3 class="panelnel-title">View Book Shipping</h3>
              <p class="panel-subtitle">Date : <?php echo date("d/M/Y"); ?></p>
            </div>
            <div class="panel-body">
              <div class="row " id="form1" >
                             <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>password</th>   
                       <th>Manage</th>
                        <th>Remove</th>

                      </tr>
                    </thead>
                    <tbody>
                    <?php 

              




  
     
    
    

$select = "select * from usermaster where User_ID = 5";
 $query1 = mysqli_query($con,$select);           
              while($row = mysqli_fetch_assoc($query1)){
                                     
      
                   $username = $row["User_Name"];
                   $usernumber = $row["User_Mobile"];
                   $useremail = $row["User_Email"];
                   $userpass = $row["User_Password"];

                  echo '<tr>  
                         <td>  '.$username.' </td>
                             <td>  '.$usernumber.' </td>
                             <td>  '.$useremail.' </td>
                             <td>  '.$userpass.' </td>  
                                                             <td style="padding-top: 14px;"><a href="#" id="manage" class="label label-primary">Manage</a></td>
                               <td class="btd"><a href="#" name=""><img src="delete.png" class="dimg" /></a></td>
                                    </tr> ';} 





                                    ?>  
                        
                    
                    </tbody>
                  </table>  
                
                          
              
            </div>
            
            
          </div>
          <!-- END OVERVIEW -->
          <div class="row">
          
            <input type="submit" name="sendemail" value="sendemail">
          </div>
          
          </div>
          
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
  
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="assets/vendor/chartist/js/chartist.min.js"></script>
  <script src="assets/scripts/klorofil-common.js"></script>
  
</body>

</html>

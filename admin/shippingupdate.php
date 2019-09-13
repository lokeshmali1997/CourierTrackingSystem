

<?php
 
 session_start();
include("../connection.php");


$id = $_GET['id'];
	
$select = "select * from product where id = $id";
$query = mysqli_query($con,$select);
if($row = mysqli_fetch_assoc($query) )
{
    $pid = $row['id'];
    $type = $row['service'];
    $bookdate = $row['bookingdate'];
   
}

$select = "select * from trackingmaster where id = $id";
$query = mysqli_query($con,$select);
if($row = mysqli_fetch_assoc($query))
{
  
    $schedate = $row['scheduleddate'];
   
}

                                 
if(isset($_POST['btnupdate']))
{
	$updateon       = $_POST['txtupdateon']; 
    $location     = $_POST['txtlocation'];
    $current      = $_POST['txtcurrent'];
    $remark    = $_POST['txtremark'];

 $insert1 = "insert into shippingstatus(updateon,location,current,remark,trackid)
      values('$updateon','$location','$current','$remark',$id)";

   $query11 = mysqli_query($con,$insert1);

      if($query11){

        echo "<script>alert('data Successfully Update')</script>";
        echo "<script>window.open('update.php','_self')</script>";
        exit();	
      } 

      else
      {
        echo "<script>alert('data insert failed')</script>";
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
						<li style="margin-top: 50px;"><a href="indexadmin.php" class="" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li style="margin-top: 10px;"><a href="#" class="" ><i class="lnr lnr-screen"></i> <span>Manage</span></a></li>
						<li style="margin-top: 10px;"><a href="#" class="active"><i class="lnr lnr-printer"></i> <span>Shipping Update</span></a></li>
						<li style="margin-top: 10px;"><a href="client.php" class=""><i class="lnr lnr-user"></i> <span>Client Manage</span></a></li>
						
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
						
							<div id="form2" style="display:">
							<h4>Shipping Details</h4>
                                <div class="row " >
                           <div class="col-md-4">
                             <div class="form-group">
                              <label>Tracking no*</label>
                               <input type="text" ID="txtsenname" class="form-control"  name="txttrackno" value=<?php echo $pid; ?> />
                     
                             </div>
                            </div>
                          <div class="col-md-4">
                           <div class="form-group">
                      <label>Type</label>
                       <input type="text" ID="txtsennumber" class="form-control"  name="txtrecnumber" value=<?php echo $type; ?> />
                           </div>
                          </div>
                          <div class="col-md-4">
                           <div class="form-group">
                      <label>Booking Date</label>
                       <input type="text" ID="txtsenemail" class="form-control"  name="txtrecnumber" value=<?php echo $bookdate; ?>  />
                           </div>
                          </div>
                      </div>
                       <div class="row " >
                           <div class="col-md-4">
                             <div class="form-group">
                              <label>Scheduled Date</label>
                               <input type="text" ID="txtrecemail"class="form-control" name="txtshceduldate" value=<?php echo $schedate; ?> />
                     
                             </div>
                            </div>
                         
                          </div>
                              
							</div>
					</div>
          <h4>Shipping Update Status</h4>
          <table class="table table-bordered">
    <thead>
     
      <tr>
        <th>Upadated On </th>
        <th>Location</th>
        <th>Current Status</th>
        <th>Remark</th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td><input type="text" name="txtupdateon" value='<?php echo date("Y-m-d h:i:sa"); ?>' > </td>
      
        <td><input type="text" name="txtlocation"></td>
        <td><input type="text" name="txtcurrent"></td>
        <td><input type="text" name="txtremark"></td>
      </tr>
           
     
     

    </tbody>
  </table>
            <div class="row" style="margin-top: 20px;">
                        <div class="col-md-5"></div>
                        <div class="col-md-2">
                          <input type="submit" id="btnapproved" name="btnupdate" value="Update" class="btn btn-success"/></div>
                        <div class="col-md-5"></div>
                
              </div>
					<!-- END OVERVIEW -->
					
					
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

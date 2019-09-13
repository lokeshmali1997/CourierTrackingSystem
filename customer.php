<?php
session_start();

?>
<html lang="en">
<head>
  <title>Tracking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/e487c4e07f.js"></script>
  <link rel="stylesheet" href="index.css"/>
  <style type="text/css">  
   	 .row{
  	 	margin:0px;
  	 }
  	 .col-md-12{
  	 	padding: 0px;
  	 }
  
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background:linear-gradient(120deg,#3498db,#8e44ad);
  background:linear-gradient(120deg,rgba(52, 152, 219,1),rgba(142, 68, 173,1));
  /*background-color: rgb(0,0,0);  Fallback color 
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 10;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}



</style>
<!--
<script type="text/javascript">
     $("").onclik("click",function(){
       $("").hide();
     });
     $("").onclick(function(){
       $("").hide();
     });
     
   </script>
  -->
</head>
<body>


 <!-- Naviagation bar -->
 <nav class="row navbar navbar-defualt navbar-fixed-top">
  <div class="container-fuild" style="margin-top: 10px;">
    <div class="col-md-3 navbar-header">
      <a class="navbar-brand" href="#"><img src="img/logo1.png"  style="margin-top: -15px;height: 50px"></a>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-4">
    <ul class="nav navbar-nav"  >
      <li  ><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Track Order</a></li>
    </ul>
</div>
<div class="col-md-2"><?php echo $_SESSION["username"]; ?></div>
<!--
    <div class="col-md-1" style="">
    	<button type="button"  class="nav-btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign up</button></div>
    	<div class="col-md-1" style="">
    	<button type="button" class="nav-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> </div>-->
  </div>
</nav>
  <!--End  -->
  <!-- Slider -->
<div class="container-fuild" style="margin-top:70px;background-color:">
 <div class="row">

</div>
<!-- End -->
<!-- Middle Selection -->


<!-- End -->
<!-- Middle Selection second -->
    
    
<!-- End Middle Selection second -->

<!-- Footer -->
<div class="row footer"  style="margin-top: 30px;">
  <div class="col-md-3 foot1" >
    <img src="img/logo1.png"  style="margin-top:5px;height: 50px"></a>
    <ul>
    <li><i class="fas fa-mobile-alt"></i>+91 02933 456 234</li>
    <li><i class="fas fa-envelope"></i>support.cwtracking@gmail.com</li>
    <li><i class="fas fa-map-marker-alt"></i></i>Raichand colony chawani sheoganj</li>
  </ul>
  </div>
  <div class="col-md-3 foot2">
    <h4>Our Company</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Track Order</a></li>
      </ul>
  </div>
  <div class="col-md-3">
    <h4>Social Supports</h4>
     <div class="social-icon">
   <a class="btn-icon" href="#">
   <i class="fab fa-facebook-f"></i>
   </a>
   <a class="btn-icon" href="#">
   <i class="fab fa-twitter"></i>
   </a>
   <a class="btn-icon" href="#">
   <i class="fab fa-google"></i>
   </a>
   <a class="btn-icon" href="#">
   <i class="fab fa-instagram"></i>
   </a>
   <a class="btn-icon" href="#">
   <i class="fab fa-youtube"></i>
   </a>
 </div>
      
  </div>
  <div class="col-md-3" style="background-color:;">
    <h4>Track Your Order</h4>
    <input type="text" class="footertxt" name="" placeholder="Enter Track Number" /><br/>
    <input type="button" name="" value="Track" class="footerbtn"/>
  </div>
  
</div>
<!-- End -->
<!-- footer  second section -->
<div class="row" style="background-color: #f6fafd">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <p style="text-align: center;margin-top:5px;font-size: 12px;">&copy;2019 CourierWala Tracking System.All Rights Reserved. </p>
  </div>
  <div class="col-md-3"></div>
</div>
  <!-- end -->
  <!-- login form -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    

    
      <div class="row login">

    <div class="col-md-12  ">
       <div class="login-form">
        <div>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
       <h1>Login</h1>
       <div class="txtb">
        <input type="text" name="txtloguser">
        <span data-placeholder="Username"></span>
     </div>
     <div class="txtb">
       <input type="text" name="txtlogpass">
       <span data-placeholder="password"></span>
     </div>
       <input type="submit" class="btn-log" value="Login" >
        <div class="bottom-text" style="margin:10px;text-align: left;  ">
         <a href="">Forget password</a>
       </div>
       <div class="bottom-text">
         Don't have account?Sign up
       </div>

       </div>
    </div>
  </div>
   <script type="text/javascript">
     $(".txtb input").on("focus",function(){
       $(this).addClass("focus");
     });
     $(".txtb input").on("blur",function(){
      if($(this).val() == "")
       $(this).removeClass("focus");
     });
     
   </script>
     

  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <!-- End -->
  <!-- Sign up -->
  <div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    

    
      <div class="row login">

    <div class="col-md-12  ">
       <div class="login-form">
        <div>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
       <h1>Sign up</h1>
      <div class="txtb">
        <input type="text" name="txtsignupemail" required="Enter the name">
        <span data-placeholder="Email"></span>
     </div> 
     <div class="txtb">
       <input type="text" name="txtlogpass"required="Enter the password">
       <span data-placeholder="password"></span>
     </div>
      <div class="txtb">
        <input type="text" name="txtsignupnumber" required="Enter the number">
        <span data-placeholder="Mobile Number"></span>
     </div>
     
       <input type="submit" class="btn-log" value="Login" >
       <div class="bottom-text">
         Do have account?Login
       </div>

       </div>
    </div>
  </div>
   <script type="text/javascript">
     $(".txtb input").on("focus",function(){
       $(this).addClass("focus");
     });
     $(".txtb input").on("blur",function(){
      if($(this).val() == "")
       $(this).removeClass("focus");
     });
     
   </script>
     

  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <!-- End -->


</div>

</body>
</html>

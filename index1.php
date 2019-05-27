<?php
include('config.php');
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Please Login !";
	  $color="black";
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="source/bootstrap/dist/css/bootstrap.css">
          <script src="source/bootstrap/dist/js/bootstrap.min.js"></script>
	      <script src="source/js/loginValidate.js"></script>
        <title>School Management System</title>
        <style>
  .bg-1 { 
       background-color: #1abc9c; /* Green */
        color: #ffffff;
    }
     .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  </style>
    </head>
    
    <!-- <div class="container-fluid bg-2 text-center">
    <body style="background-image:url('log.jpg')">
        <center>
      <div class="header"><h1><?php //echo variable_names('title') ?></h1></div>
      </center>
        <center>
            
	          <img src="source/images.jpg" class="img-responsive" />
	          <hr/>
            <?php //echo "<font size='4' color='$color'>$login_message</font>";?>
            </div> -->
            <!-- <div class="container"> -->

                <div class="container-fluid bg-1 text-center" id="log">
            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="POST"><br/>
                <input type="text" id="myid" name="myid" placeholder="your id" required style="padding:12px;font-size: 12px;color: black"><br/><br/><br/>
                <input type="password" id="mypassword" name="mypassword" placeholder="your password" required  style="padding: 12px;font-size: 12px ;color:black" /><br/><br/><br/>
                <input type="submit" value="Login" style="padding: 12px; color: black" />
            </form>
            </div>
            <!-- </div> -->
        </center>
    </body>
</html>

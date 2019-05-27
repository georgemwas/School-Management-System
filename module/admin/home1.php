<?php
include_once('main.php');
include('../../config.php');
?>
<!DOCTYPE html>
<html>
    <head>
    
    	<link rel="stylesheet" type="text/css" href="../../source/bootstrap/dist/css/bootstrap.css">
    	<style>
    		.bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
   .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;}
      .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}
.btn-default{
	background-color: #474e5d;
	color:#ffffff;
}
    	</style>
    </head>
    <body>
    	
			  <div class="header">
			  	<h1 style="color:black;";><?php echo variable_names('title'); ?></h1>
			  </div>
			  <div class="divtopcorner">
				    <!-- <img src="../../source/images.jpg" height="140" width="150" float="left" alt="School Management System"/> -->
				     <img src="../../source/images.jpg" width="150px" height="140px" float="left" class="img-thumbnail">
				</div>
			<br/><br/>
			<div class="menulista">
				<?php include('../../home.php'); ?>
				</div>
			  <hr/>
			  <div class="container-fluid bg-1 text-center">

			  <div align="center" class="maind">
								<h4 class="maind">Hi!admin <?php echo $check." ";?></h4>
							
								    <a class ="btn btn-default" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
								
						    </div>
						    <div class="main">
						    	<h>	

						    	</h>
						    	</div>
						    </div>
						    <div class="container-fluid bg-2 text-center">
						    <footer><?php include('../../footer.php'); ?></footer>
						    </div>
			 
		</body>
</html>

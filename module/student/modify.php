<?php
include_once('main.php');
include('../../config.php');
$st=mysqli_query($con,"SELECT password  FROM students WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

?>
<html>
    <head>
    	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/Header.css">
    <link rel="stylesheet" href="../../assets/css/codeintech.css">
	<title></title>
	<script src="../../jquery-3.2.1.min.js"></script>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
				<script src = "JS/modifyValidate.js"></script>
		</head>
		<style>
		input {
    text-align: center;
    background-color: gray;
           }
		
		</style>
    <body style="background-color: silver">
             		 
			 <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				
								<?php include('../../assets/student.php') ?>
								<div align="center">
								<h4>Hi!Student <?php echo $check." ";?> </h4>
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						 
		
			  <hr/>
			  
			  <div align="center" class="mod">
			  	<h1>Change Password</h1>
				
				<form  onsubmit="return modifyValidate();" action="modifysave.php" method="post">
			  <table border="1">
			  <tr>
			  <th>Student Password</th>
			 </tr>
			  <tr>
			  
			  <td><input type="text"  id="password" name="password" value="<?php echo $stinfo['password'];?>"/></td>
			</table>
			  <br/>
			  <input type="submit" value="Change Password"/>
			  </form>
								
								</div>
								<footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>


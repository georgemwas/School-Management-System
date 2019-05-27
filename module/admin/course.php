<?php
include_once('../../service/mysqlcon.php');
include('../../config.php');
$check=$_SESSION['login_id'];
$session=mysqli_query($con,"SELECT name  FROM admin WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
		    <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
				<script src = "JS/login_logout.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
			<div align="center">
				<ul>
				    <li class="manulist">
						    <a class ="btn btn-primary" href="index.php">Home</a>
                <a class ="btn btn-primary" href="addCourse.php">New Course</a>
                <a class ="btn btn-primary" href="viewCourse.php">View Course</a>
                <a class ="btn btn-primary" href="deleteCourse.php">Delete Course</a>
								<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div></li>
				</ul>
				</div>
			  <hr/>
			  <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

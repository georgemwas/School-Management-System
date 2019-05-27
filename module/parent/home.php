<?php
include_once('main.php');
include('../../config.php');

$st=mysqli_query($con,"SELECT *  FROM parents WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

?>
<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/Header.css">
    <link rel="stylesheet" href="../../assets/css/codeintech.css">
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
             		 
			 <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				<ul>
				    <li class="manulist" >
						    <a class ="menulista" href="index.php">Home</a>
						    <a class ="menulista" href="modify.php">Change Password</a>
						        <a class ="menulista" href="checkchild.php">Childs Information</a>
								<a class ="menulista" href="childcourse.php">Childs Course And Result</a>
								<a class ="menulista" href="childpayment.php">Child Payments</a>
								<a class ="menulista" href="childattendance.php">Childs Attendance</a>
								<a class ="menulista" href="childreport.php">Childs Report</a>
								
								<div align="center">
								<h4>Hi!Parents <?php echo $check." ";?> </h4>
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						 
				    
			
						</li>
				</ul>
			  <hr/>
			  
			  <div align="center">
			  	<h1>Parents Information</h1>
			  <table border="1">
			  <tr>
			  
			  <th>Parents ID</th>
			  <th>Parent Male Name</th>
			  <th>Parent Female Name</th>
			  <th>Parent Male Phone</th>
			  <th>Parent Female Phone</th>
			  <th>Student Address</th>
			  
			  
			  </tr>
			  <tr>
			  
			  <td><?php echo $stinfo['id'];?></td>
			  <td><?php echo $stinfo['fathername'];?></td>
			  <td><?php echo $stinfo['mothername'];?></td>
			  <td><?php echo $stinfo['fatherphone'];?></td>
			  <td><?php echo $stinfo['motherphone'];?></td>
			  <td><?php echo $stinfo['address'];?></td>
			  </tr>
			  
			  </div>
			  </table>
		<title><?php include('../../footer.php');?></title> 		
			
		</body>
</html>


<?php
include_once('main.php');
include('../../config.php');
$count=0;
$st=mysqli_query($con,"SELECT *  FROM staff WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

$attendmon = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$check' and  MONTH( DATE ) = MONTH( CURRENT_DATE ) and YEAR( DATE )=YEAR( CURRENT_DATE )";
$resmon = mysqli_query($con,$attendmon);

while($r=mysqli_fetch_array($resmon))
{
 $count+=1;
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
		    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
		    <link rel="stylesheet" type="text/css" href="../../assets/css/Footer..css">
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
				    <!-- <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/> -->
				</div>
			<br/><br/>
				<ul>
				       <li class="manulist" >
						    <a class ="btn btn-primary" href="index.php">Home</a>
							    <a class ="btn btn-primary" href="modify.php">Modify My Information</a>
								<a class ="btn btn-primary" href="salary.php">My Salary</a>
								<a class ="btn btn-primary" href="attendance.php">My Attendance</a>
								
								<div align="center">
								<h4>Hi!Staff <?php echo $check." ";?> </h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						 
				    
			
						</li>
				</ul>
			  <hr/>
			    <div align="center">
			  	<h1 style="background-color:orange;">My Salary</h1>
				<hr/>
			  <table border="1">
			  <tr>
			  <th>Staff Monthly Salary</th>
			 <th>Staff Payable Salary This Month</th>
			   </tr>
			  <tr>
			  <td><?php echo round($stinfo['salary']/12,2);?></td>
			 <td><?php echo round(($stinfo['salary']/300)*$count,2);?></td>
			  </tr>
			  
			  
			  </table>
								
								</div>
			<hr/>
			<footer><?php include('../../footer.php') ;?></footer>
		</body>
</html>


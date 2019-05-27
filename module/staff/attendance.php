<?php
include_once('main.php');
include('../../config.php');
?>
<html>
    <head>
		    <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
		    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
		    <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css>
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="staffAttendance.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body  onload="ajaxRequestToGetAttendancePresentThisMonth();" style="background-color: silver">
             		 
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
<br><br><br><br><br>
						 <div align="center">
<?php  
$attendmon = "SELECT * FROM attendance WHERE attendedid='$check'";
$resmon = mysqli_query($con,$attendmon);
echo "<tr> <th>Attend All Dates:</th></tr>";
while($r=mysqli_fetch_array($resmon))
{
 echo "<tr><<td>",$r['date'],"</td></tr>";

}
?>
<br><br><br> <br>
						 </div>
				    
			
						</li>
				</ul>
			  <hr/>
			<!--   <div align="center" style="background-color:orange;">
	
Select Attendance that you are present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendancePresentThisMonth();"   value="thismonth" id="present" name="present" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendancePresentAll();" value="all" id="present" name="present"/>
</div>	
<hr/>
<div align="center" >
<table id="mypresent" border="1">

</table>
</div>
<hr/>
<div align="center" style="background-color:gray;">
	
Select Attendance that you are absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceAbsentThisMonth();"   value="thismonth" id="absent" name="absent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceAbsentAll();" value="all" id="absent" name="absent"/>
</div>	
<hr/>
<div align="center" >
<table id="myabsent" border="1">

</table>
</div> -->

							
			<footer><?php include('../../footer.php'); ?></footer>				
		</body>
</html>


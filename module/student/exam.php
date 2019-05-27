<?php
include_once('main.php');
include('../../config.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
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
	            
		</head>
    <body  onload="ajaxRequestToGetCourseCurrentExamSchedule();" style="background-color: silver">
             		 
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
			  <div align="center" style="background-color:orange;">
	
Select Runing Course Exam Schedule:<select id="curcourse" onchange="ajaxRequestToGetCourseCurrentExamSchedule();" name="curcourse"><?php  


$classget = "SELECT  DISTINCT id,name FROM course where classid in(select DISTINCT classid from students where id='$check') and studentid='$check'";
$res= mysqli_query($con,$classget);

while($clnn=mysqli_fetch_array($res))
{
 echo '<option value="',$clnn['id'],'" >',$clnn['name'],'</option>';
   
}


?>
</select>
</div>	
<hr/>
<div align="center">
<table id="mycourseexamschedule" border="1" >
</table>
</div>


							
			<footer><?php include('../../footer.php'); ?></footer>				
		</body>
</html>


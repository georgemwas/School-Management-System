<?php
include_once('main.php');
include('../../config.php');


?>
<html>
    <head> <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
             <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
		    <script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="Attendance.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body  onload="ajaxRequestToGetAttendanceTeacherPresentThisMonth();" style="background-color: silver">
             		 
			 <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
      </button>
                 <a class="navbar-brand" href="#">GEOMSCHOOLS</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav ">
                  <!-- <li class="dropdown"> -->
                    <!-- <ul class="dropdown-menu"> -->
                   <li> <a class ="btn btn-primary" href="index.php">Home</a></li>
                               <li><a class ="btn btn-primary" href="teacherAttendance.php">TEACHER ATTENDANCE</a></li> 
                               <li> <a class ="btn btn-primary" href="staffAttendance.php">STAFF ATTENDANCE</a></li>
                               <li> <a class ="btn btn-primary" href="viewAttendance.php">VIEW ATTENDENCE</a></li>
                                
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
				
								<div align="center">
								<h4>Hi! <?php echo $check." ";?> </h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						 
				    
			
						</li>
				</ul>
			  <hr/>
			  <div align="center" style="background-color:orange;">
			  
			   Select your Teacher:<select id="teaid" name="teaid" onchange="ajaxRequestToGetAttendanceTeacherPresentThisMonth();" style="background-color:white;"><?php  


$classget = "SELECT  * FROM teachers ";
$res= mysqli_query($con,$classget);

while($cln=mysqli_fetch_array($res))
{
	
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}

?>

</select>

	<hr/>
Select Attendance Teacher present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceTeacherPresentThisMonth();"   value="thismonth" id="teapresent" name="teapresent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherPresentAll();" value="all" id="teapresent" name="teapresent"/>
</div>	
<hr/>
<div align="center" >
<table id="myteapresent" border="1">

</table>
</div>
<hr/>
<div align="center" style="background-color:gray;">
	
Select Attendance  Teacher absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceTeacherAbsentThisMonth();"   value="thismonth" id="teaabsent" name="teaabsent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherAbsentAll();" value="all" id="teaabsent" name="teaabsent"/>
</div>	
<hr/>
<div align="center" >
<table id="myteaabsent" border="1">

</table>
</div>

	<hr/>
	  <div align="center" style="background-color:orange;">
	Select your Staff:<select id="staffid" name="staffid" onchange="ajaxRequestToGetAttendanceStaffPresentThisMonth();" style="background-color:white;"><?php  


$classget = "SELECT  * FROM staff ";
$res= mysqli_query($con,$classget);
while($cln=mysqli_fetch_array($res))
{
	
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}

?>

</select>
<hr/>
Select Attendance Staff present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceStaffPresentThisMonth();"   value="thismonth" id="staffpresent" name="staffpresent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceStaffPresentAll();" value="all" id="staffpresent" name="staffpresent"/>
</div>	
<hr/>
<div align="center" >
<table id="mystaffpresent" border="1">

</table>
</div>
<hr/>
<div align="center" style="background-color:gray;">
	
Select Attendance  Staff absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceStaffAbsentThisMonth();"   value="thismonth" id="staffabsent" name="staffabsent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceStaffAbsentAll();" value="all" id="staffabsent" name="staffabsent"/>
</div>	
<hr/>
<div align="center" >
<table id="mystaffabsent" border="1">

</table>
</div>

		<footer><?php include('../../footer.php'); ?></footer>					
							
		</body>
</html>


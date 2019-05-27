<?php
include_once('main.php');
include('../../config.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
		    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" href="../../assets/css/codeintech.css">
            <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="Attendance.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body  onload="ajaxRequestToGetAttendancePresentThisMonth();" style="background-color: silver">
             		 
			 <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
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
                               <li><a class ="btn btn-primary" href="att.php">MAKE STUDENT ATTENDANCE</a></li> 
                               <li> <a class ="btn btn-primary" href="viewAttendance.php">VIEW MY ATTENDANCE</a></li>
                               <li> <a class ="btn btn-primary" href="viewAttendancest.php">VIEW STUDENT ATTENDANCE</a></li>
                                
                                
                                
                </ul>

            </div>
        </div>
    </nav>      
      <div class="codeintech">
        <h1 class="title"> </h1>
        <p class="hero-subtitle">SCHOOL MANAGEMENT SYSTEM</p></div>
			  <div align="center" style="background-color:orange;">
	
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
</div>

							
			<footer><?php include('../../footer.php'); ?></footer>				
		</body>
</html>


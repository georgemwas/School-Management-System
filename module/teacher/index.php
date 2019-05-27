<?php
include_once('main.php');
include('../../config.php');
?>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
    	
				<script src = "JS/login_logout.js"></script>
		</head>
    <body style="background-color: silver">
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
                 
                   <li> <a class ="btn btn-primary" href="index.php">Home</a></li>
                               <li><a class ="btn btn-primary" href="updateTeacher.php">UPDATE PROFILE</a></li> 
                               <li> <a class ="btn btn-primary" href="viewProfile.php">VIEW PROFILE</a></li>
                               <li> <a class ="btn btn-primary" href="course.php">STUDENTS GRADE</a></li>
                                <!-- <li><a class ="btn btn-primary" href="courses.php">COURSES</a></li> -->
                                 <li> <a class ="btn btn-primary" href="attendance.php">ATTENDANCE</a></li>
                                <!-- <li><a class ="btn btn-primary" href="exam.php">EXAM SCHEDULE</a></li> -->
                                <li><a class ="btn btn-primary" href="salary.php">SALARY</a></li>
<!--                                  <li> <a class ="btn btn-primary" href="report.php">REPORT</a></li>
                                <li><a class ="btn btn-primary" href="searchStudent.php">SEARCH STUDENT</a></li> -->
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
  
								<div align="center">
								<h4>Hi! <?php echo $check." ";?></h4>
								    <a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
			  
    <div class="codeintech">
        <h1 class="title"> </h1>
        <p class="hero-subtitle">SCHOOL MANAGEMENT SYSTEM</p></div>
 <footer><?php include('../../footer.php'); ?></footer> 
		</body>
</html>

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
    	<link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>

				 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEOMSCHOOLS</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/Header.css">
      <link rel="stylesheet" href="../../assets/css/codeintech.css">
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/images.jpg" height="250" width="250" alt="School Management System"/>
				</div>
			<br/><br/>
			<!-- 	<ul>
				    <li class="manulist">
						    <a class ="menulista" href="index.php">Home</a>
                <a class ="menulista" href="addTeacher.php">New Teacher</a>
                <a class ="menulista" href="viewTeacher.php">View Teacher</a>
                <a class ="menulista" href="updateTeacher.php">Update Teacher</a>
                <a class ="menulista" href="deleteTeacher.php">Delete Teacher</a> -->
							
					<!-- 		</li>
				</ul> -->
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
                               <li><a class ="btn btn-primary" href="addTeacher.php">NEW TEACHER</a></li> 
                               <li> <a class ="btn btn-primary" href="viewTeacher.php">VIEW TEACHER</a></li>
                               <li> <a class ="btn btn-primary" href="updateTeacher.php">UPDATE TEACHER</a></li>
                                <li><a class ="btn btn-primary" href="deleteTeacher.php">DELETE TAECHER</a></li>
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
    <div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
    <div class="codeintech">
        <h1 class="title">CODEINTECH </h1>
        <p class="hero-subtitle">SCHOOL MANAGEMENT SYSTEM</p>
        
    </div>
			  <hr/><br>
			  <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

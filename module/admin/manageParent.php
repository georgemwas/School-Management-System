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
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
		    <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
		    <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
		    <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <!-- <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/> -->
				</div>
			<br/><br/>
		
			
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
                               <li><a class ="btn btn-primary" href="addParent.php">NEW PARENT</a></li> 
                               <li> <a class ="btn btn-primary" href="viewParent.php">VIEW PARENT</a></li>
                               <li> <a class ="btn btn-primary" href="updateParent.php">UPDATE PARENT</a></li>
                                <li><a class ="btn btn-primary" href="deleteParent.php">DELETE PARENT</a></li>
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
            
                <br><br><br><br>
								<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>
				</ul>
				</div>
				</center>
			  <hr/><br><br><br><br><br><br><br><br><br><br><b></br>
			  <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

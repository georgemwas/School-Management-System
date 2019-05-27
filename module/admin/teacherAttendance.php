<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$sql = "SELECT * FROM teachers where id not in (select attendedid from attendance where date=CURDATE())";
$res= mysqli_query($con,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= "<form action='attendTeacher.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Present'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td></tr></form>';
}
?>
<html>
    <head>
		    <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
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
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Teacher Attandance List</h2><hr/>
              <table border="1">
                <tr>
                    <th>Click For Attendance</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>\
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

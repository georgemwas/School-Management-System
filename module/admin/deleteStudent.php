<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$sql = "SELECT * FROM students;";
$res= mysqli_query($con,$sql);
$string = "";
$images_dir = "../images/";
//<input type="checkbox" name="vehicle" value="Car">
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteStudentTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete' style='padding:15px;'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['sex'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['addmissiondate'].'</td><td>'.$row['address'].
    '</td><td>'.$row['parentid'].'</td><td>'.$row['classid'].
    "</td><td><img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>".'</td></tr></form>';
}
?>
<html>
    <head>
		     <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/images.jpg" height="140" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
            <!-- <center>
				<div class="">
                <?php// include('../../home.php'); ?>
                </div>
                </center> -->
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
                               <li><a class ="btn btn-primary" href="newStudent.php">NEW STUDENT</a></li> 
                               <li> <a class ="btn btn-primary" href="viewStudent.php">VIEW STUDENT</a></li>
                               <li> <a class ="btn btn-primary" href="updateStudent.php">UPDATE STUDENT</a></li>
                                <li><a class ="btn btn-primary" href="deleteStudent.php">DELETE STUDENT</a></li>
                                
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
            <h2>Delete Student</h2><hr/>
              <table border="1" class="lista">
                <tr>
                    <th>Select For Delete</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Addmission Date</th>
                    <th>Address</th>
                    <th>Parent Id</th>
                    <th>Class Id</th>
                    <th>Picture</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
         <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>


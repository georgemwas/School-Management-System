<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$sql = "SELECT * FROM teachers;";
$res= mysqli_query($con,$sql);
$string = "";
$images_dir = "../images/";
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['address'].'</td><td>'.$row['sex'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['hiredate'].'</td><td>'.$row['salary'].
    "</td><td><img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>".'</td></tr>';
}
?>
<html>
    <head>
		     <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchTeacher.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <!-- <img src="../../source/images.jpg" height="140" width="150" alt="School Management System"/> -->
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
								</li>
				</ul>
			  <hr/>
        <center>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getTeacher(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Teachers List</h2></center>
        <center>
            <table border="1" id='teacherList' class="lista">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Hire Date</th>
                    <th>Salary</th>
                    <th>Picture</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

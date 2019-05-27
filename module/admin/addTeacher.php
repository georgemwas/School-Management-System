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
        <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/newTeacherValidation.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/images.jpg" height="140" width="150" alt="School Management System"/>
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
            <h2>Teacher Registration.</h2><hr/>
            <form action="#" method="post" onsubmit="return newTeacherValidation();" enctype="multipart/form-data">
                <table cellpadding="6">
                    <tr>
                      <td>Teacher Id:</td>
                      <td><input id="teaId" type="text" name="teacherId" placeholder="Enter Id"></td>
                    </tr>
                    <tr>
                        <td>Teacher Name:</td>
                        <td><input id="teaName" type="text" name="teacherName" placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td>Teacher Password:</td>
                        <td><input id="teaPassword"type="text" name="teacherPassword" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td>Teacher Phone:</td>
                        <td><input id="teaPhone"type="text" name="teacherPhone" placeholder="Enter Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Teacher Email:</td>
                        <td><input id="teaEmail"type="text" name="teacherEmail" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>Teacher Address:</td>
                        <td><input id="teaAddress" type="text" name="teacherAddress" placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="Male" onclick="teaGender = this.value;"> Male <input type="radio" name="gender" value="Female" onclick="teaGender = this.value;"> Female</td>
                    </tr>
                    <tr>
                        <td>Teacher DOB:</td>
                        <td><input id="teaDOB"type="text" name="teacherDOB" placeholder="Enter DOB(yyyy-mm-dd)"></td>
                    </tr>
                    <tr>
                        <td>Teacher Hire Date:</td>
                        <td><input id="teaHireDate"name="teacherHireDate"value = "<?php echo date('Y-m-d');?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input id="teaSalary"type="text" name="teacherSalary" placeholder="Enter Salary"></td>
                    </tr>
                    <tr>
                      <td>Teacher Picture:</td>
                      <td><input id="file" type="file" name="file"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
            </form>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_FILES))
if(!empty($_POST['submit'])){
    $teaId = $_POST['teacherId'];
    $teaName = $_POST['teacherName'];
    $teaPassword = $_POST['teacherPassword'];
    $teaPhone = $_POST['teacherPhone'];
    $teaEmail = $_POST['teacherEmail'];
    $teaGender = $_POST['gender'];
    $teaDOB = $_POST['teacherDOB'];
    $teaHireDate = $_POST['teacherHireDate'];
    $teaAddress = $_POST['teacherAddress'];
    $teaSalary = $_POST['teacherSalary'];
    //$filename = $_FILES['file']['name'];
    $filetmp =$_FILES['file']['tmp_name'];
    //echo $filename;
    move_uploaded_file($filetmp,"../images/".$teaId.".jpg");
    $sql = "INSERT INTO teachers VALUES('$teaId','$teaName','$teaPassword','$teaPhone','$teaEmail','$teaAddress','$teaGender','$teaDOB','$teaHireDate','$teaSalary');";
    $success = mysqli_query($con, $sql,$link );
    $sql = "INSERT INTO users VALUES('$teaId','$teaPassword','teacher');";
    $success = mysqli_query( $con,$sql,$link );
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    echo "Entered data successfully\n";
}
?>

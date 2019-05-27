<?php
include_once('../../service/mysqlcon.php');
include('../../config.php');
$check=$_SESSION['login_id'];
$session=mysqli_query($con,"SELECT name  FROM admin WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>
<html>
    <head>
        <style>
            .table-responsive{
              background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
            }
        </style>
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/newStudentValidation.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
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
                   <li> <a class ="btn btn-primary" href="index.php">Home</a></li>
                               <li><a class ="btn btn-primary" href="newStudent.php">NEW STUDENT</a></li> 
                               <li> <a class ="btn btn-primary" href="viewStudent.php">VIEW STUDENT</a></li>
                               <li> <a class ="btn btn-primary" href="updateStudent.php">UPDATE STUDENT</a></li>
                                <li><a class ="btn btn-primary" href="deleteStudent.php">DELETE STUDENT</a></li>
                                
                           
                </ul>

            </div>
        </div>
    </nav>


								<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						
			  <hr/>
        <center>
            <h2>Student Registration.</h2><hr/>
            <form method="post" onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                  <div class="container-fluid bg-2 text-center">
                     <div class="container">
                    <div class="table-responsive">
                <table cellpadding="6">
                   
                
                    <tr>
                      <td>Student Id:</td>
                      <td><input id="stuId" type="text" name="studentId" placeholder="Enter Id"></td>
                    </tr>
                    <tr>
                        <td>Student Name:</td>
                        <td><input id="stuName" type="text" name="studentName" placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td>Student Password:</td>
                        <td><input id="stuPassword" type="text" name="studentPassword" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td>Student Phone:</td>
                        <td><input id="stuPhone" type="text" name="studentPhone" placeholder="Enter Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Student Email:</td>
                        <td><input id="stuEmail" type="text" name="studentEmail" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="Male" onclick="stuGender = this.value;"> Male <input type="radio" name="gender" value="Female" onclick="stuGender = this.value;"> Female</td>
                    </tr>
                    <tr>
                        <td>Student DOB:</td>
                        <td><input id="stuDOB" type="text" name="studentDOB" placeholder="Enter DOB(yyyy-mm-dd)"></td>
                    </tr>
                    <tr>
                        <td>Student Addmission Date:</td>
                        <td><input id="stuAddmissionDate" name="studentAddmissionDate" value = "<?php echo date('Y-m-d');?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Student Address:</td>
                        <td><input id="stuAddress" type="text" name="studentAddress" placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td>Student Parent Id:</td>
                        <td><input id="stuParentId"type="text" name="studentParentId" placeholder="Enter Parent Id"></td>
                    </tr>
                    <tr>
                        <td>Student Class Id:</td>
                        <td><input id="stuClassId" type="text" name="studentClassId" placeholder="Enter Class Id"></td>
                    </tr>
                    <tr>
                      <td>Student Picture:</td>
                      <td><input id="file" type="file" name="file"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit"value="Submit"></td>
                    </tr>

                </table>

                    </div>
                </div>
            </div>
            </form>
        </center>
       
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_FILES))
if(!empty($_POST['submit'])){
    $stuId = $_POST['studentId'];
    $stuName = $_POST['studentName'];
    $stuPassword = $_POST['studentPassword'];
    $stuPhone = $_POST['studentPhone'];
    $stuEmail = $_POST['studentEmail'];
    $stugender = $_POST['gender'];
    $stuDOB = $_POST['studentDOB'];
    $stuAddmissionDate = $_POST['studentAddmissionDate'];
    $stuAddress = $_POST['studentAddress'];
    $stuParentId = $_POST['studentParentId'];
    $stuClassId = $_POST['studentClassId'];

    $filetmp =$_FILES['file']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$stuId.".jpg");
    
    $sql = "INSERT INTO students VALUES('$stuId','$stuName','$stuPassword','$stuPhone','$stuEmail','$stugender','$stuDOB','$stuAddmissionDate','$stuAddress','$stuParentId','$stuClassId');";
    $success = mysqli_query($con,$sql);
    $sql = "INSERT INTO users VALUES('$stuId','$stuPassword','student');";
    $success = mysqli_query($con,$sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_error($con));
    }
    echo "Entered data successfully\n";
}
?>
 <footer><?php include('../../footer.php'); ?></footer>
        </body>
</html>
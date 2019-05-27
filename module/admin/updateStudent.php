<?php
include('../../config.php');
include_once('main.php');

?>
<html>
    <head>
       
		    <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateStudent.js"></script>
         <script src = "JS/newStudentValidation.js"></script>
          <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <!-- <img src="../../source/images.jpg" height="140" width="150" alt="School Management System"/> -->
				</div>
			<br/><br/>
				<!-- <div class="menulista">
                <?php //include('../../home.php'); ?>
                </div> -->
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
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>
				</ul>
			  <hr/>
        <center>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getStudentForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Only One Student Can Update in a time.</h2>
            <form action="#" method="post" onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                <table border="1" cellpadding="6" id='updateStudentData'>
                </table>
            </form>
        </center><br><br><br><br><br><br>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $stuId = $_POST['id'];
    $stuName = $_POST['name'];
    $stuPassword = $_POST['password'];
    $stuPhone = $_POST['phone'];
    $stuEmail = $_POST['email'];
    $stugender = $_POST['gender'];
    $stuDOB = $_POST['dob'];
    $stuAddmissionDate = $_POST['addmissiondate'];
    $stuAddress = $_POST['address'];
    $stuParentId = $_POST['parentid'];
    $stuClassId = $_POST['classid'];
     $image = '';
     if(isset($_POST['pic'])){
        $image = $_POST['pic'];
     $uploads_dir = "../images";
     move_uploaded_file($image, "$uploads_dir/$image");}
     $sql="UPDATE `students` SET   `id` = '$stuId ', `name` = ' $stuName', `password` = '$stuPassword', `phone` = '$stuPhone', `email` = '$stuEmail',  `sex` = ' $stugender', `dob` = '$stuDOB', `addmissiondate` = '$stuAddmissionDate', `address` = '$stuAddress', `parentid` = '$stuParentId', `classid` = '$stuClassId' WHERE `id` = '$stuId'";
     // $sql = "UPDATE students SET name='$stuName', password='$stuPassword', phone='$stuPhone', email='$stuEmail', sex='$stugender', dob='$stuDOB', addmissiondate='$stuAddmissionDate', address='$stuAddress', parentid='$stuParentId', classid='$stuClassId', WHERE id='st-12345-2016'";
     // $sql="UPDATE `students` SET `name` = 'georgem' WHERE `students`.`id` = 'st-12345-2016';";
    $success = mysqli_query($con,$sql);
    if(!$success) {
        die('Could not Update data: ');
    }
    echo "Update data successfully\n";
}
?>

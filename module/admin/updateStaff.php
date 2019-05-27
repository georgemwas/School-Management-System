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
        <script src = "JS/searchForUpdateStaff.js"></script>
        <script src = "JS/newStaffValidation.js"></script>

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
                               <li><a class ="btn btn-primary" href="addStaff.php">NEW STAFF</a></li> 
                               <li> <a class ="btn btn-primary" href="viewStaff.php">VIEW STAFF</a></li>
                               <li> <a class ="btn btn-primary" href="updateStaff.php">UPDATE STAFF</a></li>
                                <li><a class ="btn btn-primary" href="deleteStaff.php">DELETE STAFF</a></li>
                                
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
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getStaffForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Only One Staff Can Update at a time.<br/> Please Search For A Specific Staff</h2>
            <form action="#" method="post" onsubmit="return newStaffValidation();" enctype="multipart/form-data">
                <table border="1" cellpadding="6" id='updateStaffData'>
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
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Password = $_POST['password'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $gender = $_POST['gender'];
    $DOB = $_POST['dob'];
    $hiredate = $_POST['hiredate'];
    $Address = $_POST['address'];
    $salary = $_POST['salary'];
    $filename = $_FILES['file']['name'];
    $filetmp =$_FILES['file']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$filename);
    $sql = "UPDATE staff SET id='$Id', name='$Name', password='$Password', phone='$Phone', email='$Email', sex='$gender', dob='$DOB', hiredate='$hiredate', address='$Address', salary='$salary' WHERE id='$Id'";
    $success = mysqli_query($con, $sql);
    if(!$success) {
        die('Could not Update data: '.mysqli_error());
    }
    echo "Update data successfully\n";
}
?>

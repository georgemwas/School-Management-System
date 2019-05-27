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
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/newParentValidation.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  
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
								<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Parent Registration.</h2><hr/>
            <form action="#" method="post"onsubmit="return newParentValidation();">
                <table cellpadding="6">
                    <tr>
                      <td>Parent Id:</td>
                      <td><input id="id"type="text" name="id" placeholder="Enter Id"></td>
                    </tr>
                    <tr>
                        <td>Parent Password:</td>
                        <td><input id="password"type="text" name="password" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td>student Name:</td>
                        <td><input id="studentid" type="text" name="studentid" placeholder="Enter student id"></td>
                    </tr>
                    <tr>
                        <td>Father Name:</td>
                        <td><input id="fathername"type="text" name="fathername" placeholder="Enter Father Name"></td>
                    </tr>
                    <tr>
                        <td>Mother Name:</td>
                        <td><input id="mothername"type="text" name="mothername" placeholder="Enter Mother Name"></td>
                    </tr>
                    <tr>
                        <td>Father Phone:</td>
                        <td><input id="fatherphone"type="text" name="fatherphone" placeholder="Enter Father Phone"></td>
                    </tr>
                    <tr>
                        <td>Mother Phone:</td>
                        <td><input id="motherphone"type="text" name="motherphone" placeholder="Enter Mother Phone"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input id="address" type="text" name="address" placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
            </form>
        </center>
        <footer><?php include('../../footer.php');?></footer>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $password = $_POST['password'];
    $studentid = $_POST['studentid'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $fatherphone = $_POST['fatherphone'];
    $motherphone = $_POST['motherphone'];
    $address = $_POST['address'];
    $sql = "INSERT INTO parents VALUES('$id','$password','$studentid','$fathername','$mothername','$fatherphone','$motherphone','$address')";
    $success = mysqli_query($con, $sql,$link );
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    $sql = "INSERT INTO users VALUES('$id','$password','parent')";
    $success = mysqli_query($con, $sql,$link );
    echo "Entered data successfully\n";
}
?>

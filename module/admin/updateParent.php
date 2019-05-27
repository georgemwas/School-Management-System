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
        <script src = "JS/searchForUpdateParent.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title'); ?></h1></div>
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
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getParentForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Only One Parent Can Update at a time.</h2>
            <form action="#" method="post" onsubmit="return newParentValidation();" enctype="multipart/form-data">
                <table border="1" cellpadding="6" id='updateParentData'>
                </table>
            </form>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $password = $_POST['password'];
    $fathename = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $fatherphone = $_POST['fatherphone'];
    $motherphone = $_POST['motherphone'];
    $address = $_POST['address'];
    $sql = "UPDATE parents SET id='$id', password='$password', fathername='$fathename', mothername='$mothername', fatherphone='$fatherphone', motherphone='$motherphone', address='$address' WHERE id='$id'";
    $success = mysqli_query($con, $sql);
    if(!$success) {
        die('Could not Update data: '.mysqli_error());
    }
    echo "Update data successfully\n";
}
?>

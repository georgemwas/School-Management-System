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
        <script src = "JS/newStaffValidation.js"></script>
             <link rel="stylesheet" type="text/css" href="../../sweetalert.css">
<script type="text/javascript" src="../../sweetalert.min.js"></script>
<script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
                <script src = "JS/login_logout.js"></script>

<script >       
    $('#submit').click(function(){

      swal({

          title: "Are you sure want to remove this item?",

          text: "You will not be able to recover this item",

          type: "warning",

          showCancelButton: true,

          confirmButtonClass: "btn-primary",

          confirmButtonText: "Confirm",

          cancelButtonText: "Cancel",

          closeOnConfirm: false,

          closeOnCancel: false

        },

        function(isConfirm) {

          if (isConfirm) {

            swal("Deleted!", "Your item deleted.", "success");

          } else {

            swal("Cancelled", "You Cancelled", "error");

          }

      });

    });


</script>
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
            <h2>Staff Registration.</h2><hr/>
            <form action="#" method="post"onsubmit="return newStaffValidation();" enctype="multipart/form-data">
                <table cellpadding="6">
                    <tr>
                      <td>Staff Id:</td>
                      <td><input id="Id"type="text" name="Id" placeholder="Enter Id"></td>
                    </tr>
                    <tr>
                        <td>Staff Name:</td>
                        <td><input id="Name" type="text" name="Name" placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td>Staff Password:</td>
                        <td><input id="Password"type="text" name="Password" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td>Staff Phone:</td>
                        <td><input id="Phone"type="text" name="Phone" placeholder="Enter Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Staff Email:</td>
                        <td><input id="Email"type="text" name="Email" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="Male" onclick="Gender = this.value;"> Male <input type="radio" name="gender" value="Female" onclick="this.value"> Female</td>
                    </tr>
                    <tr>
                        <td>Staff DOB:</td>
                        <td><input id="DOB"type="text" name="DOB" placeholder="Enter DOB(yyyy-mm-dd)"></td>
                    </tr>
                    <tr>
                        <td>Staff Hire Date:</td>
                        <td><input id="HireDate"name="HireDate"value = "<?php echo date('Y-m-d');?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Staff Address:</td>
                        <td><input id="Address" type="text" name="Address" placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td>Staff Salary:</td>
                        <td><input id="Salary"type="text" name="Salary" placeholder="Enter Salary"></td>
                    </tr>
                    <tr>
                      <td>Staff Picture:</td>
                      <td><input id="file"type="file" name="file"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" id="submit" name="submit" class="btn btn-primary" value="Submit"></td>
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
    $Id = $_POST['Id'];
    $Name = $_POST['Name'];
    $Password = $_POST['Password'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $HireDate = $_POST['HireDate'];
    $Address = $_POST['Address'];
    $Salary = $_POST['Salary'];
    //$filename = $_FILES['file']['name'];
    $filetmp =$_FILES['file']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$Id.".jpg");
    $sql = "INSERT INTO staff VALUES('$Id','$Name','$Password','$Phone','$Email','$gender','$DOB','$HireDate','$Address','$Salary')";
    $success = mysqli_query($con,$sql);
    $sql = "INSERT INTO users VALUES('$Id','$Password','staff')";
    $success = mysqli_query($con,$sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    echo "Entered data successfully\n";
}
?>

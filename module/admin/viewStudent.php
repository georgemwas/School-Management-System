<?php
include_once('main.php');
include('../../config.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM students;";
$res= mysqli_query($con,$sql);
$string = "";
$images_dir = "../images/";
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['sex'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['addmissiondate'].'</td><td>'.$row['address'].
    '</td><td>'.$row['parentid'].'</td><td>'.$row['classid'].
    "</td><td><img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='250'>".'</td></tr>';
}
?>
<html>
    <head>
        <style>
            .table-responsive{
              background-color: #1abc9c; /* Green */
        color: #ffffff;
            }
        </style>
         <!--  <link rel="stylesheet" type="text/css" href="../../source/bootstrap/dist/css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
          <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css" -->>
           <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
        <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
		    <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchStudent.js"></script>
		</head>
    <body style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <!-- <img src="../../source/images.jpg" height="150" width="150" alt="School Management System" class="img-thumbnail" /> -->
				</div>
			<!-- <br/><br/>
           <div class="menulista">
                <?php //include('../../home.php'); ?>
                </div>
                </div> -->
                <br><br><br>
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
			  <hr/>
              <div align="center" class="maind">
                                <h4>Hi!admin <?php echo $check." ";?></h4>
                                <a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
                        </div>
        <center>
            <table>
                <tr>
                    <td><b>Search By Id Or Name OR Class Id: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getStudent(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Students List</h2></center>
        <center>
            <div class="container">
                <div class="table-responsive">
            <table border="1" id='studentList' class="table table-striped">
                <tr class="hover">
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
            </div>
            </div>
        </center>
        <footer><?php include('../../footer.php') ?></footer>
		</body>
</html>

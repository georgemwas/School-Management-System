<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$sql = "SELECT * FROM course;";
$res= mysqli_query($con,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['teacherid'].'</td><td>'.$row['studentid'].
    '</td><td>'.$row['classid'].'</td></tr>';
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchCourse.js"></script>
		</head>
    <body>
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <!-- <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/> -->
				</div>
			<br/><br/>
			<div class="menulista">
				<?php include('../../home.php'); ?>
                </div>
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
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getCourse(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Course List</h2></center>
        <center>
            <table border="1" id='courseList'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Teacher ID</th>
                    <th>Student ID Name</th>
                    <th>Class ID</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

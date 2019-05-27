<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$string = "<tr>
    <th>Teacher</th>
    <th>Course Id</th>
    <th>Class</th>
    <th>#OF Students</th>
    </tr>";
$sql = "select t.name as teacher,ac.name as course,ac.classid as class,count(g.id) as no_of_std from teachers t,takencoursebyteacher tc,availablecourse ac,grade g where t.id=tc.teacherid and ac.id=tc.courseid and tc.courseid=g.courseid and g.grade not in('A+','A','A-','B+','B','B-')group by ac.id";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td>".$row['teacher']."</td><td>".$row['course']."</td><td>".$row['class'].
    "</td><td>".$row['no_of_std']."</td></tr>";
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
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
            <h1>Teacher Evaluation</h1>
            <table border="1">
                <?php echo $string;?>
            </table>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

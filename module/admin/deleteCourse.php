<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$sql = "SELECT * FROM course;";
$res= mysqli_query($con,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteCourseTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['name'].'</td><td>'.$row['teacherid'].
    '</td><td>'.$row['studentid'].'</td><td>'.$row['classid'].'</td></tr></form>';
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
            <h2>Delete Course</h2><hr/>
              <table border="1">
                <tr>
                    <th>Select For Delete</th>
                    <th>Name</th>
                    <th>Teacher Id</th>
                    <th>Student Id</th>
                    <th>Class Id</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

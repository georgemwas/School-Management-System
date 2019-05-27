<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');

$sql = "SELECT * FROM examschedule ";
$res= mysqli_query($con,$sql);
$string = "<tr>
               <th>class</th>
               <th>ID</th>
               <th>course id</th>
               <th>Time</th>
               <th>exam date</th>
           </tr>";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['class'].'</td><td>'.$row['id'].'</td><td>'.$row['courseid'].
    '</td><td>'.$row['time'].'</td><td>'.$row['examdate'].'</td></tr>';
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
            <h2>Exam Schedule List</h2>
            <table border="1">
                <?php echo $string; ?>
            </table>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

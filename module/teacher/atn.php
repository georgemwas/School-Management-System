<?php
include('main.php');
include('../../config.php');

?>
        <html>
		
			<head>
              
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				</head>
		  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				<ul>
				    <li class="manulista" align="center">
						    <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="updateAttendence.php">Update Attendence</a>
								<a class ="menulista" href="deleteatt.php">Delete Attendende</a>
								
								<div align="center">
								<h4>Hi! <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
			  <footer><?php include('../../footer.php'); ?></footer>
		</html>
<center> <h1>Students Attendance</h1></center>
<?php
include('main.php');
// $cid=$_REQUEST['mycourse'];
// $clid=$_REQUEST['myclass'];
echo '<form  action="makeattendance.php" method="post">';
$conn=mysqli_connect('localhost','root','');
if(!$conn){
   die('error connecting ');
   }
   mysqli_select_db($conn,'schoolmanagementsystemdb');
   
  $sql="SELECT studentid FROM course WHERE teacherid='$check'";
  $res=mysqli_query($conn,$sql);
  
 while($rn=mysqli_fetch_array($res))
{
	echo "<center>";
	echo $rn['0'];
    echo "<input type='checkbox' checked='checked' name='attendance[]' value=".$rn[0]." /> <br /><br />";
   
   
     }
	 
   echo "<input class='menulista' type='submit' value='Make Attendance' />";
  echo " </form> </html>";
  echo "</center>";

?>
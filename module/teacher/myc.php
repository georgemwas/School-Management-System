<?php  
include_once('main.php');
 $emn = $_REQUEST['classid'];


$courses = "SELECT * FROM class ";
$rescourse = mysqli_query($con,$courses);

while($r=mysqli_fetch_array($rescourse))
{
 echo .$r['name'].;

}


?>
<!-- WHERE classid='$emn' and teacherid='$check' -->
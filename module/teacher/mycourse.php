<?php  
include_once('main.php');
 $emn = $_REQUEST['classid'];


$courses = "SELECT distinct id , name FROM course";
$rescourse = mysqli_query($con,$courses);

while($r=mysqli_fetch_array($rescourse))
{
 echo '<option value='.$r['id'].' >'.$r['name'].'</option>';

}


?>

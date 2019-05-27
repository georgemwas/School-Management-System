<?php 
include('main.php');
function getcourseid(){
	$course = mysqli_query($con, "SELECT * FROM course");
	while($cors = mysqli_fetch_array($course)){
		echo $cors['name'];
	}

}

 ?>
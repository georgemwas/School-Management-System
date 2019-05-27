<?php

include_once('main.php');
include_once('index.php');

if(!empty($_POST['submit'])){
// $stid=$_REQUEST['mystudent'];
// $crsid=$_REQUEST['mycourse'];

//print_r($_REQUEST);
$string="<form align='center' action='succeed.php'>
student id:  <input type='text' value='' name='stdid' /> <br />
Course id:  <input type='text' value='' name='crid' > <br />
marks:  <input type='text' name='marks' /> <br />
grade:  <input class='grade' type='text' name='grade' value='0'/><br/>
<input class='menulista' type='submit' value='grade' name='sbmt' />
";
echo $string;
}


?>

<?php 

if(!empty($_POST['update'])){
// $stid=$_REQUEST[''];
// $crsid=$_REQUEST[''];
$sql="select grade from grade where studentid='' and courseid=''";
$res=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($res)){
$grd=$row[0];
}
$string="<form align='center' action='succeed.php'>
student id:  <input type='text' value='' name='stdid' > <br />
Course id:  <input type='text' value='' name='crid' > <br />
marks:  <input type='text' name='marks' /> <br />
 <input class='grade' type='text' name='grade' value='0'/><br/>
<input class='btn btn-primary' type='submit' value='grade' name='sbmt2' />
";
echo $string;
}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.grade{
			display: none;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
	<title></title>
</head>
<body>

</body>
</html>
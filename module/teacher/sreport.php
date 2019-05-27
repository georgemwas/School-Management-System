<?php 
include('main.php');

 ?>

 <!DOCTYPE html>
 <html>
 <head>

	            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/Header.css">
    <link rel="stylesheet" href="../../assets/css/codeintech.css">
    <script type="text/javascript" src="jquery-1.12.3.js"></script>
	<title></title>
 	<title></title>
 	<script>
 		function ajaxRequestToGetChildInfo()
{
	var info = {
		id: $('#childid').val()
		
	};
	
	$.ajax({
		url: 'checkchildreport.php',
		data: info,
		success: function(response){
			$('#mychild').html(response);
			
		},
		error: function (xmlHttpRequest, textStatus, errorThrown) {
         alert(errorThrown);
    }
	});
}
 	</script>
 </head>
 <body>
 	<div align="center">
								<h4>Hi!Student <?php echo $check." ";?> </h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
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
                 
                   <li> <a class ="btn btn-primary" href="index.php">Home</a></li>
                               <li><a class ="btn btn-primary" href="updateTeacher.php">UPDATE PROFILE</a></li> 
                               <li> <a class ="btn btn-primary" href="viewProfile.php">VIEW PROFILE</a></li>
                               <li> <a class ="btn btn-primary" href="course.php">STUDENTS GRADE</a></li>
                                <!-- <li><a class ="btn btn-primary" href="courses.php">COURSES</a></li> -->
                                 <li> <a class ="btn btn-primary" href="attendance.php">ATTENDANCE</a></li>
                                <!-- <li><a class ="btn btn-primary" href="exam.php">EXAM SCHEDULE</a></li> -->
                                <li><a class ="btn btn-primary" href="salary.php">SALARY</a></li>
<!--                                  <li> <a class ="btn btn-primary" href="report.php">REPORT</a></li>
                                <li><a class ="btn btn-primary" href="searchStudent.php">SEARCH STUDENT</a></li> -->
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
 <form>
 	<table>
 		<tr><td>
 			SELECT ID YOU WANT YO SEE REPORT: <select id="childid" name="childid" onchange="ajaxRequestToGetChildInfo();" style="background-color:white;"> 
 				<?php  


$classget = "SELECT  * FROM students";
$res= mysqli_query($con,$classget);

while($cln=mysqli_fetch_array($res))
{
	
 echo '<option value="'.$cln['id'].'" >'.$cln['name'].'</option>';
 

}

?>
</select>
 		</td></tr>
 	</table>

 </form>
 <?php 
$sid=$_REQUEST['id'];
$attendmon = "SELECT * FROM students WHERE id='$sid'";
$resmon = mysqli_query($con,$attendmon);
echo "<tr><th>Child ID</th>
			  <th>Child Name</th>
			  <th>Child Phone</th>
			  <th>Child Email</th>
			  <th>Child Gender</th>
			  <th>Child DOB</th>
			  <th>Child Admission Date</th>
			  <th>Child Address</th>
			  <th>Child Parent ID</th>
			  <th> Child class ID</th>
			  <th> Child Image</th></tr>";
while($stinfo=mysqli_fetch_array($resmon))
{
 echo "<tr><td>".$stinfo['id']."</td>
			  <td>".$stinfo['name']."</td>
			  <td>".$stinfo['phone']."</td>
			  <td>".$stinfo['email']."</td>
			  <td>".$stinfo['sex']."</td>
			  <td>".$stinfo['dob']."</td>
			  <td>".$stinfo['addmissiondate']."</td>
			  <td>".$stinfo['address']."</td>
			  <td>".$stinfo['parentid']."</td>
			  <td>".$stinfo['classid']."</td>";
			  echo "<td><img src='../images/",$stinfo['id'],".jpg' height='95' width='95' /></td>
			  </tr>";

}
?>

  ?>

<div align="center" >
<table id="mychild" border="1">

</table>
</div>

 </body>
 </html>
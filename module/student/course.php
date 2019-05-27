<?php
include_once('main.php');
include('../../config.php');
?>
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
	<title></title>
	<script src="../../jquery-3.2.1.min.js"></script>
		     
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head> 
    <body  onload="ajaxRequestToGetCourse();" style="background-color: silver">
             		 
			 <div class="header" align="left"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <!-- <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/> -->
				</div>
			<br/>


			<?php include('../../assets/student.php') ?>
               
                
			  <hr/>
			  
			  

<?php
$string = "";
$ray  ="SELECT * FROM grade WHERE studentid = '$check'";
$sql = mysqli_query($con,$ray);

while($kei = mysqli_fetch_array($sql)){
	$string.= "<tr><td>".$kei['courseid']."</td><td>".$kei['grade']."</td></tr>";
}

 ?>
 <center>
<div class="container">
                <div class="table-responsive">
            <table border="1" id='studentList' class="table table-striped">
                <tr class="hover">
                    <th>COURSE ID</th>
                    <th>GRADE</th>
                   
                </tr>
                <?php echo $string;?>
            </table>
            </div>
            </div>
			</center>
			  	
			  </div>
						<div align="center">
								<h4>Hi!Student <?php echo $check." ";?> </h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
					 <footer><?php include('../../footer.php'); ?></footer>		
		</body>
</html>


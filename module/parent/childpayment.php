<?php
include_once('main.php');
include('../../config.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="Attendance.js"></script>
			<script src = "JS/login_logout.js"></script> 
		</head>
    <body  onload="ajaxRequestToGetChildPaymentInfo();" style="background-color: silver">
             		 
			 <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
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
                  <!-- <li class="dropdown"> -->
                    <!-- <ul class="dropdown-menu"> -->
                   <li> <a class ="btn btn-primary" href="index.php">Home</a></li>
                               <li><a class ="btn btn-primary" href="modify.php">CHANGE PASSWORD</a></li> 
                               <li> <a class ="btn btn-primary" href="checkchild.php">CHILDS INFO</a></li>
                               <li> <a class ="btn btn-primary" href="childcourse.php">CHILDS RESULT</a></li>
                                <li><a class ="btn btn-primary" href="childpayment.php">CHILDS PAYMENT</a></li>
                                 <li> <a class ="btn btn-primary" href="childattendance.php">CHILDS ATTENDANCE</a></li>
                                <li><a class ="btn btn-primary" href="report.php">CHILDS REPORT</a></li>
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
								<div align="center">
								<h4>Hi!Parents <?php echo $check." ";?> </h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						 
				    
			
						</li>
				</ul>
			  <hr/>
			  <div align="center" style="background-color:orange;">
			  
			  Select your Child to see payment:<select id="childid" name="childid" onchange="ajaxRequestToGetChildPaymentInfo();" style="background-color:white;"><?php  


$classget = "SELECT  * FROM students where parentid='$check'";
$res= mysqli_query($con,$classget);

while($cln=mysqli_fetch_array($res))
{
	
 echo '<option value="'.$cln['id'].'" >'.$cln['name'].'</option>';
   
}

?>

</select>
<hr/>
	
</div>	

<div align="center" >
<table id="mychildpayment" border="1">

</table>
</div>
<hr/>
			<footer><?php include('../../footer.php'); ?></footer>		
		</body>
</html>
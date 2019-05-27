<?php
include_once('../../service/mysqlcon.php');
include('../../config.php');
$check=$_SESSION['login_id'];
$session=mysqli_query($con,"SELECT name  FROM admin WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>
<html>
    <head>
		    <!-- <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css"> -->
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/getClassName.js"></script>
        <script src = "JS/getCourseIdAndNAme.js"></script>
		</head>
    <body onload="getClassNameAndId();" style="background-color: silver">
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				<div class="menulista">
				   <!-- <div class="menulista"> -->
                <?php include('../../home.php'); ?>
                </div>
                <!-- </div> --><center>
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
                                </center>
						</div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Course Registration For Student.</h2><hr/>
            <form action="#" method="post">
                <table cellpadding="6">
                    <tr>
                        <td>Class ID:</td>
                        <td><select id="className" onchange="getCourseNameAndId();"></select></td>
                    </tr>
                    <tr>
                        <td>Course Name:</td>
                        <td><select id="courseName" onchange="setCourseId()"></select></td>
                    </tr>
                   <!--  <tr>
                        <td><input id="courseId" type="hidden" name="name" placeholder="Enter Name"></td>
                    </tr> -->
                    <tr>
                        <td>Teacher ID:</td>
                         <td><select id="teacherId" onchange="getTeacherId()"></select></td>
                        <td><?php $sql="SELECT id FROM teachers" ;
                        $res=mysqli_query($con,$sql);
                        if($row = mysqli_fetch_array($res)){
                            $picname = $row['id'];
                        }
                        ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" name="submit"value="Submit" onclick="getAllCourseStudentAndSubmit();"></td>
                    </tr>
                </table>
            </form>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

<?php
include_once('main.php');
include('../../config.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src="JS/getClassName.js"></script>
		</head>
    <body>
			  <div class="header"><h1><?php echo variable_names('title') ?></h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
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
            <form action="#" method="post">
              <table cellpadding="6">
                <tr>
                  <td>class id</td>
                  <!-- <td><input type="text" name="class" placeholder="class"></td> -->
                  <td><select id="className" onchange="getCourseNameAndId();"></select></td>
                </tr>
                  <tr>
                      <td>Exam Schedule Id:</td>
                      <td><input type="text" name="id" placeholder="Exam Schedule ID"></td>
                  </tr>
                  <tr>
                      <td>Exam Date:</td>
                      <td><input type="text" name="examDate" placeholder="Exam Date(y-m-d)"></td>
                  </tr>
                  <tr>
                      <td>Exam Time:</td>
                      <td><input type="text" name="examTime" placeholder="Exam Time(H:M - H:M)"></td>
                  </tr>
                  <tr>
                      <td>Course ID:</td>
                      <td><input type="text" name="courseId" placeholder="Course ID"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" name="submit"value="Submit"></td>
                  </tr>
              </table>
            </form>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $class = $_POST['class'];
    $id = $_POST['id'];
    $examDate = $_POST['examDate'];
    $examTime = $_POST['examTime'];
    $courseId = $_POST['courseId'];
    $sql = "INSERT INTO  examschedule VALUES('$class','$id','$examDate','$examTime','$courseId')";
    $success = mysqli_query($con, $sql,$link );
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    echo "Entered data successfully\n";
}
?>

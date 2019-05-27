<?php 
include('main.php');
$str="";
$stu = "SELECT * FROM attendance WHERE attendedid LIKE 'b%'";
$std = mysqli_query($con, $stu);
while($tbl = mysqli_fetch_array($std)){
	$str.="<tr><td>".$tbl['attendedid']."</td><td>".$tbl['date']."</td><tr>";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
 	<title></title>
 </head>
 <body>
  <div class="container">
                <div class="table-responsive">
            <table border="1" id='studentList' class="table table-striped">
                <tr class="hover">
                    <th>ID</th>
                    <th>DATE</th>
                </tr>
                <?php echo $str;?>
            </table>
            </div>
            </div>
 </body>
 </html>
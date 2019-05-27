<?php 


include_once('main.php');
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
	<title></title>
</head>
<body>
	<?php include('../../assets/student.php') ?>
								<div align="center">
								<h4>Hi!Student <?php echo $check." ";?> </h4>
								<a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						 
</body>
</html>
<div class="container">
<?php 



 $st=mysqli_query($con,"SELECT *  FROM students WHERE id='$check' ");
 $stinfo=mysqli_fetch_array($st);
 ?>
 <body style="background-color: silver">
<div class="container" style="background-color: white">
<div align="center" style="padding-top: 0px; padding: 10px">
			  	<div style="background-color: blue;text-align: center;color: white"><h1>My Information</h1></div>
			  <table border="1" class="table table-striped">
			  <tr>
			  
			  <th>Student ID</th>
			  <th>Student Name</th>
			  <th>Student Phone</th>
			  <th>Student Email</th>
			  <th>Student Gender</th>
			  <th>Student DOB</th>
			  <th>Student Admission Date</th>
			  <th>Student Address</th>
			  <th>Student Parent ID</th>
			  <th>Student class ID</th>
			  <th>Student Picture</th>
			  
			  </tr>
			  <tr>
			  
			  <td><?php echo $stinfo['id'];?></td>
			  <td><?php echo $stinfo['name'];?></td>
			  <td><?php echo $stinfo['phone'];?></td>
			  <td><?php echo $stinfo['email'];?></td>
			  <td><?php echo $stinfo['sex'];?></td>
			  <td><?php echo $stinfo['dob'];?></td>
			  <td><?php echo $stinfo['addmissiondate'];?></td>
			  <td><?php echo $stinfo['address'];?></td>
			  <td><?php echo $stinfo['parentid'];?></td>
			  <td><?php echo $stinfo['classid'];?></td>
			 
			  <td><img src="../images/<?php echo $check.".jpg";?>" height="95" width="95" alt="<?php echo $check." photo";?> "/></td>
			  </tr>
			  
			  
			  </table>
              </div>
              </div>
			  <br><br><hr >
			  <div class="container" style="background-color: white;padding: 5px">
			  <div style="background-color: blue;color:white ;text-align: center">	<h1>ATTENDANCE</h1></div>
	<div style="float: left; background-color: gray ">
		<h1>MY ATTENDANCE PRESENT</h1>
		<table border="1" class="table table-striped">
			<tr>
				<th>DATE PRESENT</th>
			</tr>
			<tr>
				<td><?php 
				$attendmon = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$check'";
				$resmon = mysqli_query($con,$attendmon);
				echo "<tr> <th></th></tr>";
				while($r=mysqli_fetch_array($resmon))
				{
				 echo "<tr><td>",$r['date'],"</td></tr>";

}
			
				 
				?></td>
			</tr>
		</table>
	</div>		

	<div style="float:right; background-color: gray">
		<h1>MY ATTENDANCE ABSENT</h1>
		<table border="1" class="table table-striped">
			<tr>
				<th>DATE ABSENT</th>
			</tr>
			<tr>
				<td><?php 
					$attendmon = "SELECT DISTINCT (date) FROM attendance WHERE  date not in (select DISTINCT(date) from attendance where attendedid='$check' )";
					$resmon = mysqli_query($con,$attendmon);
					echo "<tr> <th></th></tr>";
					while($r=mysqli_fetch_array($resmon))
					{
 					echo "<tr><td>",$r['date'],"</td></tr>";

}
			
				 
				?></td>
			</tr>
		</table>
	</div>	
	</div>	    
								
								</div><br>
								<br><br>
								<div align="center" style="background-color: white;" class="container">
									<div style="background-color: blue;text-align: center;color: white"><h1>MY GRADES PER COURSE</h1></div>
								<div style="padding: 50px;padding-top: 0px">
								<table border="" style="width: 100px" class="table table-striped">
								 	<tr>
										<th>COURSE ID</th>
										<th>MARKS</th>
										<th>GRADE</th>
									</tr>
									<tr>
									<td>	
									<?php 
									$sql="SELECT * FROM grade WHERE studentid='$check'";
									$sq= mysqli_query($con,$sql);
									while($x = mysqli_fetch_array($sq)){


									if($x['marks']<=100 && $x['marks']>=70){
										$grade = 'A';
										$up =mysqli_query($con,"UPDATE grade SET grade='$grade' WHERE studentid='$check' AND id= '{$x['id']}'");
								echo "
									<tr>
										<td>" ,$x['courseid'],"</td>
										<td>" ,$x['marks'],  "</td>
										<td>" ,$x['grade'],"</td>
									</tr>
								 ";
								  }


								else if($x['marks']<70 && $x['marks']>=60){
										 $grade = 'B';
										 $up =mysqli_query($con,"UPDATE grade SET grade='$grade' WHERE studentid='$check' AND id= '{$x['id']}'");

										 echo "
									<tr>
										<td>" ,$x['courseid'],"</td>
										<td>" ,$x['marks'],  "</td>
										<td>" ,$x['grade'],"</td>
									</tr>
								 ";
  									}

										else if($x['marks']<60 && $x['marks']>=50){
										$grade = 'C';
										$up =mysqli_query($con,"UPDATE grade SET grade='$grade' WHERE studentid='$check' AND id= '{$x['id']}'");
										 echo "
									<tr>
										<td>" ,$x['courseid'],"</td>
										<td>" ,$x['marks'],  "</td>
										<td>" ,$x['grade'],"</td>
									</tr>
								 ";
									}

										else if($x['marks']<50 && $x['marks']>=40){
										$grade = 'D';
										$up =mysqli_query($con,"UPDATE grade SET grade='$grade' WHERE studentid='$check' AND id= '{$x['id']}'");
										 echo "
									<tr>
										<td>" ,$x['courseid'],"</td>
										<td>" ,$x['marks'],  "</td>
										<td>" ,$x['grade'],"</td>
									</tr>
								 ";
									}

										else if($x['marks']<40 && $x['marks']>=0){
										$grade = 'E';
										$up =mysqli_query($con,"UPDATE grade SET grade='$grade' WHERE studentid='$check' AND id= '{$x['id']}'");
										 echo "
									<tr>
										<td>" ,$x['courseid'],"</td>
										<td>" ,$x['marks'],  "</td>
										<td>" ,$x['grade'],"</td>
									</tr>
								 ";
									}
										}


								  $tot = mysqli_query($con,"SELECT SUM(marks) AS total FROM grade WHERE studentid = '$check'");
								  while($total = mysqli_fetch_array($tot)){
								 
								  

								  
								  $ave = mysqli_query($con,"SELECT COUNT(marks) AS average FROM grade WHERE studentid = '$check'");
								  while($aver = mysqli_fetch_array($ave)){
								  	$av = $total['total']/$aver['average'];

								  	if($av<=100 && $av >=70){
								  		echo "<tr><td>" ,"TOTAL: ", "</td><td>",$total['total'],"</td><td>","A","</td></tr>";
								  	}

								  	if($av<70 && $av >=60){
								  		echo "<tr><td>" ,"TOTAL: ", "</td><td>",$total['total'],"</td><td>","B","</td></tr>";
								  	}

								  	if($av<60 && $av >=50){
								  		echo "<tr><td>" ,"TOTAL: ", "</td><td>",$total['total'],"</td><td>","C","</td></tr>";
								  	}

								  	if($av<50 && $av >=40){
								  		echo "<tr><td>" ,"TOTAL: ", "</td><td>",$total['total'],"</td><td>","D","</td></tr>";
								  	}

								  	if($av<40 && $av >=0){
								  		echo "<tr><td>" ,"TOTAL: ", "</td><td>",$total['total'],"</td><td>","E","</td></tr>";
								  	}
								  	}
								  }

								 ?>
								 </td>
								 </tr></td></tr>
								 </table>
								</div>
								 </div>
								 <br><br><br>
								 <div class="container" style="background-color: white">
								 	<div align="center" style="color: ; th{color:green;}">
								 		<div style="background-color: blue;color: white">
								 			<h1>FEE STATUS</h1></div>
								 		<table border="1" class="table table-striped">
								 			<h1>TOTALS</h1>
								 			<tr>
								 				<th>last paid</th>
								 				<th>payable</th>
								 				<th>paid</th>
								 				<th>balance</th>
								 			</tr>
								 			<tr><td>
								 		<?php 
								 		$bal = mysqli_query($con,"SELECT * FROM payment WHERE studentid='$check'");
								 		
								 		$tot = mysqli_query($con,"SELECT SUM(`paid`) AS totbal FROM payment WHERE studentid='$check'");
								 		$total = mysqli_fetch_array($tot);

 										
 										if($res = mysqli_fetch_array($bal)){
 											$balance = $res['payable']-$total['totbal'];
 										}

								 		$upt =mysqli_query($con,"UPDATE payment SET balance='$balance' WHERE studentid='$check'");
								 		
								 		echo "<tr><td>".$res['date']."</td><td>".$res['payable']."</td><td>".$total['totbal']."</td><td>".$res['balance']."</td></tr>";

												
								 		 ?>
								 		
								 		<table border="1">
								 			<h1>EACH PAYMENT</h1>
								 			<tr>
								 				<th>date</th>
								 				<th>paid</th>
								 			</tr>
								 			<tr><td>
								 		<?php 
								 		$bal = mysqli_query($con,"SELECT * FROM payment WHERE studentid='$check'");
								 		$bala =mysqli_fetch_array($bal);
								 		
								 		$tot = mysqli_query($con,"SELECT * FROM payment WHERE studentid='$check'");
								 		while($total = mysqli_fetch_array($tot)){
								 			echo "<tr><td>".$total['date']."</td><td>".$total['paid']."</td></tr>";
								 		}

												
								 		 ?>
								 		</td></tr>
								 		
								 		 </table>
								 		 </table>
<br><br>
								 	</div>

								 </div>
								 <br><br><br>
								<footer><?php include('../../footer.php'); ?></footer>
</body>
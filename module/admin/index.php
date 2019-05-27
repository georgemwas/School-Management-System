<?php 
include ('main.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/Header.css">
    <link rel="stylesheet" href="../../assets/css/codeintech.css">
	<title></title>
	<script src="../../jquery-3.2.1.min.js"></script>
</head>

<body>
	<div align="center" class="maind">
								<h4 class="maind">Hi!admin <?php echo $check." ";?></h4>
							
								    <a class ="btn btn-default" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
								
						    </div>
<div id="sammi">
	<?php include('../../assets/home.php') ?>
</div>

<!-- <button onclick="getLOG()">homepage</button> -->
</body>
</html>
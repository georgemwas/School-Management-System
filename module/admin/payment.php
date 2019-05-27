<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$string = "<tr>
    <th>ID</th>
    <th>Student Id</th>
    <th>payable</th>
    <th>paid</th>
    <th>date</th>
    </tr>";
$sql = "SELECT * FROM `payment` ";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td>".$row['id']."</td>
    <td>".$row['studentid']."</td>
    <td>".$row['payable']."</td> 
    <td>".$row['paid']."</td>
    <td>".$row['date']."</td>
    </tr>";
}
?>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body style="background-color: silver">
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
                               <li><a class ="btn btn-primary" href="addPayment.php">ADD PAYMENT</a></li> 
                               <li> <a class ="btn btn-primary" href="deletePayment.php">DELETE PAYMENT</a></li>
                              
                                
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
			
								<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								    <a class ="btn btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <table border="1">
                <?php echo $string;?>
            </table>
        </center>
        <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

<?php
include_once('main.php');

include('../../config.php');
?>
<html>
    <head>
      <style type="text/css">
        .bal{
          display: none;
        }
      </style>
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
								    <a class ="btn  btn-primary" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h1>Student Tuition Fees</h1>
            <form action="#" method="post">
                <table cellpadding="6">
                  <tr>
                      <td>Student ID:</td>
                      <td><input type="text" name="id" placeholder="Enter Student Id." required></td>
                  </tr>
                  <tr>
                      <td>Parent ID:</td>
                      <td><input type="text" name="parentid" placeholder="Enter parentid." required></td>
                  </tr>
                  <tr>
                    <td>amount payable</td>
                    <td><input type="text" name="payable" placeholder="amount payable" required></td>
                   </tr>
                   <tr>
                    <td>amount paid</td>
                     <td><input type="text" name="paid" placeholder="amount paid" required></td>
                   </tr>
                   <tr class="bal">
                     <td>balance</td>
                     <td><input type="" name="balance" value="0"></td>
                   </tr>
                   <tr>
                        <td>date of payment:</td>
                        <td><input id="date" name="date" value = "<?php echo date('Y-m-d');?>" readonly></td>
                    </tr>

                  <tr>
                      <td></td>
                      <td><input type="submit" name="submit" value="Submit"></td>
                  </tr>
                </table>
            </form>
        </center>
        <footer><?php include('../../footer.php') ?></footer>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $pid = $_POST['parentid'];
    $pay=$_POST['payable'];
    $paid=$_POST['paid'];
    $balance = $_POST['balance'];
    $date=$_POST['date'];
    $_SESSION['date']= $date;
    $sql = "INSERT INTO payment VALUES('','$id','$pid','$pay','$paid','$balance','$date')";
          // $upt =mysqli_query($con,"UPDATE payment SET balance='$balance' WHERE studentid='$check' ");
    $success = mysqli_query($con,$sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_error());

    }else{
      
       echo "Transaction successfull\n";
       // header("location:payment.php?successfull");
       
    }
   
}
?>

<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include('../../config.php');
$sql = "SELECT * FROM staff;";
$res= mysqli_query($con,$sql);
$string = "";
$images_dir = "../images/";
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= '<form action="deleteStaffTableData.php" method="post">'.
    '<tr><td><input class="btn btn-primary" onclick="del()" type="submit" name="submit" value="Delete"></td>'.
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['address'].
    '</td><td>'.$row['sex'].'</td><td>'.$row['dob'].'</td><td>'.$row['hiredate'].
    '</td><td>'.$row['salary'].
    '</td><td><img src="'.$images_dir.$picname.'.jpg" alt="$picname" width="150" height="150">'.'</td></tr></form>';
}
?>
<html>
    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Footer.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/Header.css">
            <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="../../sweetalert.css">
<script type="text/javascript" src="../../sweetalert.js"></script>
<script type="text/javascript"  src="../../sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../sweetalerts.min.css">
<script type="text/javascript" src="../../jquery-3.2.1.min.js"></script>
				<script src = "JS/login_logout.js"></script>

<script >       
    function del(){

      swal({

          title: "Are you sure want to remove this item?",

          text: "You will not be able to recover this item",

          type: "warning",

          showCancelButton: true,

          confirmButtonClass: "btn-primary",

          confirmButtonText: "DELETE!",

          cancelButtonText: "CANCEL",

          closeOnConfirm: false,

          closeOnCancel: false

        },

        function(isConfirm) {

          if (isConfirm) {

            swal("Deleted!", "Your item deleted.", "success");

          } else {

            swal("Cancelled", "You Cancelled", "error");

          }

      });

    }


</script>
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
                               <li><a class ="btn btn-primary" href="addStaff.php">NEW STAFF</a></li> 
                               <li> <a class ="btn btn-primary" href="viewStaff.php">VIEW STAFF</a></li>
                               <li> <a class ="btn btn-primary" href="updateStaff.php">UPDATE STAFF</a></li>
                                <li><a class ="btn btn-primary" href="deleteStaff.php">DELETE STAFF</a></li>
                                
                               <!-- </ul> -->
                               <!-- </li> -->
                                
                </ul>

            </div>
        </div>
    </nav>
							<div align="center">
								<h4>Hi!admin <?php echo $check." ";?></h4>
								<a class ="btn btn-primary logout" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>

				</ul>
			  <hr/>
        <button class="btn btn-primary" onclick="del()">deleteall</button>
        <center>
            <h2>Delete Teacher</h2><hr/>
              <table border="1">
                <tr>
                    <th>Select For Delete</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Hire Date</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Picture</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
         <footer><?php include('../../footer.php'); ?></footer>
		</body>
</html>

<?php  
include_once('../../service/mysqlcon.php');
$check=$_REQUEST['classid'];
$attendmon = "SELECT DISTINCT (date) FROM attendance WHERE  date not in (select DISTINCT(date) from attendance where attendedid='$check' )";
$resmon = mysqli_query($con,$attendmon);
echo "<tr> <th>Absent All Dates:</th></tr>";
while($r=mysqli_fetch_array($resmon))
{
 echo "<tr><<td>",$r['date'],"</td></tr>";

}
?>

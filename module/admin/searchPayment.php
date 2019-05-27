<?php
include_once('main.php');
$searchKey = $_GET['key'];
include_once('../../service/mysqlcon.php');

// $sql = "SELECT * FROM payment WHERE id like '$searchKey%' OR studentid like '$searchKey%' AND month = MONTH(curdate()) AND year = YEAR(curdate())";
// $re = mysqli_query($con,$sql);
// while($r = mysqli_fetch_array($re)){
//     echo "<form action='deletePaymentableData.php' method='post' >";
//     echo "<input type='submit' value='Delete' /> ".
//     " Student ID: ".$r['studentid']." Payment Amount:".$r['amount'].
//     " Month :".$r['month']." Year :".$r['year'].
//     "<input type='hidden' name='id' value='".$r['id']."'/>"."";
// 	echo "</form></br>";
// }


$string = "<tr>
    <th>ID</th>
    <th>Payment amount</th>
    <th>month</th>
    <th>year</th>
</tr>";

$sql = "SELECT * FROM payment WHERE id like '$searchKey%' OR studentid like '$searchKey%'";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($res)){
	 echo "<form action='deletePaymentableData.php' method='post' >";
     echo "<input type='submit' value='Delete' /> "
     ." Student ID: ".$row['studentid']." Payment Amount:".$row['amount'].
    " Month :".$row['month']." Year :".$row['year'].
    "<input type='hidden' name='id' value='".$row['id']."'/>"."";
	echo "</form></br>";

}
echo $string;
?>

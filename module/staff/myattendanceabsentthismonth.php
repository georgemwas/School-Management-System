<?php  
include_once('main.php');
$attendmon = "SELECT DISTINCT (date) FROM attendance WHERE  MONTH( DATE ) = MONTH( CURRENT_DATE ) and YEAR( DATE )=YEAR( CURRENT_DATE )  and date not in (select DISTINCT(date) from attendance where attendedid='$check' and MONTH( DATE ) = MONTH( CURRENT_DATE ) and YEAR( DATE )=YEAR( CURRENT_DATE ))";
$resmon = mysqli_query($con,$attendmon);
echo "<tr> <<th>Absent Date:</th></tr>";
while($r=mysqli_fetch_array($resmon))
{
 echo "<tr><td>",$r['date'],"</td></tr>";

}
?>

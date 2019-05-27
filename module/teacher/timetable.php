<table width="800" border="1">
  <tr>
    <td>TIME</td>
    <td>Monday</td>
    <td>Tuesday</td>
    <td>Wednesday</td>
    <td>Thursday</td>
    <td>Friday</td>
    <td>Saturday</td>
    <td>Sunday</td>
  </tr>
 
  <?php 
$query4= "select COURSEOFFERING.DAY , COURSEOFFERING.BEGINTIME , COURSEOFFERING.ENDTIME , COURSEOFFERING.STATUS  ,COURSEAPP.CAID, COURSEAPP.COID , COURSEAPP.APPLICATIONID  , COURSEOFFERING.COST , COURSEOFFERING.COID, COURSEOFFERING.COURSEID ,COURSE.COURSEID, COURSE.TITLE from courseapp, COURSEOFFERING , COURSE where COURSEAPP.APPLICATIONID =".$appidcheck." and COURSEAPP.COID= COURSEOFFERING.COID and COURSEOFFERING.COURSEID= COURSE.COURSEID order by COURSEOFFERING.BEGINTIME asc";
$result4 = mysql_query($query4);
while($row=mysql_fetch_array($result4)){ 
if($row['DAY']=="Monday"){
echo"<tr>  <td>7:45</td>";
if($row['BEGINTIME']>= "07:45:00" && $row['BEGINTIME']<= "07:59:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "08:00:00" && $row['ENDTIME']<= "08:14:00"){
echo "</tr>";}
echo"<tr>  <td>8:00</td>";
if($row['BEGINTIME']>= "08:00:00" && $row['BEGINTIME']<= "08:14:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "08:15:00" && $row['ENDTIME']<= "08:29:00"){
echo "</tr>";}
echo"<tr>  <td>8:15</td>";
if($row['BEGINTIME']>= "08:15:00" && $row['BEGINTIME']<= "08:29:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "08:30:00" && $row['ENDTIME']<= "08:44:00"){
echo "</tr>";}
echo"<tr>  <td>8:30</td>";
if($row['BEGINTIME']>= "08:30:00" && $row['BEGINTIME']<= "08:44:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "08:45:00" && $row['ENDTIME']<= "08:59:00"){
echo "</tr>";}
echo"<tr>  <td>8:45</td>";
if($row['BEGINTIME']>= "08:45:00" && $row['BEGINTIME']<= "08:59:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "09:00:00" && $row['ENDTIME']<= "09:14:00"){
echo "</tr>";}
echo"<tr>  <td>9:00</td>";
if($row['BEGINTIME']>= "09:00:00" && $row['BEGINTIME']<= "09:14:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "09:15:00" && $row['ENDTIME']<= "09:29:00"){
echo "</tr>";}
echo"<tr>  <td>9:15</td>";
if($row['BEGINTIME']>= "09:15:00" && $row['BEGINTIME']<= "09:29:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "09:30:00" && $row['ENDTIME']<= "09:44:00"){
echo "</tr>";}
echo"<tr>  <td>9:30</td>";
if($row['BEGINTIME']>= "09:30:00" && $row['BEGINTIME']<= "09:44:00"){
echo  "<td>".$row['TITLE']."<br>".$row['BEGINTIME']." - ".$row['ENDTIME']."</td>"; }
if($row['ENDTIME']>= "09:45:00" && $row['ENDTIME']<= "09:59:00"){
echo "</tr>";}
}//monday
else{
  echo  "<td></td>";
   }}
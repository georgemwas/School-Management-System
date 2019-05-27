<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $sql = "DELETE FROM course WHERE id = '$id';";
    $success = mysqli_query($con, $sql,$link );
    if(!$success) {
        die('Could not Delete data: '.mysqli_error());
    }
    echo "Delete data successfully\n";
    header("Location:../admin/deleteCourse.php");
}
?>

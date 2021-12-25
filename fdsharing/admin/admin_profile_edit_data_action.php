<?php session_start(); ?>
<?php include("../mysql.inc.php");
include("../admin_check.php"); ?>

<?php
$profileid = $_POST['profileid'];
$title = $_POST['title'];
$date = $_POST['date'];
$storename = $_POST['storename'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$note = $_POST['note'];

$sql="UPDATE profile SET profileid = '$profileid' , title = '$title' , date ='$date' ,  storename='$storename' , start_time='$start_time', end_time='$end_time' , note='$note' WHERE profileid ='$profileid'";

if (mysql_query($sql)){

  
  echo '<meta http-equiv=REFRESH CONTENT=0;url=admin_profile_edit.php>';
}else {
  echo "error";
}



?>

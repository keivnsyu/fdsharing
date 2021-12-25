<?php session_start(); ?>
<?php include("../mysql.inc.php"); 
include("../admin_check.php");?>

<?php
$newsid = $_POST['newsid'];
$title = $_POST['title'];
$date = $_POST['date'];
$note = $_POST['note'];

$sql="UPDATE news SET newsid = '$newsid' , title = '$title' , date = '$date' , note='$note' WHERE newsid ='$newsid'";
mysql_query($sql);


header('Location: admin_news_edit.php');
//echo '<meta http-equiv=REFRESH CONTENT=0;url=admin_edit.php>';
?>
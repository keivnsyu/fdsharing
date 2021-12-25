<?php session_start(); ?>
<?php include("mysql.inc.php"); ?>

<?php
$id = $_SESSION['MM'];
$realtimeid = $_POST['realtimeid'];;
$record = $_POST['record'];
$title = $_POST['title'];
$address = $_POST['address'];
$nowdate=$_POST['nowdate'];
$nowtime=$_POST['nowtime'];
$note=$_POST['note'];
$sql="UPDATE realtime SET realtimeid = '$realtimeid' , record='$record', title='$title', nowdate ='$nowdate', nowtime='$nowtime', address='$address', note='$note' WHERE realtimeid ='$realtimeid'";
mysql_query($sql);



echo '<meta http-equiv=REFRESH CONTENT=0;url=realtime.php>';
?>

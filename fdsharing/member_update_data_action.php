<?php session_start(); ?>
<?php include("mysql.inc.php"); ?>

<?php
$id = $_SESSION['MM'];
$memberid = $_POST['memberid'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$live=$_POST['live'];
$sql="UPDATE member SET name = '$name' , nickname='$nickname', email='$email', phone ='$phone', live='$live' WHERE memberid ='$memberid'";
mysql_query($sql);



echo '<meta http-equiv=REFRESH CONTENT=0;url=member_management.php>';
?>
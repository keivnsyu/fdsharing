<?php session_start(); ?>
<?php include("mysql.inc.php"); ?>

<?php
$account = $_SESSION['MM'];
$memberid = $_POST['memberid'];
$pw1 = $_POST['pw1'];
$pw2 = $_POST['pw2'];
$sql="UPDATE member SET password = '$pw1' WHERE account ='$account'";
mysql_query($sql);



echo '<meta http-equiv=REFRESH CONTENT=0;url=member_management.php>';
?>

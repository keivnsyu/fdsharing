<?php session_start(); ?>
<?php include("../mysql.inc.php");
include("../admin_check.php");

 ?>

<?php
$memberid = $_POST['memberid'];
$account = $_POST['account'];
$password = $_POST['password2'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$gender = $_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$live=$_POST['live'];
$identity = $_POST['identity'];
$sql="UPDATE member SET account = '$account' , password = '$password' , name = '$name' , nickname='$nickname', gender = '$gender', email='$email', phone ='$phone', live='$live' , identity = '$identity' WHERE memberid ='$memberid'";
mysql_query($sql);

echo '<meta http-equiv=REFRESH CONTENT=0;url=admin_member_management.php>';
//}




?>

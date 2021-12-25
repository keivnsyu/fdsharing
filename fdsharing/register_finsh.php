<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql.inc.php");

$memberid = $_POST['memberid'];
$account = $_POST['account'];
$pw1 = $_POST['pw1'];
$pw2 = $_POST['pw2'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$live = $_POST['live'];
$identity = $_POST['identity'];

$sql = "insert into member (memberid,account, password, name,nickname,gender,email,phone,live,identity) values ('$memberid', '$account', '$pw1', '$name', '$nickname', '$gender', '$email', '$phone', '$live', '$identity')";

 if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
        }



?>

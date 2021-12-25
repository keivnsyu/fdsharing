<?php session_start(); ?>
<?php include("../mysql.inc.php");
include("../admin_check.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$profileid = $_POST['profileid'];
$title = $_POST['title'];
$date = $_POST['date'];
$storename = $_POST['storename'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$note = $_POST['note'];

$sql = "insert into profile (profileid , title , date , storename , start_time , end_time , note) values ('$profileid', '$title', '$date' , '$storename' , '$start_time' , '$end_time' , '$note')";


if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=admin_profile_edit.php>';
        }else {
          echo "error";
        }

?>

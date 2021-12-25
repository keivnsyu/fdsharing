<?php session_start(); ?>
<?php include("../mysql.inc.php"); 
include("../admin_check.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$newsid = $_POST['newsid'];
$date = $_POST['date'];
$title = $_POST['title'];
$note=$_POST['note'];


$sql = "insert into news (newsid,date, title, note) values ('$newsid', '$date', '$title', '$note')";


if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=admin_news_management.php>';
        }

?>
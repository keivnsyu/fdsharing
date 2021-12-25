<?php error_reporting(0);?>
<?php include("mysql.inc.php"); ?>
<?php session_start();
include("../admin_check.php"); ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>美食資訊分享平台</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<link rel="stylesheet" href="..\dist\css\bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="..\dist\js\bootstrap.min.js"></script>
</head>

<body>
<div id="header">
<?php include("../header_1.php"); ?></div>

<div id="body">

 <table width="25%" border="0" align="center">
  <tr align="center">
    <td>
    	<button name="news_add" type="button" class="btn btn-default" value="新增消息" onClick="location.href='admin_news_add.php'">
    	<img src="../images/add_list.png" width="100" height="100">    	</button></td>
    <td>
    	<button name="news_edit" type="button" class="btn btn-default" value="編輯消息" onClick="location.href='admin_news_edit.php'">
    	<img src="../images/edit_list.png" width="100" height="100">    	</button>
      <td>
      
        </td>
  </tr>
</table>


&nbsp; </div>

<div id="footer">
<?php include("footer.php"); ?></div>

</body>
</html>
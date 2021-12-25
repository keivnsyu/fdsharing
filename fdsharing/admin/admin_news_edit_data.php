<?php session_start(); ?>
<?php include("../mysql.inc.php"); ?>
<?php

include("../admin_check.php");
$query_RecNews = "SELECT * FROM news WHERE newsid='".$_GET["newsid"]."'";
$RecNews = mysql_query($query_RecNews);
$row_RecNews=mysql_fetch_array($RecNews);


?>
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

</script>
</head>

<body>
<div id="header">
<?php include("../header_1.php"); ?>
</div>


<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <?php echo '<h2>'.$row_RecNews['title'].'公告資料'.'</h2>'; ?>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>


<div  class="row courseRow">
    <div    class="col-md-2 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-8  col-xs-12">
        <form method="post" action="admin_news_edit_data_action.php" name="updatenewsdata" >


<div class="table-responsive">
<table width="80%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center" valign="middle"><label id="title">標題</label></td>
    <td>
      <input type="hidden" id="newsid" name="newsid" value="<?php echo $row_RecNews['newsid'];?>">
      <input type="text" id="title" name="title" value="<?php echo $row_RecNews['title'];?>"></td>
    <td align="center" valign="middle">公告日期</td>
    <td>
      <input type="date" id="date" name="date" value="<?php echo $row_RecNews['date'];?>">
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">公告內容</td>
    <td><input type="text" id="note" name="note"  value="<?php echo $row_RecNews['note'];?>"></td>

</table>

</div>

     <input type="submit" value="修改資料">&nbsp;&nbsp;
   <button type="button" onclick="history.back()">回上頁</button>
</form>
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  </div>




<div id="footer">
<?php include("footer.php"); ?>
</div>
</body>
</html>
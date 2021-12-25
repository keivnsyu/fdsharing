
<?php include("mysql.inc.php"); ?>
<?php


$query_RecNews = "SELECT * FROM news WHERE newsid='".$_GET["newsid"]."'";
$RecNews = mysql_query($query_RecNews);
$row_RecNews=mysql_fetch_array($RecNews);


?>

<!doctype html>
<!DOCTYPE HTML>

<html>
	<head>
		<title>美食資訊分享平台</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<link rel="stylesheet" href="dist\css\bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="dist\js\bootstrap.min.js"></script>
</head>

<body>
<div id="header">
	<?php include("header.php"); ?>
</div>

<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <h1><?php echo "最新消息"; ?></h1>
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
        <table align="center" width="100%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center">公告標題</td>
    <td align="center" >　<label ><?php echo $row_RecNews['title']; ?></label></td>
  </tr>
  <tr>
    <td align="center" >公告日期</td>
    <td align="center" >　<?php echo $row_RecNews['date']; ?></td>
  </tr>
  <tr>
    <td align="center" >公告內容</td>
    <td align="center" >　<?php echo $row_RecNews['note']; ?></td>
  </tr>
</table>

<div  class="row courseRow">
    <div    class="col-md-4 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-4  col-xs-12">
        <button type="button" class="btn btn-default" onclick="history.back()">回上頁</button>
    </div>
    <div  class="CoursesShare col-md-4  col-xs-12">
        <!-- NULL -->
    </div>
  </div>
  

</div>
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  </div>
<div id="body98">


<div id="footer">
	<?php include("footer.php"); ?>
</div>
</body>
</html>
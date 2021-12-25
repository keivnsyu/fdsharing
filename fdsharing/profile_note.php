
<?php include("mysql.inc.php"); ?>
<?php


$query_Recprofile = "SELECT * FROM profile WHERE profileid='".$_GET["profileid"]."'";
$Recprofile = mysql_query($query_Recprofile);
$row_Recprofile=mysql_fetch_array($Recprofile);


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
        <h1><?php echo "活動消息"; ?></h1>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>


<div  class="row courseRow">
    <div  class="col-md-2 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-8  col-xs-12">
           <table align="center" width="100%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center">活動標題</td>
    <td align="center" >　<label ><?php echo $row_Recprofile['title'];  ?></label></td>
  </tr>
  <tr>
    <td align="center" >公告日期</td>
    <td align="center" >　<?php echo $row_Recprofile['date']; ?></td>
  </tr>
  <tr>
    <td align="center" >主辦店家</td>
    <td align="center" >　<?php echo $row_Recprofile['storename']; ?></td>
  </tr>
  <tr>
    <td align="center" >開始時間</td>
    <td align="center" >　<?php echo $row_Recprofile['start_time']; ?></td>
  </tr>
  <tr>
    <td align="center" >結束時間</td>
    <td align="center" >　<?php echo $row_Recprofile['end_time']; ?></td>
  </tr>
  <tr>
    <td align="center" >活動內容</td>
    <td align="center" >　<?php echo $row_Recprofile['note']; ?></td>
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
    <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  </div>





<div id="footer">
	<?php include("footer.php"); ?>
</div>
</body>
</html>

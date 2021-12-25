<?php error_reporting(0);?>
<?php session_start(); 
include("../admin_check.php");?>
<!doctype html>
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

<?php if ($_SESSION['group'] != "管理者")
		{
			echo '<meta http-equiv=REFRESH CONTENT=0;url=../error.php>';
		} else {?>

<div id="header">
    <?php include("../header_1.php"); ?>
  </div>
</div>


<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <?php echo '<h2>新增 最新消息</h2>'; ?>
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
        <script src="ckeditor/ckeditor.js"></script>
		<form action="admin_news_add_actioin.php" method="post">
 <input type="hidden" name="newsid">
<table width="80%" border="0" class="table table-striped table-condensed table-hover">
  <tr align="center">
    <td>公告日期</td>
    <td>
    	<input type="date" name="date" >
    </td>
  </tr>
  <tr align="center">
    <td>公告標題</td>
    <td>
    	<input type="text" name="title">
    </td>
  </tr>
  <tr align="center">
    <td>公告內容</td>
    <td>
    	<!--input type="text" name="note"-->
		<textarea class="form-control" name="note" id="goods_content" placeholder="請輸入公告內容"></textarea>
    </td>
  </tr>
</table>

<p align="center">
	<input type="submit" name="submit" value="發佈訊息">
</p>


</form>
		
		
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  </div>


  



<div id="footer">
<?php include("footer.php"); ?>
</div>
<?php } ?>
</body>
</html>

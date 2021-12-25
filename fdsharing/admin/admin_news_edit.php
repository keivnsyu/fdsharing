<?php error_reporting(0);?>
<?php session_start(); ?>
<?php include("../mysql.inc.php");
include("../admin_check.php");
$query_RecNews= " SELECT * FROM news ";
$RecNews = mysql_query($query_RecNews);
$row_RecNews = mysql_fetch_array($RecNews);

if(isset($_GET["action"])&&($_GET["action"]=="delete")){
	$query_delNews = "DELETE FROM news WHERE newsid=".$_GET["id"];
	mysql_query($query_delNews);

	header("Location: admin_news_edit.php");
}

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

<script language="javascript">
function deletesure(){
    if (confirm('\n您確定要刪除這個訊息嗎?')) return true;
    return false;
}
</script>

</head>

<body>
<div id="header">
<?php include("../header_1.php"); ?></div>


<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <?php echo '<h2>最新消息</h2>'; ?>
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
        
		
		<div class="table-responsive">
<table width="80%" border="0" class="table table-striped table-condensed table-hover">
  <tr align="center">
    <td>公告日期</td>
    <td>公告標題</td>
    <td>公告內容</td>
    <td></td>
  </tr>

  <?php while ($row_RecNews = mysql_fetch_array($RecNews) ){ ?>
  <tr  align="center">
    <td>　<?php echo $row_RecNews["date"] ?></td>
    <td>　<?php echo $row_RecNews["title"] ?></td>
    <td>　<?php echo $row_RecNews["note"] ?></td>
    <td>　<a href="admin_news_edit_data.php?newsid=<?php echo $row_RecNews["newsid"] ?>"><img src="../images/pencil-edit-button.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=delete&id=<?php echo $row_RecNews["newsid"];?>" onClick="return deletesure();"><img src="../images/rubbish-bin.png"></a></td>
<?php } ?>
  </tr>

</table>
<button name="news_add" type="button" class="btn btn-default" value="新增消息" onClick="location.href='admin_news_add.php'">
新增消息   	</button>
</div>
		
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  </div>





<div id="footer">
<?php include("footer.php"); ?></div>
</body>
</html>

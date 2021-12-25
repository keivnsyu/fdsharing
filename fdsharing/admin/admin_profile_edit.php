<?php error_reporting(0);?>
<?php session_start(); ?>
<?php include("../mysql.inc.php");
include("../admin_check.php");
$query_Recprofile= " SELECT * FROM profile ";
$Recprofile = mysql_query($query_Recprofile);

if(isset($_GET["action"])&&($_GET["action"]=="delete")){
	$query_delprofile = "DELETE FROM profile WHERE profileid=".$_GET["id"];
	mysql_query($query_delprofile);

	header("Location: admin_profile_edit.php");
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
    if (confirm('\n您確定要刪除此筆資料嗎?')) return true;
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
        <?php echo '<h2>活動快訊</h2>'; ?>
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
						<td>活動公告日期</td>
						<td>活動標題</td>
						<td>活動內容</td>
						<td></td>
					</tr>

					<?php while ($row_Recprofile = mysql_fetch_array($Recprofile) ){ ?>
					<tr  align="center">
						<td>　<?php echo $row_Recprofile["date"] ?></td>
						<td>　<?php echo $row_Recprofile["title"] ?></td>
						<td>　<?php echo $row_Recprofile["note"] ?></td>
						<td>　<a href="admin_profile_edit_data.php?profileid=<?php echo $row_Recprofile["profileid"] ?>"><img src="../images/pencil-edit-button.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?action=delete&id=<?php echo $row_Recprofile["profileid"];?>" onClick="return deletesure();"><img src="../images/rubbish-bin.png"></a></p></td>
				<?php } ?>
					</tr>

				</table>

				</div>

      </div>
      <div  class="CoursesShare col-md-2  col-xs-12">
          <!-- NULL -->
      </div>
    </div>


		<div  class="row courseRow">
		    <div    class="col-md-2 col-xs-12">
		      <!-- NULL -->
		    </div>
		    <div  class="CoursesShare col-md-8  col-xs-12">



					<div    class="col-md-5 col-xs-12">
						<!-- NULL -->
					</div>
							<div  class="CoursesShare col-md-2  col-xs-12">
									<button name="profile_add" type="button" class="btn btn-default" value="新增活動訊息" onClick="location.href='admin_profile_add.php'">新增活動訊息</button>
							</div>
							<div    class="col-md-5 col-xs-12">
					      <!-- NULL -->
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

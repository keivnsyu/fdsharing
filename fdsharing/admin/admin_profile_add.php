<?php error_reporting(0);?>
<?php session_start(); 
include("../admin_check.php");?>
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
        <?php echo '<h2>新增活動快訊</h2>'; ?>
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
          <!--  ////////////////////////////////  -->
      <div  class="col-md-2 col-xs-12">
        <!-- NULL -->
      </div>
      <div  class="CoursesShare col-md-8  col-xs-12">



      <form action="admin_profile_add_actioin.php" method="post">
          <input type="hidden" name="profileid">
                  <table align="center" width="100%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center">活動標題</td>
    <td align="center" >　<input name="title" id="title" type="text" class="form-control" value="<?php  echo $row_Recprofile['title'];?>">
</td>
  </tr>
  <tr>
    <td align="center" >公告日期</td>
    <td align="center" ><input name="date" type="date" id="date" class="form-control" value="<?php  echo $row_Recprofile['date'];?>"></td>
  </tr>
  <tr>
    <td align="center" >再主辦店家</td>
    <td align="center" >　 <input name="storename" id="storename" type="text" class="form-control" value="<?php  echo $row_Recprofile['storename'];?>" ></td>
  </tr>
  <tr>
    <td align="center" >開始時間</td>
    <td align="center" >　<input name="start_time" id="start_time" type="datetime-local" class="form-control" value="<?php  echo $row_Recprofile['start_time'];?>"></td>
  </tr>
  <tr>
    <td align="center" >結束時間</td>
    <td align="center" >　<input name="end_time" id="end_time" type="datetime-local" class="form-control" value="<?php  echo $row_Recprofile['end_time'];?>"></td>
  </tr>
  <tr>
    <td align="center" >活動內容</td>
    <td align="center" >　<textarea type="text" name="note" id="note" class="form-control" id="inputnote" rows="10" ><?php  echo $row_Recprofile['note'];?></textarea></td>
  </tr>
  
  <tr>
    <td align="center" ><input type="submit" value="確定新增"></td>
    <td align="center" ><button type="button" onclick="history.back()">回上頁</button>　</td>
  </tr>
  
</table>






    </form>


      </div>
      <div  class="CoursesShare col-md-2  col-xs-12">
          <!-- NULL -->
      </div>
      <!--  ////////////////////////////////  -->

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

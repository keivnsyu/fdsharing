<?php session_start(); ?>
<?php include("mysql.inc.php"); ?>
<?php


$query_Recrealtime = " SELECT * FROM realtime WHERE realtimeid= '" . $_GET["realtimeid"] . "' ";
$Recrealtime = mysql_query($query_Recrealtime);
$row_Recrealtime=mysql_fetch_array($Recrealtime);


?>
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
<?php


date_default_timezone_set('Asia/Taipei');
 $nowdate = date ("Y-m-d");
 $nowtime = date ("H:i:s");

  $nowdate ;
  $nowtime ;

    ?>
<body>
<div id="header">
<?php include("header.php"); ?>
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



      <form action="realtime_update_data_action.php" method="post">
          <input type="hidden" name="realtimeid" id="realtimeid" value="<?php  echo $row_Recrealtime['realtimeid'];?>">
          <input type="hidden" name="record" id="record" value="<?php  echo $row_Recrealtime['record'];?>">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">標題</label>
                    <div class="col-sm-10">
                      <input name="title" id="title" type="text" class="form-control" value="<?php  echo $row_Recrealtime['title'];?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">日期</label>
                    <div class="col-sm-10">
                      <input name="nowdate" type="date" id="nowdate" class="form-control" value="<?php  echo $row_Recrealtime['nowdate'];?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">時間</label>
                    <div class="col-sm-10">
                      <input name="nowtime" id="nowtime" type="time" class="form-control" value="<?php  echo $row_Recrealtime['nowtime']?>" >
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">地址</label>
                    <div class="col-sm-10">
                      <input name="address" id="address" type="address" class="form-control" value="<?php  echo $row_Recrealtime['address'];?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">內容</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="note" name="note" rows="10"><?php  echo $row_Recrealtime['note'];?></textarea>

                    </div>
                  </div>




                  <div class="form-group">
                    <label class="col-sm-2 control-label">  </label>
                    <div class="col-sm-10">
                      <input type="submit" value="修改資料">&nbsp;&nbsp;
                    <button type="button" onclick="history.back()">回上頁</button>
                    </div>
                  </div>


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
</body>
</html>

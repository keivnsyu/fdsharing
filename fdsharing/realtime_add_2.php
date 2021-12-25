<?php session_start(); ?>
<?php include("mysql.inc.php");
include("check.php"); ?>
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
     $address = $_POST["address"];

  date_default_timezone_set('Asia/Taipei');
   $nowdate = date ("Y-m-d");
   $nowtime = date ("H:i:s");

   if(!empty($_GET["user_lat"]))
   $user_lat = $_GET["user_lat"];
   if(!empty($_GET["user_lng"]))
   $user_lng = $_GET["user_lng"];

    ?>
<body>
<div id="header">
		<?php
  echo $_SESSION['MM'];
    include("header.php"); ?>
	</div>
	
	
	
	<div  class="row courseRow">
							<div  class="col-md-5 col-xs-12">
							<!-- NULL -->
						  </div>
						  <div  class="col-md-5 col-xs-12">
							<h2>新增即時標記</h2>
						  </div>
						  <div  class="col-md-2 col-xs-12">
							<!-- NULL -->
						  </div></div>
	
	
	

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



          <form class="form-horizontal" role="form" action="realtime_add_action.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-sm-2 control-label">標題</label>
              <div class="col-sm-10">
                <input  type="hidden" id="realtimeid" name="realtimeid">
                <input name="record" type="hidden" id="record" value="<?php  echo $_SESSION['MM']; ?>">
                <input name="title" id="title" type="text" class="form-control" value="">
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">日期</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="nowdate" name="nowdate"  value="<?php echo $nowdate ?>">
               
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">時間</label>
              <div class="col-sm-10">
                <input type="time" class="form-control" id="nowtime" name="nowtime"  value="<?php echo $nowtime ?>">
                
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">地址</label>
              <div class="col-sm-10">

               <input type="text" class="form-control" id="address" name="address"
                      value="<?php  echo $address ?>" ><br>
					  
				<iframe  width="500" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php  echo $address; ?>&key=AIzaSyB6rPWjbHyRZoomestCID_UVGx27rHMqW8" allowfullscreen >d  </iframe> 
               

              </div>

            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">相片</label>
              <div class="col-sm-10">

              　<input type="file" name="fileField" id="fileField" />

              </div>   
            </div>


            <div class="form-group">
              <label class="col-sm-2 control-label">內容</label>
              <div class="col-sm-10">
                <!-- <input type="text" class="form-control" id="inputdate" placeholder="Password" rows="10"> -->
                <textarea class="form-control" id="note" name="note" rows="10"></textarea>
              </div>
            </div>


              <div  class="row courseRow">
            <div  class="CoursesShare col-md-6  col-xs-12">
                <button type="submit" class="form-control" >確定</button>

            </div>
            <div  class="CoursesShare col-md-6  col-xs-12">
<button type="rest" class="form-control" >重填</button>
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

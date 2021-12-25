<?php session_start(); ?>
<?php include("mysql.inc.php"); ?>
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

   //if(!empty($_GET["user_lat"]))
   $user_lat = $_GET["user_lat"];
 //  if(!empty($_GET["user_lng"]))
    $user_lng = $_GET["user_lng"];
   $error = $_GET["error"];

$formatted_address = $_GET["formatted_address"];
//echo $formatted_address;

    ?>

<body>


<div >
		<?php
  echo $_SESSION['MM'];
    include("header.php");
include("check.php");
	?>
	</div>
	<div  class="row courseRow">
							<div  class="col-md-5 col-xs-12">
							<!-- NULL -->
						  </div>
						  <div  class="col-md-4 col-xs-12">
							<h2>新增即時標記</h2>
						  </div>
						  <div  class="col-md-3 col-xs-12">
							<!-- NULL -->
						  </div></div>
	
	

  <div  class="row courseRow">
      <div  class="col-md-2 col-xs-12">
        <!-- NULL -->
      </div>
      <div  class="CoursesShare col-md-8  col-xs-12">
								<!--  ////////////////////////////////  -->
								
											
							<div  class="col-md-2 col-xs-12">

								<!--  ////////////////////////////////  -->

							</div>
							<div  class="CoursesShare col-md-8  col-xs-12">

							  <?php if (!empty($error)){
									if ( $error = true ){?>

									  <div class="alert alert-danger alert-dismissible fade in" role="alert">
										  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										  <p>   error 找不到位置，請手動填入地址 或 請打開 GPS ，再試一試</p>
									  </div>


									  <script type="text/javascript">
									  $(document).ready(function() {
										  // alert auto close
										/*  window.setTimeout(function() {
											  $('.alert').alert('close');
										  }, 3000);*/
										   特效2
										  window.setTimeout(function() {
											  $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
												  $(this).alert('close');
											  });
										  }, 3000);

									  });
									  </script>

									  <?php
									}
						  }?>

							  <form class="form-horizontal" role="form" action="realtime_add_2.php" method="post">

								<div class="form-group">
								  <label class="col-sm-2 control-label">地址</label>
								  <div class="col-sm-8">
									<input type="address" class="form-control" id="address" name="address"
										  value="<?php echo $formatted_address ?>" required placeholder="請輸入目前所在地" title='由英文或數字所組成的6~16字元'>
										  <br>
										  <?php if (!empty($formatted_address)){ ?>
											 <iframe  width="500" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php  echo $formatted_address; ?>&key=Your Keys" allowfullscreen >d  </iframe> 
										  <?php
										  }else{
											  echo '';
										  }
										   				  
										  ?>
								  </div>
								  <div class="col-sm-2">
									  <button type="button" id="GPS" class="form-control btn btn-default" onclick="location.href='gps.php'"><img src="images/navigation.png" class="img-responsive" alt="Responsive image"></button>
								</div>
								</div>











								  <div  class="row courseRow">
								<div  class="CoursesShare col-md-6  col-xs-12">
									<button type="submit" class="form-control" >下一步 </button>

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
	
	
	
	<div  class="row courseRow">
							<div  class="col-md-5 col-xs-12">
							<!-- NULL -->
						  </div>
						  <div  class="col-md-2 col-xs-12">
							<h1>  </h1>
							<h1>  </h1>
							<h1>  </h1>
							<h1>  </h1>
						  </div>
						  <div  class="col-md-5 col-xs-12">
							<!-- NULL -->
						  </div></div>




<div id="footer">
  <?php include("footer.php"); ?>
	</div>



</body>
</html>

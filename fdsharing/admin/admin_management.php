<?php error_reporting(0);?>
<?php session_start();
include("../admin_check.php"); ?>

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
  <?php

    $sate1 = $_GET["sate1"];
   ?>
<?php if ($_SESSION['group'] != "管理者")
		{
			echo '<meta http-equiv=REFRESH CONTENT=0;url=../error.php>';
		} else {?>

<div id="header">
<?php include("../header_1.php"); ?></div>

<div>


<div  class="CoursesShare col-md-2  col-xs-12">
</div>
<div  class="CoursesShare col-md-8  col-xs-12">
    <!-- NULL -->


  <?php

      if (  !empty($sate1)   ){
            if ($sate1 = sucess_login){ ?>
              <div class="alert bg-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <p>   你已成功登入</p>
                  </div>

   <?php

          }
            }
    ?>

  </div>
  <div  class="CoursesShare col-md-2  col-xs-12">
      <!-- NULL -->
  </div>
</div>
<br>




          <script type="text/javascript">
          $(document).ready(function() {
              // alert auto close
             window.setTimeout(function() {
                  $('.alert').alert('close');
              }, 2500);
          //     特效2
          /*    window.setTimeout(function() {
                  $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                      $(this).alert('close');
                  });
              }, 3000);*/

          });
          </script>
		  
		  
		  
		  
		  <div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="admin_member_management.php" class="image featured"><img src="../images/member_data.png" width="100" height="250" alt="" /></a>
										<div class="inner">
											<header>
												<h2>會員管理</h2>
											</header>
										</div>
									</section>

							</div>
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="admin_news_edit.php" class="image featured"><img src="../images/news.png" width="100" height="250" alt="" /></a>
										<div class="inner">
											<header>
												<h2>最新消息</h2>
											</header>
										</div>
									</section>

							</div>
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="admin_profile_edit.php" class="image featured"><img src="../images/profile.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>活動訊息</h2>
											</header>
										</div>
									</section>

							</div>
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="admin_foodstores_edit.php" class="image featured"><img src="../images/food.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>商家管理</h2>
											</header>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>
		  
		  
		  





<?php } ?>

<div id="footer">
  <?php require("footer.php"); ?></div>
</body>
</html>

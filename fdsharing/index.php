<?php session_start(); ?>
<?php include("mysql.inc.php"); 

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
	<body class="homepage">
		<div id="page-wrapper">

			
				
				
				
				<!-- 驗證 -->
				
				<div  class="CoursesShare col-md-2  col-xs-12">
									<!-- NULL -->
								</div>
				
				<div  class="CoursesShare col-md-8  col-xs-12">

					<?php

							$sate = $_GET["sate"];
							$sate1 = $_GET["sate1"];
							$error = $_GET["error"];
						?>


						<?php

							if ( !empty($error)   ){
								if ($error = true){ ?>
									  <div class="alert alert-danger alert-dismissible fade in" role="alert">
										  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										  <p>Error，請重新登入。</p>
										  </div>

							<?php

								  }
								}

							?>

							<?php

								if ( !empty($sate)   ){
									if ($sate = sucess_logout){ ?>
									  <div class="alert bg-success alert-dismissible fade in" role="alert">
										  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										  <p>   你已成功登出</p>
										  </div>

							<?php

								  }
								}

							?>

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






									<script type="text/javascript">
									$(document).ready(function() {
									/*	// alert auto close
									   window.setTimeout(function() {
											$('.alert').alert('close');
										}, 250);*/
									//     特效2
									    window.setTimeout(function() {
											$(".alert").fadeTo(1000, 0).slideUp(1000, function(){
												$(this).alert('close');
											});
										}, 3000);

									});
									</script>
								  

								</div>
								<div  class="CoursesShare col-md-2  col-xs-12">
									<!-- NULL -->
								</div>
							  </div>
							  <br>


  <!-- Header -->
				
				<?php include('header.php'); ?>
  
  
			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						
							
							<?php include('boar.php'); ?>
							
						
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="food_information.php?sn=185" class="image featured"><img src="images/00DC1P983A66F4C3A9F38Clv.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>歐兔咖啡 臺中中工店</h2>
												<p>臺中市西屯區中工三路96號</p>
											</header>
									</section>

							</div>
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="food_information.php?sn=329" class="image featured"><img src="images/1372823853-3863413326_n.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>魏姐包心粉圓</h2>
												<p>臺中市西屯區福星路567號2F</p>
											</header>
										</div>
									</section>

							</div>
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="food_information.php?sn=402" class="image featured"><img src="images/1234.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>達克牛排</h2>
												<p>臺中市西屯區福星路326號</p>
											</header>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
			
				
				<div  class="CoursesShare col-md-1  col-xs-12">
			</div>
			 <div  class="CoursesShare col-md-10  col-xs-12">
						<?php include('news.php'); ?>
						
				</div>
				<div  class="CoursesShare col-md-1  col-xs-12">
			</div>
			
			

			<!-- Footer -->
				<?php include('footer.php'); ?>

	</body>
</html>
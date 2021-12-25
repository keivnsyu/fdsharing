<?php session_start(); 

$id = $_SESSION['MM'];

include("mysql.inc.php"); 

$query_Stores = "SELECT *
				 FROM stores  LEFT JOIN stores_info ON stores.sn = stores_info.ssn 
				 where stores_info.addmark>=DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
				 
				  ";
				 
$RecStores = mysql_query($query_Stores);

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>新美食</title>
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
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				
				<header id="header" class="container">
				<?php include('header.php'); ?>
				</header>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>

									<h2 align="center">新美食</h2>
									
									
									<?php if ( $id == NULL ){
	
		echo '';
}else{  ?>
	
	<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <button type="button" class="btn btn-default" onclick="location.href='add_foodstores.php'">我要建議美食店家</button>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>
  
<?php } 


	
	?>
		

									<div id="features-wrapper">
					<div class="container">
						<div class="row">
						<?php 

while($row_Stores = mysql_fetch_assoc($RecStores)){
	
	?>
	
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="food_information.php?sn=<?php echo $row_Stores["sn"]; ?>" class="image featured"><img src="uploadfiles/<?php echo $row_Stores["image"];?>" alt=""  width="300" height="300"/></a>
										<div class="inner">
											<header>
												<h2><?php echo $row_Stores["brandname"];   ?></h2>
												<p><?php  echo $row_Stores["storename"] ?></p>
											</header>
											<p><?php  echo $row_Stores["address"] ?></p>
										</div>
									</section>

							</div>
							
							<?php } ?>
							
							
						</div>
					</div>
				</div>

								</article>

						</div>
					</div>
				</div>

			<!-- Footer -->
				<?php include('footer.php'); ?>

	</body>
</html>
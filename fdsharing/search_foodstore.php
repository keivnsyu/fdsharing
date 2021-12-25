<?php
include( "mysql.inc.php") ;

$brandname = $_POST['brandname'] ;
$query_RecStores = "SELECT * FROM stores  LEFT JOIN stores_info ON stores.sn = stores_info.ssn  WHERE brandname  LIKE '%$brandname%'";
$RecStores = mysql_query($query_RecStores);
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


<body class="no-sidebar" >
  
  <?php  include( 'header.php'); ?>
  <div  class="row courseRow">
  
      <div    class="col-md-2 col-xs-12">
        <!-- NULL -->
      </div>
	  <div    class="col-md-8 col-xs-12">
  <form method="post" action="">
            搜尋: <input type="text" name="brandname">
            <button type="submit" ><img src="images/magnifier (2).png" ></button>
          </form>
		  </div>
      <div    class="col-md-2 col-xs-12">
        <!-- NULL -->
      </div>
		  </div>
		  <br>
		  <br>
		  <br>

  <div  class="row courseRow">
      <div    class="col-md-1 col-xs-12">
        <!-- NULL -->
      </div>
      <div  class="  CoursesShare col-md-10  col-xs-12">

          <!-- ========================== -->

          

          <?php
          if ( empty($brandname) )
          {
          echo '' ;}//nopic.png
          else{ ?>
		  
		  <div id="features-wrapper">
					<div class="container">
						<div class="row">
		  
		  <?php
          while($row_Stores = mysql_fetch_array($RecStores)){
              $brandname = $row_Stores['brandname'];
              $address = $row_Stores['address'];
          ?>
			<?php if ( !empty($row_Stores["image"]) ) { ?>
			
						<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="food_information.php?sn=<?php echo $row_Stores["sn"]; ?>" target="_blank" class="image featured"><img src="uploadfiles/<?php echo $row_Stores["image"];?>" alt=""  width="300" height="300"/></a>
										<div class="inner">
											<header>
												<h2><?php echo $row_Stores["brandname"];   ?></h2>
												<p><?php  echo $row_Stores["storename"] ?></p>
											</header>
											<p><?php  echo $row_Stores["address"] ?></p>
										</div>
									</section>

							</div>
			
			<?php }else{ ?>
			
			
			
						<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="food_information.php?sn=<?php echo $row_Stores["sn"]; ?>" target="_blank" class="image featured"><img src="images/nopic.png" alt=""  width="300" height="300"/></a>
										<div class="inner">
											<header>
												<h2><?php echo $row_Stores["brandname"];   ?></h2>
												<p><?php  echo $row_Stores["storename"] ?></p>
											</header>
											<p><?php  echo $row_Stores["address"] ?></p>
										</div>
									</section>

							</div>
			
          <?php
            }
		  }
          	}
          ?>
          <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
      </div>
	  </div>
	  </div>
      
    </div>
	<div  class="CoursesShare col-md-1  col-xs-12">
          <!-- NULL -->
      </div>

<div >
<?php include( 'footer.php'); ?>
</div>

</body>
</html>

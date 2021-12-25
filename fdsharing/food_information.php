<?php

include("mysql.inc.php");
$sn = $_GET["sn"];

$query_Stores = "SELECT stores.sn ,stores.storetype , stores.brandname , stores.storename , stores.district, stores.address, stores.phone, stores.dateofenforcement ,stores.goodtype ,stores.goodnote ,stores.note , stores_info.ssn ,stores_info.summary ,stores_info.fbline , stores_info.image
				 FROM stores  , stores_info 
				 WHERE stores.sn = stores_info.ssn  AND  stores_info.ssn='".$_GET["sn"]."'  ";
$RecStores = mysql_query($query_Stores);
$row_Stores=mysql_fetch_array($RecStores);

$sn = $row_Stores['sn'];
$storetype = $row_Stores['storetype'];
$storepattern = $row_Stores['storepattern'];
$brandname = $row_Stores['brandname'];
$storename = $row_Stores['storename'];
$distrct = $row_Stores['district'];
$address = $row_Stores['address'];
$phone = $row_Stores['phone'];
$dateofenforcement = $row_Stores['dateofenforcement'];
$goodtytpe = $row_Stores['goodtype'];
$goodnote = $row_Stores['goodnote'];
$note = $row_Stores['note'];
$record = $row_Stores['record'];
$summary = $row_Stores['summary'];
$fbline = $row_Stores['fbline'];

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
		<link href="styles.css" rel="stylesheet" type="text/css">
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

									<div id="store">


      <div   class="row courseRow">
	  
			<?php if ( !empty($row_Stores["image"]) ) { ?>
          <div  id="storelogo"  class="col-md-6 col-xs-12">
           
			 <img src="uploadfiles/<?php echo $row_Stores["image"]; ?>" class="img-rounded" width="300" height="300" >
          </div>
			<?php }else{ ?>
			<div  id="storelogo"  class="col-md-6 col-xs-12">
           
			 <img data-src="holder.js/300x300" src="images/nopic.png" width="300" height="300" class="courseImg img-responsive" >
          </div>
			
			<?php } ?>

          <div  class="CoursesShare col-md-6  col-xs-12">


            <table align="center"  width="100%" class="table table-striped table-hover  " border="0" cellpadding="0">
              <tr>
                <td align="center"><p>店家名稱</p></td>
                <td  align="center"><p><?php echo  $brandname ; ?></p></td>
              </tr>

              <tr>
                <td align="center"><p>類型</p></td>
                <td  align="center"><p><?php echo $storetype; ?></p></td>
              </tr>

              <tr>
                <td align="center"><p>分店名稱</p></td>
                <td  align="center"><p>
                  <?php
                  if ($storename != NULL) {
                    echo $storename;
                  } else {
                    echo "無分店，唯獨一家";
                  }

                   ?></p></td>
              </tr>

              <tr>
                <td align="center"><p>店家電話</p></td>
				
                <td  align="center"><p>
				<?php if( !empty($phone)){ ?>
				<?php echo $phone; ?></p>
				<?php }else{ echo '─'; }?>
				</td>
              </tr>

              <tr>
                <td align="center"><p>店家地址</p></td>
                <td  align="center"><p><?php echo $address; ?></p></td>
              </tr>

              <tr>
                <td align="center"><p>好康</p></td>
                <td  align="center">
				
				<?php if( !empty($goodnote)){ ?>
				<p><?php echo $goodnote; ?></p>
				<?php }else{ echo '─'; }?>
				</td>
              </tr>
			  
			  <tr>
                <td align="center"><p>FB粉絲專業</p></td>
                <td  align="center">
				
				  <?php if( !empty($fbline)){ ?>
				<a href="<?php echo $fbline ; ?>" target="_blank" ><p>請按我</p></a>
				  <?php }else{ echo '─'; }?>
				</td>
              </tr>

              <tr>
                <td align="center"><p>備註</p></td>
                <td  align="center"><p>
                  <?php
                    if ($note != NULL){
                      echo $note;
                    }else {
                      echo "─";
                    } ?></p></td>
              </tr>


            </table>

          </div>



        </div>






<hr>



    <!-- ======================== -->

    <div role="tabpanel">

      <!-- Nav tabs -->
      <ul class="nav nav-justified nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">美食簡介</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img src="images/placeholder_1.png">路徑規劃 與 位置</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
				<div  class="row courseRow">
						<div    class="col-md-3 col-xs-12">
						  <!-- NULL -->
						</div>
						<div  class="CoursesShare col-md-6  col-xs-12">
							<?php  //echo $summary;
							if ( $summary == NULL ){
								echo '<img src="./images/illust-404.png" class="img-responsive" alt="Responsive image" align="center">
          
							  <h2>對不起，目前尚未有簡介!!</h2>
							  <h2>歡迎提供美食簡介</h2>';
							  }else{
								  
								  echo '<h3>'.$summary.'</h3>';
							  }
							 
							  ?>
						</div>
						<div  class="CoursesShare col-md-3  col-xs-12">
							<!-- NULL -->
						</div>
				  </div>

          

        </div>
        <div role="tabpanel" class="tab-pane" id="profile">




              


                
			<?php 
			  if ($address != NULL){
			?>
			<div class="video-container">
 <iframe  width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php  echo $address; ?>&key=AIzaSyB6rPWjbHyRZoomestCID_UVGx27rHMqW8" allowfullscreen >d  </iframe>
</div>
			  <?php }else{
				  echo "error";
			  }?>
            


        </div>
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
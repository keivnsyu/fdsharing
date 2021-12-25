
<?php
include("mysql.inc.php");


$query_realtime = "SELECT title, nowdate, nowtime, address, note, picture
				 FROM realtime 
				 WHERE   realtimeid='".$_GET["realtimeid"]."'  ";
$Recrealtime = mysql_query($query_realtime);
$row_realtime=mysql_fetch_array($Recrealtime);

$realtimeid = $row_realtime['realtimeid'];
$title = $row_realtime['title'];
$nowdate = $row_realtime['nowdate'];
$nowtime = $row_realtime['nowtime'];
$address = $row_realtime['address'];
$note = $row_realtime['note'];
$picture = $row_realtime['picture'];



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

<body>
	
		<?php include("header.php"); ?>
	
<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>
  

    <div id="store">


      <div   class="row courseRow">
	  
			<?php if ( !empty($row_realtime["picture"]) ) { ?>
          <div  id="storelogo"  class="col-md-6 col-xs-12">
           
			 <img src="realtime_pic/<?php echo $row_realtime["picture"]; ?>" class="img-rounded" width="300" height="300" >
          </div>
			<?php }else{ ?>
			<div  id="storelogo"  class="col-md-6 col-xs-12">
           
			 <img data-src="holder.js/300x300" src="images/nopic.png" width="300" height="300" class="courseImg img-responsive" >
          </div>
			
			<?php } ?>

          <div  class="CoursesShare col-md-6  col-xs-12">


            <table align="center"  width="100%" class="table table-striped table-hover  " border="0" cellpadding="0">
              <tr>
                <td align="center"><p>標題</p></td>
                <td  align="center"><p><?php echo  $row_realtime["title"] ; ?></p></td>
              </tr>

              <tr>
                <td align="center"><p>日期</p></td>
                <td  align="center"><p><?php echo $row_realtime["nowdate"]; ?></p></td>
              </tr>

              <tr>
                <td align="center"><p>時間</p></td>
                <td  align="center"><p>
                  <?php               
                    echo $row_realtime["nowtime"];
                  
                   ?></p></td>
              </tr>

              <tr>
                <td align="center"><p>地址</p></td>
                <td  align="center"><p><?php echo $row_realtime["address"]; ?></p></td>
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
							<?php  //echo $note;
							if ( $note == NULL ){
								echo '<img src="./images/illust-404.png" class="img-responsive" alt="Responsive image" align="center">
          
							  <h2>對不起，目前尚未有簡介!!</h2>
							  <h2>歡迎提供美食簡介</h2>';
							  }else{ ?>
							  
							  
							  
										<table  border="0" class="table table-striped table-condensed table-hover">
												<tr>
													<td><?php echo '<h1>'.$note.'</h2>'; ?></td>
												</tr>
										</table>
											
							  
							  
								  
							 <?php }
							 
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
 <iframe  width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php  echo $address; ?>&key=Your Keys" allowfullscreen >d  </iframe>
</div>
			  <?php }else{
				  echo "error";
			  }?>
            


        </div>
      </div>

    </div>

</div>
</div>


</article>

						</div>
					</div>
				</div>

			<!-- Footer -->

<br>


	<div id="footer">
		<?php include("footer.php"); ?>
	</div>



</body>
</html>


<?php 
error_reporting(0);
session_start(); 
include("mysql.inc.php");
include("check.php");
$id = $_SESSION['MM'];

$query_Recrealtime = " SELECT * FROM realtime WHERE record = '$id'";
$Recrealtime = mysql_query($query_Recrealtime);


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

<script language="javascript">
function deletesure(){
    if (confirm('\n您確定要刪除這個會員嗎?')) return true;
    return false;
}
</script>

</head>

<body>
<div >
	<?php include("header.php"); ?>
</div>

<div  class="row courseRow">
    

    
</div>
<div align="center"><h1><?php echo $id; ?>過去即時標記的紀錄</h1></div>
      


    



			<div id="features-wrapper">
					<div class="container">
						<div class="row">
						<?php 

						while (  $row_Recrealtime = mysql_fetch_array($Recrealtime ))  {
	
						?>
	
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<a href="realtime_info.php?realtimeid=<?php echo $row_Recrealtime["realtimeid"];?>" class="image featured"><img src="realtime_pic/<?php echo $row_Recrealtime["picture"];?>" alt=""  width="300" height="300"/></a>
										<div class="inner">
											<header>
												<h2><?php echo $row_Recrealtime["title"]; ?></h2>
												<p><?php echo $row_Recrealtime["nowdate"]; ?> <?php echo $row_Recrealtime["nowtime"]; ?></p></p>
											</header>
											<p><?php echo $row_Recrealtime["address"]; ?></p>
											<button type="button" class="btn btn-default" onclick="location.href='realtime_info.php?realtimeid=<?php echo $row_Recrealtime["realtimeid"];?>'">瀏覽</button>
											<button type="button" class="btn btn-default" onclick="location.href='realtime_update_data.php?realtimeid=<?php echo $row_Recrealtime["realtimeid"];?>'">編輯</button>
										</div>
									</section>

							</div>
							
							<?php } ?>
							
							
						</div>
					</div>
				</div>
		
		
		
		



<div id="footer">
	<?php include("footer.php"); ?>
</div>
</body>
</html>

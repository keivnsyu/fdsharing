<?php error_reporting(0);?>
<?php session_start(); ?>
<?php include("../mysql.inc.php");
include("../admin_check.php");


$query_Recstores= " SELECT * 
					FROM stores  LEFT JOIN stores_info ON stores.sn = stores_info.ssn 
					WHERE stores.sn >=1 
ORDER BY stores_info.ssn DESC					";
$Recstores = mysql_query($query_Recstores);

if(isset($_GET["action"])&&($_GET["action"]=="delete")){
	$query_delstores = "DELETE FROM stores WHERE sn=".$_GET["sn"] ;
	mysql_query($query_delstores);

	header("Location: admin_foodstores_edit.php");
}


 ?>
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


<script language="javascript">
function deletesure(){
    if (confirm('\n您確定要刪除此筆資料嗎?')) return true;
    return false;
}
</script>

</head>

<body>
<div id="header">
<?php include("../header_1.php"); ?></div>







<div align="center"><h1>美食商家</h1></div>
<div align="center"><button name="profile_add" type="button" class="btn btn-default" value="新增美食商家" onClick="location.href='admin_foodstores_add.php'">新增美食商家</button>
	</div>
	<div id="features-wrapper">
					<div class="container">
						<div class="row">
						<?php 

				while($row_Stores = mysql_fetch_assoc($Recstores)){
	
	?>
	
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2><?php echo $row_Stores["brandname"];   ?></h2>
												<p><?php  echo $row_Stores["storename"] ?></p>
											</header>
											<p><?php  echo $row_Stores["address"] ?></p>
											<button name="view" type="button" class="btn btn-default" value="瀏覽" onClick="location.href='../food_information.php?sn=<?php echo $row_Stores["sn"]; ?>'">瀏覽</button>
											<button name="updata" type="button" class="btn btn-default" value="編輯" onClick="location.href='admin_foodstores_edit_data.php?sn=<?php echo $row_Stores["sn"] ?>'">編輯</button>
										</div>
									</section>

							</div>
							
							<?php } ?>
							
							
						</div>
					</div>
				</div>

								</article>

 <button name="back" type="button" class="btn btn-default" value="管理頁面" onClick="location.href='admin_management.php'">回管理頁面</button>

</div>

		



<div id="footer">
<?php include("footer.php"); ?></div>
</body>
</html>

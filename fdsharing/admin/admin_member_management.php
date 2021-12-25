<?php include("../mysql.inc.php");
 error_reporting(0);?> 
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


<script language="javascript">
function deletesure(){
    if (confirm('\n您確定要刪除這個會員嗎?')) return true;
    return false;
}
</script>

</head>

<body>
<div id="header">
	<?php include("../header_1.php"); ?>
</div>
<div id="body">
<?php

header('Content-Type: text/html; charset=utf-8');
$id = $_SESSION['MM'];
$group = $_SESSION['group'];

if ($_SESSION['group'] != "管理者")
		{
			echo '<meta http-equiv=REFRESH CONTENT=0;url=../error.php>';
		} else {?>
<?php


$query_RecMember = " SELECT * FROM member ";
$RecMember = mysql_query($query_RecMember);
$row_RecMember = mysql_fetch_array($result);

if(isset($_GET["action"])&&($_GET["action"]=="delete")){
	$query_delMember = "DELETE FROM member WHERE memberid=".$_GET["id"];
	mysql_query($query_delMember);

	header("Location: admin_member_management.php");
}

?>



<div id="features-wrapper">
					<div class="container">
						<div class="row">
						<?php 

							while (  $row_RecMember = mysql_fetch_array($RecMember))  {
	
	?>
	
							<div class="4u 12u(medium)">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2>姓名：<?php  echo $row_RecMember["name"]; ?></h2>
												<p>帳號：<?php echo $row_RecMember["account"]; ?></p>
											</header>
											<p>暱稱：<?php echo $row_RecMember["nickname"]; ?></p>
											<p>性別：<?php echo $row_RecMember["gender"]; ?></p>
											<p>電子信箱：<?php echo $row_RecMember["email"]; ?></p>
											<p>連絡電話：<?php echo $row_RecMember["phone"]; ?></p>
											<p>居住地：<?php echo $row_RecMember["live"]; ?></p>
											<p>身分：<?php echo $row_RecMember["identity"]; ?></p>
											<button name="updata" type="button" class="btn btn-default" value="編輯" onClick="location.href='admin_member_update_data.php?memberid=<?php echo $row_RecMember["memberid"];?>'">編輯</button>
											<button name="del" type="button" class="btn btn-default" value="刪除"  onClick="location.href='?action=delete&id=<?php echo $row_RecMember["memberid"]; ?>;">刪除</button>
										</div>
									</section>

							</div>
							
							<?php } ?>
							
							
						</div>
					</div>
				</div>

								</article>

					










 <button name="back" type="button" class="btn btn-default" value="管理頁面" onClick="location.href='admin_management.php'">回管理頁面</button>



		<?php } ?>


<div id="footer">
	<?php include("footer.php"); ?>
</div>
</body>
</html>

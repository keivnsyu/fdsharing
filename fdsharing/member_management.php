<?php session_start(); ?>
<?php include("mysql.inc.php");
include("check.php"); ?>

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
<div >
	<?php include("header.php"); ?>
</div>
<div >

<?php
header('Content-Type: text/html; charset=utf-8');
$account = $_SESSION['MM'];
?>

<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <?php echo '<h2>'.$account.'會員資料'.'</h2>'; ?>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>

<?php
$query_RecMember = " SELECT * FROM member WHERE account ='$account'  ";
$RecMember = mysql_query($query_RecMember);

?>
<div  class="CoursesShare col-md-4  col-xs-12">
									<!-- NULL -->
								</div>
								<div  class="CoursesShare col-md-2  col-xs-12">
									

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
											<button name="updata" type="button" class="btn btn-default" value="修改資料" onClick="location.href='member_update_data.php?memberid=<?php echo $row_RecMember["memberid"];?>'">修改資料</button>
											<button name="updata" type="button" class="btn btn-default" value="修改密碼" onClick="location.href='member_update_password.php?memberid=<?php echo $row_RecMember["memberid"];?>'">修改密碼</button>
										</div>
									</section>

							</div>
							
							<?php } ?>
							
							
						</div>
					</div>
				</div>
								</div>
<div  class="CoursesShare col-md-6  col-xs-12">
									<!-- NULL -->
								</div>


<div id="footer">
	<?php include("footer.php"); ?>
</div>
</body>
</html>

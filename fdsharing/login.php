<?php include('mysql.inc.php'); ?>
<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>會員登入</title>
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
						

							<!-- Content -->
								

									<h2 align="center">會員登入</h2>
									<div class="row" >
      <div  class="col-md-3 col-xs-12">
        <!-- NULL -->
      </div>

      <div  class="col-md-6 col-xs-12">


        <form class="form-horizontal" role="form" action="login_action.php" method="post" name="login">
            <div class="form-group">
                 <h3 align="center"> <label class="col-sm-2 control-label">帳號</label></h3>
              <div class="col-sm-10">
                  <input id="account" name="account" class="form-control" type="text" placeholder="Account">
              </div>
            </div>

            <div class="form-group">
                 <h3 align="center"> <label class="col-sm-2 control-label">密碼</label></h3>
              <div class="col-sm-10">
                  <input id="pw" name="pw" class=" form-control" type="password" placeholder="Password">
              </div>
            </div>
<br>
            <div  class="row courseRow">
              <div  class="CoursesShare col-md-3  col-xs-12">
              </div>
              <div  class="CoursesShare col-md-3  col-xs-12">
                    <button type="submit" class="form-control">登入</button>
              </div>
              <div  class="CoursesShare col-md-3 col-xs-12">
                    <button type="button" onclick="location.href='singup.php'" class="form-control" >註冊帳號</button>
            </div>
                <div  class="CoursesShare col-md-3  col-xs-12">
                </div>

            </div>
            </form>
      </div>



      <div  class="col-md-3 col-xs-12">
        <!-- NULL -->
      </div>



</div>
									

								

						
					</div>
				</div>

			<!-- Footer -->
				<?php include('footer.php'); ?>

	</body>
</html>
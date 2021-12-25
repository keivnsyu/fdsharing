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

<div id="header">

<?php include("header.php"); ?>

</div>
<div  class="row courseRow">

<div  class="col-md-2 col-xs-12">
  <!-- NULL -->
</div>

<div  class="col-md-8 col-xs-12">

              <div  class="col-md-3 col-xs-12">
                <!-- NULL -->
              </div>

              <div  class="col-md-6 col-xs-12">
                    <h2 align="center">歡迎註冊</h2>
                    <div class="center-block" align="center" >
                      感謝您的加入本網站會員 <br>
                      本網站僅提供美食分享資料，但其內容必須你我一起來維護的 <br>
                      若平台如內容資料如有錯誤，煩請告知管理員謝謝!! <br><br>
                      </div>
                    <div  class="row courseRow">
                          <div  class="CoursesShare col-md-3  col-xs-12">
                          </div>
                          <div  class="CoursesShare col-md-3  col-xs-12">
                                <button name="singup" class=" form-control" id="singup" value="同意" onClick="location.href='register.php'">同意</button>
                          </div>
                          <div  class="CoursesShare col-md-3 col-xs-12">
                                <button name="singup" class=" form-control" id="singup" value="不同意" onClick="location.href='index.php'">不同意</button><br><br><br>
                        </div>
                            <div  class="CoursesShare col-md-3  col-xs-12">
                            </div>
                    </div>
              </div>
              <div  class="col-md-3 col-xs-12">
                <!-- NULL -->
              </div>
</div>
<div  class="col-md-2 col-xs-12">
  <!-- NULL -->
</div>
</div>
<div id="footer">
<?php include("footer.php"); ?>
</div>
</body>
</html>

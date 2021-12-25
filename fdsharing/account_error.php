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

<script>
$('#my-alert').bind('closed', function () {
  123
})
</script>
</head>



<body>
<div id="header">

<?php

include("header.php");

?>

</div>


<p  id="pp" align="center"  >會員登入</p>



<div class="row">
      <div  class="col-md-3 col-xs-12">
        <!-- NULL -->
      </div>

      <div  class="col-md-6 col-xs-12">


        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <p>   Error!! 帳號密碼錯誤，請重新登入</p>
        </div>


        <script type="text/javascript">
        $(document).ready(function() {
            // alert auto close
          /*  window.setTimeout(function() {
                $('.alert').alert('close');
            }, 3000);*/
             特效2
            window.setTimeout(function() {
                $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                    $(this).alert('close');
                });
            }, 3000);

        });
        </script>


        <form class="form-horizontal" role="form" action="login_action.php" method="post" name="login">
            <div class="form-group">
                  <label class="col-sm-2 control-label">帳號</label>
              <div class="col-sm-10">
                  <input id="account" name="account" class="form-control" type="text" placeholder="Account">
              </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-2 control-label">密碼</label>
              <div class="col-sm-10">
                  <input id="pw" name="pw" class=" form-control" type="password" placeholder="Password">
              </div>
            </div>

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



<div id="footer">

  <?php

include("footer.php");

?>


</div>
</body>
</html>

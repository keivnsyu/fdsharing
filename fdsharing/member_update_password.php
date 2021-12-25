<?php session_start(); ?>
<?php include("mysql.inc.php"); 

?>
<!doctype html>
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

<script type="text/javascript">

function check(){
 if ( document.reg.pw1.value != document.reg.pw2.value )
		{
			alert("密碼不相同，請重新輸入");

			return false;
		}


   return ture;
}
</script>
</head>

<body>

<?php
$query_RecMember = "SELECT * FROM member WHERE memberid='".$_GET["memberid"]."'";
$RecMember = mysql_query($query_RecMember);
$row_RecMember=mysql_fetch_array($RecMember);
echo $row_RecMember["memberid"];

?>


<div id="header">
<?php include("header.php"); ?>
</div>


<div class="row">
      <div  class="col-md-3 col-xs-12">
        <!-- NULL -->
      </div>

      <div  class="col-md-6 col-xs-12">
            <form class="form-horizontal" role="form" method="post" action="member_update_password_action.php" name="updatepaw" onsubmit="return check()">
					<input type="hidden" id="memberid" name="memberid" value="　<?php echo  $row_RecMember["memberid"]; ?>">
					<?php echo  $row_RecMember["memberid"]; ?>
              <div class="form-group">
                    <label class="col-sm-2 control-label">密 碼 </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pw1" name="pw1" required  placeholder="請輸入密碼" pattern="[A-Za-z0-9]{6,16}"maxlength='16' title='由英文或數字所組成的6~16字元'>
                </div>
              </div>

              <div class="form-group">
                    <label class="col-sm-2 control-label">再輸入一次密碼 </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pw2" name="pw2" required  placeholder="請輸入密碼" pattern="[A-Za-z0-9]{6,16}"maxlength='16' title='由英文或數字所組成的6~16字元'>
                </div>
              </div>

              <div  class="row courseRow">
                <div  class="CoursesShare col-md-3  col-xs-12">
                </div>
                <div  class="CoursesShare col-md-3  col-xs-12">
                      <button type="submit" class="form-control" >修改密碼</button>
                </div>
                <div  class="CoursesShare col-md-3 col-xs-12">
                      <button type="button" class="form-control" onclick="history.back()">回上頁</button>
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
<?php include("footer.php"); ?>
</div>
</body>
</html>

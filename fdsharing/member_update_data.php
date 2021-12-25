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
<script>
function check(){


   return ture;
}
</script>
</head>

<body>
<div id="header">
<?php include("header.php"); ?>
</div>
<div id="body">

<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <?php echo '<h2>'.$id.'會員資料'.'</h2>'; ?>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>


<?php
$query_RecMember = "SELECT * FROM member WHERE memberid='".$_GET["memberid"]."'";
$RecMember = mysql_query($query_RecMember);
$row_RecMember=mysql_fetch_array($RecMember);

?>


<div  class="row courseRow">
    <div    class="col-md-2 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-8  col-xs-12">
        <form method="post" action="member_update_data_action.php" name="updatedata" >
 <table width="100%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center" valign="middle">
    <input type="hidden" id="memberid" name="memberid" value="<?php echo $row_RecMember["memberid"];?>">
    姓 名</td>
    <td align="center" valign="middle"><input type="text" id="name" name="name" required  placeholder="請輸入您的姓名" value="<?php echo $row_RecMember["name"]; ?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle">暱 稱</td>
    <td align="center" valign="middle"><input type="text" id="nickname" name="nickname" required  placeholder="請輸入您的暱稱" value="<?php echo $row_RecMember["nickname"]; ?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle">電子信箱</td>
    <td align="center" valign="middle"><input type="email" id="email" name="email" required  placeholder="請輸入您的電子信箱" value="<?php echo $row_RecMember["email"]; ?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle">聯絡電話</td>
    <td align="center" valign="middle"><input type="tel" id="phone" name="phone" required  placeholder="請輸入您的電話" value="<?php echo $row_RecMember["phone"]; ?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle">居住地</td>
    <td align="center" valign="middle"><select name="live" id="live">
      <option value="<?php echo $row_RecMember["live"]; ?>"><?php echo $row_RecMember["live"]; ?></option>
      <option value="基隆市">基隆市</option>
      <option value="臺北市">臺北市</option>
      <option value="新北市">新北市</option>
      <option value="桃園市">桃園市</option>
      <option value="新竹市">新竹市</option>
      <option value="新竹縣">新竹縣</option>
      <option value="苗栗縣">苗栗縣</option>
      <option value="臺中市">臺中市</option>
      <option value="彰化縣">彰化縣</option>
      <option value="南投縣">南投縣</option>
      <option value="雲林縣">雲林縣</option>
      <option value="嘉義縣">嘉義縣</option>
      <option value="嘉義市">嘉義市</option>
      <option value="臺南市">臺南市</option>
      <option value="高雄市">高雄市</option>
      <option value="屏東縣">屏東縣</option>
      <option value="宜蘭縣">宜蘭縣</option>
      <option value="花蓮縣">花蓮縣</option>
      <option value="臺東縣">臺東縣</option>
      <option value="澎湖縣">澎湖縣</option>
      <option value="金門縣">金門縣</option>
      <option value="連江縣">連江縣</option>
    </select></td>
  </tr>
</table>

	<div  class="row courseRow">
    <div    class="col-md-4 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-4  col-xs-12">
         <input type="submit" value="修改資料">&nbsp;&nbsp;
   <button type="button" onclick="location.href='member_management.php'">回上頁</button>
    </div>
    <div  class="CoursesShare col-md-4  col-xs-12">
        <!-- NULL -->
    </div>
  </div>

    
</form>
</div>
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  </div>



<div id="footer">
<?php include("footer.php"); ?>
</div>
</body>
</html>

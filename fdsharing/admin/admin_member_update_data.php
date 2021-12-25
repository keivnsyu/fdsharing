<?php session_start(); ?>
<?php include("../mysql.inc.php");
include("../admin_check.php"); ?>
<?php


$query_RecMember = "SELECT * FROM member WHERE memberid='".$_GET["memberid"]."'";
$RecMember = mysql_query($query_RecMember);
$row_RecMember=mysql_fetch_array($RecMember);

$memberid = $row_RecMember['memberid'];
$account = $row_RecMember['account'];
$password = $row_RecMember['password'];
$email = $row_RecMember['email'];
$gender = $row_RecMember['gender'];
$phone = $row_RecMember['phone'];
$name = $row_RecMember['name'];
$nickname = $row_RecMember['nickname'];
$live = $row_RecMember['live'];
$identity = $row_RecMember['identity'];

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

</script>
</head>

<body>
<?php
$id = $_SESSION['MM'];
$group = $_SESSION['group'];

if ($_SESSION['group'] != "管理者")
		{
			echo '<meta http-equiv=REFRESH CONTENT=0;url=../error.php>';
		} else {?>

<div id="header">
<?php include("../header_1.php"); ?>
</div>

<div  class="row courseRow">
    <div    class="col-md-2 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-8  col-xs-12">
        
		
		<div align="center"><h1><?php echo $account;?>的會員資料</h1></div>
<form method="post" action="admin_member_update_data_action.php" name="updatedata"  class="table table-striped table-condensed table-hover">


<div class="table-responsive">
<table width="80%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center" valign="middle"><label id="id">帳號</label></td>
    <td><input type="text" id="account" name="account" required  placeholder="請輸入您的帳號" value="<?php echo $account;?>"></td>
    <td align="center" valign="middle">性別</td>
    <td>

    <select name="gender" id="gender">
      <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
      <option value="男">男</option>
      <option value="女">女</option>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">密碼</td>
    <td><input type="password" id="password1" name="password1" required  placeholder="請輸入您密碼" value="<?php echo $password;?>"></td>
    <td align="center" valign="middle">電子信箱 </td>
    <td><input type="email" id="email" name="email" required  placeholder="請輸入您的電子信箱" value="<?php echo $email;?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle">確認密碼</td>
    <td><input type="password" id="password2" name="password2" required  placeholder="請輸入您密碼" value="<?php echo $password;?>"></td>
    <td align="center" valign="middle">聯絡電話</td>
    <td><input type="tel" id="phone" name="phone" required  placeholder="請輸入您的電話" value="<?php echo $phone;?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle">姓 名</td>
    <td><input type="text" id="name" name="name" required  placeholder="請輸入您的姓名" value="<?php echo $name;?>"></td>
    <td align="center" valign="middle">居住地 </td>
    <td><select name="live" id="live">
      <option value="<?php echo $live;?>"><?php echo $live;?></option>
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
  <tr>
    <td align="center" valign="middle">暱 稱</td>
    <td><input type="text" id="nickname" name="nickname" required  placeholder="請輸入您的暱稱" value="<?php echo $nickname;?>"></td>
    <td align="center" valign="middle">身分別</td>
    <td><select name="identity" id="identity">
      <option value="<?php echo $identity;?>"><?php echo $identity;?></option>
      <option value="管理者">管理者</option>
      <option value="普通">普通</option>
    </select><input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid;?>"></td>
  </tr>
</table>

</div>

     <input type="submit" value="修改資料">&nbsp;&nbsp;
   <button type="button" onclick="history.back()">回上頁</button>
</form>

<?php } ?>
		
		
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

<?php
 error_reporting(0);
session_start();
include(mysql.inc.php);

$query_RecMember = " SELECT * FROM member ";
$RecMember = mysql_query($query_RecMember);
 $row_RecMember = mysql_fetch_array($RecMember);
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
<script>function check(){

	if ( document.reg.id.value == '' || document.reg.pw1.value == '' || document.reg.pw2.value == '' || document.reg.name.value == '' || document.reg.nickname.value == '' || document.reg.gender.value == '' || document.reg.email.value == '' || document.reg.phone.value == '' || document.reg.live.selectedIndex == '' )
		{
			alert("註冊資料填寫尚未完成!!");

			return false;
		}

	if ( document.reg.pw1.value != document.reg.pw2.value )
		{
			alert("密碼不相同，請重新輸入");

			return false;
		}



   return ture;
}

function checkid(){
	if (document.reg.id == $row_RecMember["id"]){
		alert("您輸入的帳號已經有人使用過了，請重新輸入");

	}else{
	alert("您輸入的帳號尚未有人使用");

	}}
</script>



</head>

<body >
<div id="header">

<?php include("header.php"); ?>

</div>

<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <h1><?php echo "會員註冊"; ?></h1>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>


<div  class="row courseRow">
    <div    class="col-md-2 col-xs-12">
      <!-- NULL -->
    </div>

    <div    class="col-md-8 col-xs-12">


          <div    class="col-md-2 col-xs-12">
            <!-- NULL -->
          </div>
          <div    class="col-md-8 col-xs-12">


      <form class="form-horizontal" role="form" action="register_finsh.php" method="post" id="reg"  name="reg" onsubmit="return check()">


        <table align="center" width="100%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center">帳 號</td>
    <td align="center" >　<input type="text" class="form-control" id="account" name="account" required  placeholder="至少6的字元" pattern="[A-Za-z0-9]{6,16}" maxlength='16' title='由英文或數字所組成的6~16字元'>
</td>
  </tr>
  <tr>
    <td align="center" >密 碼</td>
    <td align="center" >　<input type="password" class="form-control" id="pw1" name="pw1" required  placeholder="至少6的字元" pattern="[A-Za-z0-9]{6,16}"maxlength='16' title='由英文或數字所組成的6~16字元'></td>
  </tr>
  <tr>
    <td align="center" >再輸入一次密碼</td>
    <td align="center" >　 <input type="password"  class="form-control" id="pw2" name="pw2" required  placeholder="至少6的字元" pattern="[A-Za-z0-9]{6,16}"maxlength='16' title='由英文或數字所組成的6~16字元'></td>
  </tr>
  <tr>
    <td align="center" >姓 名</td>
    <td align="center" >　 <input type="text" class="form-control" id="name" name="name" required  placeholder="請輸入您的姓名"></td>
  </tr>
  <tr>
    <td align="center" >暱 稱</td>
    <td align="center" >　<input type="text" class="form-control" id="nickname" name="nickname" required  placeholder="請輸入您的暱稱"></td>
  </tr>
  <tr>
    <td align="center" >性 別</td>
    <td align="center" >　<input type="radio"   name="gender" value="男"id="gender">
              男&nbsp;&nbsp;
              <input type="radio"  name="gender" value="女"id="gender">
              女</td>
  </tr>
  <tr>
    <td align="center" >電子信箱</td>
    <td align="center" >　<input type="email" class="form-control" id="email" name="email" required  placeholder="請輸入您的電子信箱"></td>
  </tr>
  <tr>
    <td align="center" >聯絡電話</td>
    <td align="center" >　<input type="tel" class="form-control" id="phone" name="phone" required  placeholder="請輸入您的電話"></td>
  </tr>
  <tr>
    <td align="center" >居住地</td>
    <td align="center" >　<select name="live" class="form-control"  id="live">
              <option value=""></option>
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
    <td align="center" ><button type="submit" class="form-control" >確定</button> </td>
    <td align="center" > <input type="button"  class="form-control" value="取消註冊" onclick="location.href='index.php'">　</td>
  </tr>
  
</table>
<input name="identity" class="form-control" id="identity" type="hidden" value="普通"><input name="memberid" id="memberid" type="hidden" value="">


      </form>
    </div>
</div>

          </div>
        <div    class="col-md-2 col-xs-12">
          <!-- NULL -->
        </div>
    <div    class="col-md-2 col-xs-12">
      <!-- NULL -->
    </div>
</div>

<div id="footer">

<?php include("footer.php"); ?>
</div>
</body>
</html>

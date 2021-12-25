<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
include("mysql.inc.php");
$account = $_POST['account'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM member where account = '$account'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
$identity = $row['9']  ;
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員

$sate1 = sucess_login ;

if($account != null && $pw != null && $row[1] == $account && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['MM'] = $account;
		    $_SESSION['group'] = $identity;
        if ($_SESSION['group']=="管理者")
		{
			echo "<meta http-equiv=REFRESH CONTENT=0;url=admin/admin_management.php?sate1=$sate1>";
		} else{

      echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?sate1=$sate1>" ;
		}
}
else
{
        echo '<meta http-equiv=REFRESH CONTENT=0;url=account_error.php>';
}
?>

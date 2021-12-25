<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//資料庫設定
//資料庫位置
$db_server = "127.0.0.1";
//資料庫名稱
$db_name = "foodshare1";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "";

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd));
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name));
        die("無法使用資料庫");
	
	
	
	
	
	

	
?>
<?php
/*

  function create_connection()
  {
    $link = mysqli_connect("127.0.0.1", "root", "")
      or die("無法建立資料連接: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($link, $database, $sql)
  {
    mysqli_select_db($link, $database)
      or die("開啟資料庫失敗: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		*/
    
  ?>
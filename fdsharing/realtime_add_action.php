<?php session_start();
error_reporting(0); ?>
<?php include('mysql.inc.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$realtimeid = $_POST['realtimeid'];
$title = $_POST['title'];
$nowdate = $_POST['nowdate'];
$nowtime = $_POST['nowtime'];
$address = $_POST['address'];
$note=$_POST['note'];
$record = $_POST['record'];


$type=$_FILES['fileField']['type'];
$size=$_FILES['fileField']['size'];
$name=iconv("UTF-8","BIG-5",$_FILES['fileField']['name']);
$nameEcho=$_FILES['fileField']['name'];
$tmp_name=$_FILES['fileField']['tmp_name'];

$sizemb=round($size/10240000,2);
echo "檔案類型：".$type."</br>";
echo "檔案大小：".$sizemb."MB</br>";
echo "檔案名稱：".$nameEcho."</br>";
echo "暫存名稱：".$tmp_name."</br>";
if($type=="image/png" || $type=="image/jpeg" || $type=="image/PNG"|| $type=="image/gif"){
 if($sizemb < 3){
  $file=explode(".",$name);
  
  $chi_name=$file[0]."_".date(ymdhis)."_".rand(0,10);
  $new_name=iconv("BIG-5","UTF-8",$chi_name);
  echo "</br>已修改為新檔名:".$new_name."後上傳成功";
  //echo "</br>已修改為新檔名:".$new_name."後上傳成功";
  move_uploaded_file($tmp_name,"realtime_pic/".$new_name.".".$file[1]);
  echo "<br>上傳成功";
  
	
	 $picture = $new_name.".".$file[1];
	 
	 
					$sql = "insert into realtime (realtimeid, title, nowdate, nowtime, address, note,picture, record) values ('$realtimeid', '$title', '$nowdate', '$nowtime', '$address', '$note', '$picture', '$record')";

					if(mysql_query($sql) )
						{
							echo '新增成功!';
							echo '<meta http-equiv=REFRESH CONTENT=0;url=realtime.php>';
							
						}
 
 }else{
  echo "檔案太大，上傳失敗";
  echo '<input type ="button" onclick="history.back()" value="回到上一頁"></input>';
 }
}else{
 echo "檔案格式錯誤，上傳失敗";
 echo '<input type ="button" onclick="history.back()" value="回到上一頁"></input>';
}











?>


<?php 
error_reporting(0);
require_once("mysql.inc.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<pre class="codeblock prettyprint">

<?php


$sn = $_POST['sn'];
$ssn = $_POST['ssn'];
$record = $_POST['record'];
$addmark = $_POST['addmark'];
$storetype = $_POST['storetype'];
$storepattern = $_POST['storepattern'];
$brandname = $_POST['brandname'];
$storename = $_POST['storename'];
$district = $_POST['district'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dateofenforcement = $_POST['dateofenforcement'];
$goodtype = implode (",", $_POST['goodtype']);;
$goodnote = $_POST['goodnote'];
$note = $_POST['note'];
$summary = $_POST['summary'];



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
if($type=="image/png" || $type=="image/jpeg" || $type=="image/PNG"|| $type=="image/gif" ){
		 if($sizemb < 3 ){
		  $file=explode(".",$name);
		  
		  $chi_name=$file[0]."_".date(ymdhis)."_".rand(0,10);
		  $new_name=iconv("BIG-5","UTF-8",$chi_name);
		  echo "</br>已修改為新檔名:".$new_name."後上傳成功";
		  //echo "</br>已修改為新檔名:".$new_name."後上傳成功";
		  move_uploaded_file($tmp_name,"uploadfiles/".$new_name.".".$file[1]);
		  echo "<br>上傳成功";
		  
			
			 $image = $new_name.".".$file[1];
			 
			 
					$sql = "insert into stores (sn,storetype, storepattern, brandname, storename, district, phone, address, dateofenforcement, goodtype, goodnote, note) values ('$sn', '$storetype', '$storepattern', '$brandname', '$storename', '$district', '$phone', '$address', '$dateofenforcement', '$goodtype', '$goodnote', '$note')";

					$sql2 = "INSERT INTO stores_info (ssn, summary, addmark, record,image) values('$ssn', '$summary', '$addmark', '$record', '$image')";
							if(mysql_query($sql) AND mysql_query($sql2) )
								{
									echo '新增成功!';
									
									 header("location:newfood.php");
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




 
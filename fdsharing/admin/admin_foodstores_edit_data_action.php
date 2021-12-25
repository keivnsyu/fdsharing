
<?php include("../mysql.inc.php"); ?>





<?php
include("../admin_check.php");

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




	 
	 
	 $sql = "UPDATE stores SET sn='$sn', storetype='$storetype', storepattern='$storepattern', brandname='$brandname',storename='$storename', district='$district', phone='$phone', address='$address', dateofenforcement='$dateofenforcement',goodtype='$goodtype',goodnote='$goodnote', note='$note'";
			$sql2 = "UPDATE stores_info SET ssn='$ssn', summary='$summary', addmark='$addmark',mark='$mark', image='$image', record='$record'";
			
					if(mysql_query($sql) AND mysql_query($sql2) )
						{
							echo '修改成功!';
							
							 header("location:admin_foodstores_edit.php");
						}else{
							 die('MySQL query error');
						}
 
 






			






  


?>




 
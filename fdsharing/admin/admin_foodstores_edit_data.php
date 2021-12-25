<?php session_start(); ?>
<?php include("../mysql.inc.php"); ?>
<?php

include("../admin_check.php");
$query_Recstores = " SELECT * 
					FROM stores  ,stores_info 
					WHERE stores.sn = stores_info.ssn AND sn= '" . $_GET["sn"] . "' ";
$Recstores = mysql_query($query_Recstores);
$row_Recstores=mysql_fetch_array($Recstores);


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
<div id="header">
<?php include("../header_1.php"); ?>
</div>

<div  class="row courseRow">
    <div    class="col-md-4 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-4  col-xs-12">
        <?php echo '<h2>'. $row_Recstores['brandname'].'  '.$row_Recstores['storename'].'  餐廳資訊</h2>'; ?>
    </div>
    <div  class="CoursesShare col-md-4  col-xs-12">
        <!-- NULL -->
    </div>
  </div>


<div  class="row courseRow">
    <div  class="col-md-2 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-8  col-xs-12">
          <!--  ////////////////////////////////  -->
      <div  class="col-md-2 col-xs-12">
        <!-- NULL -->
      </div>
      <div  class="CoursesShare col-md-8  col-xs-12">



      <form action="admin_foodstores_edit_data_action.php" method="post">
          <input type="hidden" name="sn" id="sn" value="<?php  echo $row_Recstores['sn'];?>">
		  <input type="hidden" name="ssn" id="ssn" value="<?php  echo $row_Recstores['ssn'];?>">
                  <table align="center" width="100%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center">店家類型</td>
    <td align="center" >　<input name="storetype" id="storetype" type="text" class="form-control" value="<?php  echo $row_Recstores['storetype'];?>">
</td>
  </tr>
  <tr>
    <td align="center" >店家型態</td>
    <td align="center" ><input name="storepattern" type="text" id="storepattern" class="form-control" value="<?php  echo $row_Recstores['storepattern'];?>"></td>
  </tr>
  
  
  
  <tr>
    <td align="center" >品牌名稱</td>
    <td align="center" ><input name="brandname" id="brandname" type="text" class="form-control" value="<?php  echo $row_Recstores['brandname'];?>" ></td>
  </tr>
  <tr>
    <td align="center" >門市名稱</td>
    <td align="center" >　<input name="storename" id="storename" type="text" class="form-control" value="<?php  echo $row_Recstores['storename'];?>"></td>
  </tr>
  <tr>
    <td align="center" >區域</td>
    <td align="center" ><input name="district" id="district" type="text" class="form-control" value="<?php  echo $row_Recstores['district'];?>"></td>
  </tr>
  <tr>
    <td align="center" >連絡電話</td>
    <td align="center" ><textarea type="text" name="phone" id="phone" class="form-control"  ><?php  echo $row_Recstores['phone'];?></textarea></td>
  </tr>
  <tr>
    <td align="center" >聯絡地址</td>
    <td align="center" ><textarea type="text" name="address" id="address" class="form-control"  ><?php  echo $row_Recstores['address'];?></textarea></td>
  </tr>
  <tr>
    <td align="center" >實施日期</td>
    <td align="center" ><textarea type="text" name="dateofenforcement" id="dateofenforcement" class="form-control"  ><?php  echo $row_Recstores['dateofenforcement'];?></textarea></td>
  </tr>
  <tr>
    <td align="center" >好康類型</td>
  <td align="center" >　
	
	<input type="checkbox" name="goodtype[]" value="現金回饋"><label>現金回饋</label>
<input type="checkbox" name="goodtype[]" value="餐點加量"><label>餐點加量</label>
<input type="checkbox" name="goodtype[]" value="集點優惠"><label>集點優惠</label>
<input type="checkbox" name="goodtype[]" value="其他優惠"><label>其他優惠</label>
	
	
	
	</td>  </tr>
  <tr>
    <td align="center" >好康內容</td>
    <td align="center" ><textarea type="text" name="goodnote" id="goodnote" class="form-control" ><?php  echo $row_Recstores['goodnote'];?></textarea></td>
  </tr>
  <tr>
    <td align="center" >內容</td>
    <td align="center" ><textarea type="text" name="summary" id="summary" class="form-control"   ><?php  echo $row_Recstores['summary'];?></textarea></td>
  </tr>
  <tr>
    <td align="center" >備註</td>
    <td align="center" ><textarea type="text" name="note" id="note" class="form-control"  ><?php  echo $row_Recstores['note'];?></textarea></td>
  </tr>
  <tr>
    <td align="center" >登入者</td>
    <td align="center" ><textarea type="text" name="record" id="record" class="form-control"   ><?php  echo $row_Recstores['record'];?></textarea>
					  
					  </td>
  </tr>
  <tr>
    <td align="center" ><input type="submit" value="修改資料"></td>
    <td align="center" ><button type="button" onclick="history.back()">回上頁</button>　</td>
  </tr>
  
</table>


    </form>


      </div>
      <div  class="CoursesShare col-md-2  col-xs-12">
          <!-- NULL -->
      </div>
      <!--  ////////////////////////////////  -->

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

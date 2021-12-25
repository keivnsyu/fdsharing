<?php session_start();
$id = $_SESSION['MM'];
include("mysql.inc.php");
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
	</head>

<body>
<?php

date_default_timezone_set('Asia/Taipei');
   $nowdate = date ("Y-m-d");
   $nowtime = date ("H:i:s");

?>

<!-- header start  -->

<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-12  col-xs-12">
        <?php include("header.php"); ?>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>




<!-- header end  -->


<div  class="row courseRow">
    <div    class="col-md-5 col-xs-12">
      <!-- NULL -->
    </div>
    <div  class="CoursesShare col-md-2  col-xs-12">
        <h2>新增美食商家</h2>
    </div>
    <div  class="CoursesShare col-md-5  col-xs-12">
        <!-- NULL -->
    </div>
  </div>

  <div  class="row courseRow">
  <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  <div  class="CoursesShare col-md-8  col-xs-12">
  <form action="add_foodstores_action.php" method="post" id="addstores"  name="addstores"  enctype="multipart/form-data" onsubmit="return check()>
  
  
 
  
  
  
          <input type="hidden" name="sn">
		  <input type="hidden" name="ssn">
		  <input type="hidden" name="record" value="<?php echo $id; ?>">
		  <input type="hidden" name="addmark" value="<?php echo $nowdate; ?>">
                  <table align="center" width="100%" border="0" class="table table-striped table-condensed table-hover">
  <tr>
    <td align="center">*店家類型</td>
    　
	
	<td align="center" >　<select name="storetype" class="form-control" required id="storetype">
              <option value="連鎖店">連鎖店</option>
              <option value="連鎖店">連鎖店</option>
              <option value="非連鎖店">非連鎖店</option>
              <option value="自營店">自營店</option>
            </select></td>
	
</td>
  </tr>
  <tr>
    <td align="center" >*店家型態</td>
    <td align="center" >
	
	<select name="storepattern" class="form-control" required id="storepattern">
              <option value="請選擇">請選擇</option>
              <option value="早餐">早餐</option>
              <option value="中式">中式</option>
              <option value="西式">西式</option>
			  <option value="日式">日式</option>
			  <option value="火鍋">火鍋</option>
			  <option value="複合式餐飲">複合式餐飲</option>
			  <option value="素食">素食</option>
			  <option value="飲料">飲料</option>
			  <option value="攤商(販)">攤商(販)</option>
			  <option value="臨時攤商(販)">臨時攤商(販)</option>
			  <option value="餐飲業">餐飲業</option>
            </select></td>
	
	
	</td>
  </tr>
  
    <tr>
    <td align="center" >*LOGO<br>副檔名僅限*.png *.jpg *.gif</td>
    <td align="center" >　<input type="file" name="fileField" id="fileField" /></td>
  </tr>
  
  <tr>
    <td align="center" >*品牌名稱</td>
    <td align="center" >　 <input name="brandname" id="brandname" type="text"required class="form-control" value=""  ></td>
  </tr>
  <tr>
    <td align="center" >門市名稱</td>
    <td align="center" >　<input name="storename" id="storename" type="text-local" class="form-control" value=""></td>
  </tr>
  <tr>
    <td align="center" >*區域</td>
    <td align="center" >　
	
	<select name="district" class="form-control" required id="district">
              <option value="請選擇">請選擇</option>
              <option value="中區">中區</option>
              <option value="東區">東區</option>
              <option value="南區">南區</option>
              <option value="西區">西區</option>
              <option value="北區">北區</option>
              <option value="西屯區">西屯區</option>
              <option value="南屯區">南屯區</option>
              <option value="北屯區">北屯區</option>
              <option value="豐原區">豐原區</option>
              <option value="東勢區">東勢區</option>
              <option value="大甲區">大甲區</option>
              <option value="清水區">清水區</option>
              <option value="沙鹿區">沙鹿區</option>
              <option value="梧棲區">梧棲區</option>
              <option value="后里區">后里區</option>
              <option value="神岡區">神岡區</option>
              <option value="潭子區">潭子區</option>
              <option value="大雅區">大雅區</option>
              <option value="新社區">新社區</option>
              <option value="石岡區">石岡區</option>
              <option value="外埔區">外埔區</option>
              <option value="大安區">大安區</option>
			  <option value="烏日區">烏日區</option>
			  <option value="大肚區">大肚區</option>
			  <option value="龍井區">龍井區</option>
			  <option value="霧峰區">霧峰區</option>
			  <option value="太平區">太平區</option>
			  <option value="大里區">大里區</option>
			  <option value="和平區">和平區</option>
            </select>
	
	
	</td>
  </tr>
  <tr>
    <td align="center" >*連絡電話</td>
    <td align="center" >　<input type="phone" name="phone" required id="phone" class="form-control" value=""   ></td>
  </tr>
  
   <tr>
    <td align="center" >*聯絡地址</td>
    <td align="center" >　<input type="text" name="address" required id="address" class="form-control" value=""  ></td>
  </tr>
  
   <tr>
    <td align="center" >*實施日期</td>
    <td align="center" >　<input type="date" name="dateofenforcement" required id="dateofenforcement" class="form-control"   ></td>
  </tr>
  
   <tr>
    <td align="center" >*好康類型</td>
    <td align="center" >　
	
	<input type="checkbox" name="goodtype[]" id="goodtype[]"  value="現金回饋"><label>現金回饋</label>
	<input type="checkbox" name="goodtype[]" id="goodtype[]"  value="餐點加量"><label>餐點加量</label>
	<input type="checkbox" name="goodtype[]" id="goodtype[]" value="集點優惠"><label>集點優惠</label>
	<input type="checkbox" name="goodtype[]" id="goodtype[]" value="其他優惠"><label>其他優惠</label>
	<input type="checkbox" name="goodtype[]" id="goodtype[]"  value="無任何優惠"><label>無任何優惠</label>
	
	
	
	</td>
  </tr>
  
   <tr>
    <td align="center" >*好康內容</td>
    <td align="center" >　<input type="text" name="goodnote" required id="goodnote" class="form-control" value="外帶享85折優惠(米食與麵食)"   ></td>
  </tr>
  
   <tr>
    <td align="center" >備註</td>
    <td align="center" >　<input type="text" name="note" id="note" class="form-control" value="滿500元，再送泰式辣雞米花一份" ></td>
  </tr>
  
   <tr>
    <td align="center" >*內容</td>
    <td align="center" >　<input type="text" name="summary" required id="summary" class="form-control" value="耶香嫩雞燉飯 很好吃"   ></td>
  </tr>
  

  
  <tr>
    <td align="center" ><input type="submit" value="確定新增"></td>
    <td align="center" ><button type="button" onclick="history.back()">回上頁</button>　</td>
  </tr>
  
</table>


    </form>
  </div>
  <div  class="CoursesShare col-md-2  col-xs-12">
        <!-- NULL -->
    </div>
  </div>
  
  <!-- footer start  -->
<div id="footer">
  <?php include("footer.php"); ?>
</div>
<!-- footer end  -->
</body>
</html>
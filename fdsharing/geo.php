<?php
//set_time_limit(0);
ini_set('memory_limit', '256M');
header("Content-Type:text/html; charset=utf-8");
date_default_timezone_set('Asia/Taipei');

$user_lat = $_GET["user_lat"];
$user_lng = $_GET["user_lng"];

$address = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$user_lat.','.$user_lng.'&location_type=ROOFTOP&result_type=street_address&language=zh-tw&key=AIzaSyB6rPWjbHyRZoomestCID_UVGx27rHMqW8';
//$address = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=25.0420262,121.572188&location_type=ROOFTOP&result_type=street_address&language=zh-tw&key=AIzaSyB6rPWjbHyRZoomestCID_UVGx27rHMqW8';

$html = download_page($address);
$json_array = json_decode($html,true);
//print_r($json_array);


foreach ($json_array["results"] as $key => $value) {
   $formatted_address = $value["formatted_address"];

    $aaa = $formatted_address;
   echo $formatted_address . "<br>";

   //print_r($value);
}






//$html = download_page("http://sharecourse.pu.edu.tw/sharecourse/");
//echo $html;

function download_page($path,$post_str = "none", $HTTPHEADER = array('X-FORWARDED-FOR:8.8.8.8', 'CLIENT-IP:8.8.4.4'))
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $path);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //�o���]1, �~���|�������X
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); //�W�L30���S���^�N����
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); //�s�u10��
    curl_setopt($ch, CURLOPT_HTTPHEADER, $HTTPHEADER); //�۳yIP
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
    curl_setopt($ch, CURLOPT_REFERER, $path); //�۳y?��
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    if ($post_str != "none") {
        curl_setopt($ch, CURLOPT_POST, true); // �ҥ�POST
		if (is_array($post_str))
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_str)); //POST�ѼơA�p�G���쪺�Oarray�Φ�
		else
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_str); //POST�ѼơA�p�G���쪺�O�r���Φ�
    }
    $retValue = curl_exec($ch);
    curl_close($ch);
    return $retValue;
}

$error = 'true';

if (empty($formatted_address)){

  ?>
  <meta http-equiv="refresh" content="0;url=realtime_add.php?error=<?php echo $error; ?>" >
  <?php

}else {

  ?>
    <!--meta http-equiv="refresh" content="0;url=map.php?formatted_address=<?php echo $formatted_address ?>&user_lat=<?php echo $user_lat ?>&user_lng=<?php echo $user_lng ?>" >
-->
  <meta http-equiv="refresh" content="0;url=realtime_add.php?formatted_address=<?php echo $formatted_address ?>&user_lat=<?php //echo $user_lat ?>&user_lng=<?php //echo $user_lng ?>" 
  ><?php

}

?>

<?php
if(isset($_POST["sendmail"]) && ($_POST["sendmail"]=="true")){
	$mailFrom="=?UTF-8?B?" . base64_encode($_POST["fromname"]) . "?= <".$_POST["frommail"].">";
	$mailto="veter821111@gmail.com";
	$mailSubject="=?UTF-8?B?" . base64_encode($_POST["mailsubject"]). "?=";
	$mailHeader="From:".$mailFrom."\r\n";
	$mailHeader.="Content-type:text/html;charset=UTF-8";
	mail($mailto,$mailSubject,$_POST["mailcontent"],$mailHeader);
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>聯絡表單</title>
</head>
<body>
<?php if(isset($_POST["sendmail"]) && ($_POST["sendmail"]=="true")){?>
寄送成功，<a href="mail.php">再寄一次</a>。
<?php }else{?>
<form name="form1" method="post" action="">
  <table border="0" cellpadding="4" cellspacing="0">
    <tr>
      <td>寄件人姓名</td>
      <td><input type="text" name="fromname" id="fromname"></td>
    </tr>
    <tr>
      <td>寄件人郵件</td>
      <td><input type="text" name="frommail" id="frommail"></td>
    </tr>
    
    <tr>
      <td>主旨</td>
      <td><input type="text" name="mailsubject" id="mailsubject"></td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="mailcontent" id="mailcontent" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="送出">
      <input name="sendmail" type="hidden" id="sendmail" value="true"></td>
    </tr>
  </table>
</form>
<?php }?>
</body>
</html>
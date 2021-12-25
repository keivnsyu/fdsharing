<?php include("mysql.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
$query_Recprofile = " SELECT * FROM profile  " ;
$Recprofile = mysql_query($query_Recprofile);
?>

<table width="100%" align="center" border="0" cellpadding="2" class="table-striped table-hover table-condensed">
  <tr>
    <td align="center" width="30%">日　　期</td>
    <td align="center" width="70%">標　　題</td>

  </tr>
  <?php  while ( $row_Recprofile = mysql_fetch_array($Recprofile) ){
?>
  <tr>
    <td align="center" width="30%">　
	<?php echo $row_Recprofile["date"] ?>
    </td>
    <td align="center" width="70%">　
    <a href="profile_note.php?profileid=<?php echo $row_Recprofile["profileid"];?>"><?php echo $row_Recprofile["title"] ?></a>

    </td>


<?php } ?>  </tr>

  </table>
</body>
</html>

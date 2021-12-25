<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

unset($_SEEION['MM']);
session_unset();

$sate = sucess_logout ;
?>
<meta http-equiv=REFRESH CONTENT=0;url=index.php?sate=<?php echo $sate ?>>;

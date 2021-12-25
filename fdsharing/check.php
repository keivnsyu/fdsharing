<?php 
 session_start(); 
 
if ($_SESSION['MM']== "")
{
	echo '<meta http-equiv=REFRESH CONTENT=0;url=error.php>';
		} 
?>
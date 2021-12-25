<?php 
 session_start(); 
 
 if ($_SESSION['group'] != "管理者")
		{
			echo '<meta http-equiv=REFRESH CONTENT=0;url=../error.php>';
		}
?>
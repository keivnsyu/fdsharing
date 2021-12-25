<?php 

	session_start(); 
	require_once( "mysql.inc.php" );
	
$id = $_SESSION['MM'];
$query_RecMember = " SELECT * FROM member WHERE id ='$id'  ";
$RecMember = mysql_query($query_RecMember);
$row_RecMember = mysql_fetch_array($RecMember);
?>

<div id="header-wrapper">
					<header id="header" class="container">
						<?php if ( $_SESSION['MM'] == null){ ?>
						
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">美食資訊分享平台</a></h1>
								<!--span>美食資訊分享平台</span -->
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li ><a href="newfood.php">新美食</a></li>
									<li ><a href="search_foodstore.php">搜美食</a></li>
									<li></li>
									<li ><a href="login.php">會員登入</a></li>
									<li ><a href="singup.php">註冊會員</a></li>
								</ul>
							</nav>
						
						<?php 
						}else{ if ($_SESSION['group'] != "管理者"){
						?>
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">美食資訊分享平台</a></h1>
								<!--span>美食資訊分享平台</span -->
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li ><a href="newfood.php">新美食</a></li>
									<li ><a href="search_foodstore.php">搜美食</a></li>
									<li>
										<a href="#">即時標記</a>
										<ul>
											<li><a href="realtime_add.php">新增即時標記</a></li>
											<li><a href="realtime.php">回顧</a></li>
										</ul>
									</li>
											<li>
												<a href="#"><?php echo $_SESSION['MM']?>，您好</a>
												<ul>
													<li><a href="member_management.php">會員中心</a></li>
													
												</ul>
											</li>
											<li ><a href="logout.php">會員登出</a></li>';
								</ul>
							</nav>
							<?php }else{ ?>
									<!-- Logo -->
							<div id="logo">
								<h1><a href="../index.php">美食資訊分享平台</a></h1>
								<!--span>美食資訊分享平台</span -->
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="../index.php">Home</a></li>
									<li ><a href="../newfood.php">新美食</a></li>
									<li ><a href="../search_foodstore.php">搜美食</a></li>
									<li>
										<a href="#">即時標記</a>
										<ul>
											<li><a href="../realtime_add.php">新增即時標記</a></li>
											<li><a href="../realtime.php">回顧</a></li>
										</ul>
									</li>
											<li>
												<a href="#"><?php echo $_SESSION['MM']?>，您好</a>
												<ul>
													<li><a href="admin_member_management.php">會員管理系統</a></li>
													<li><a href="admin_news_edit.php">最新消息</a></li>
													<li><a href="admin_profile_edit.php">活動快訊</a></li>
													<li><a href="admin_foodstores_edit.php">商家管理</a></li>
													<li><a href="admin_management.php">管理總攬</a></li>
												</ul>
											</li>
											<li ><a href="../logout.php">會員登出</a></li>';
								</ul>
							</nav>
						<?php }} ?>

					</header>
				</div>
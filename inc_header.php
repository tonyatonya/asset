<?php
	if(empty($_title)) 			$_title ='';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';
?>
	<title><?php echo $_title;?></title>
	<meta name="keywords" content="<?php echo $_keywords;?>" />
	<meta name="description" content="<?php echo $_description;?>" />
	<meta name="robot" content="noindex, nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
	<link type="text/css" rel="stylesheet" href="css/reset.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/dark-hive/jquery-ui-1.8.18.custom.css" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/sliderkit-core.css" media="screen, projection" />
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
	<link type="text/css" rel="stylesheet" href="css/layout.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
	<link type="image/ico" rel="shortcut icon" href="images/favicon.ico">
	<!-- <script type="text/javascript" language="javascript" src="script/jquery.js"></script> -->
	<!-- <script type="text/javascript" language="javascript" src="script/jquery-ui-1.8.18.custom.min.js"></script> -->
	<!-- <script type="text/javascript" language="javascript" src="script/swfobject.js"></script> -->
	<!-- <script type="text/javascript" language="javascript" src="script/init.js"></script> -->
	<!-- <script type="text/javascript" src="script/jquery-1.9.1.js"></script> -->
	<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
	<script type="text/javascript" src="script/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.js"></script>
	<div class="wrapper">
	<header>
		<div class="lang-sw">
			<ul>
				<li class="th"><a href="#">TH</a></li>
				<li class="en"><a href="#">EN</a></li>
			</ul>
		</div>
		<div class="clear" style="height:21px;"></div>
		<div class="mainlogo"><a href="index.php"><h1>สินทรัพย์ประกันภัย</h1></a></div>
		<div class="member-form">
			<div class="hotline"><img src="images/hotline.jpg" alt="hotline" width="162" height="64" /></div>
			<div class="form">
				<div class="input-holder round"><input type="text" placeholder="username"></div>
				<div class="input-holder round"><input type="password" placeholder="password"></div>
				<div class="asset-btn">
					<a href="#">
						<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
						<div class="btn-body">เข้าสู่ระบบ</div>
						<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
					</a>
				</div>
				<div class="reg">
					<a href="#"><img src="images/reigistor.jpg" alt="reigistor" width="92" height="16" /></a>
					<a href="#"><img src="images/forgotpassword.jpg" alt="forgotpassword" width="92" height="16" /></a>
				</div>
			</div>
		</div>
		<nav class="top-nav">
			<ul>
				<li class="home"><a href="index.php"><img src="images/homeico.png" alt="homeico" width="23" height="25" /></a></li>
				<li class="mainmenu"><a href="#">เกี่ยวกับเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="#">submenu</a></li>
							<li><a href="#">submenu</a></li>
							<li><a href="#">submenu</a></li>
							<li><a href="#">submenu</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="products.php">ผลิตภัณฑ์และบริการ</a></li>
				<li class="mainmenu"><a href="#">ข้อมูลนักลงทุน</a></li>
				<li class="mainmenu"><a href="news.php">ข่าวสารและกิจกรรม</a></li>
				<li class="mainmenu"><a href="#">ร่วมงานกับเรา</a></li>
				<li class="mainmenu"><a href="contactus-head.php">ติดต่อเรา</a></li>
			</ul>
			<div class="input-holder round">
				<input  type="text" placeholder="search">
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$(".mainmenu a").click(function(){
						
					})
				})
			</script>
		</nav>
	</header>
	</div>
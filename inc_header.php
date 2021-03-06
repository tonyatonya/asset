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
	<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>
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
					<a href="member.php"><img src="images/reigistor.jpg" alt="reigistor" width="92" height="16" /></a>
					<a href="member-lostpassword.php"><img src="images/forgotpassword.jpg" alt="forgotpassword" width="92" height="16" /></a>
				</div>
			</div>
		</div>
		<nav class="top-nav">
			<ul>
				<li class="home"><a href="index.php" style="height:45px;"><img style="margin-top:5px;" src="images/homeico.png" alt="homeico" width="23" height="25" /></a></li>
				<li class="mainmenu"><a href="#">เกี่ยวกับเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="#">ประวัติสินทรัพย์ประกันภัย</a></li>
							<li><a href="#">วิสัยทัศน์ และพันธกิจ</a></li>
							<li><a href="#">คณะกรรมการตรวจสอบ</a></li>
							<li><a href="#">คณะกรรมการการลงทุน</a></li>
							<li><a href="#">นโยบายบริษัท</a></li>
							<li><a href="#">ISO : 9001:2008</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="#">ผลิตภัณฑ์และบริการ</a>
					<div class="submenu">
						<ul>
							<li><a href="products01-1.php">ประกันภัยรถยนต์ประเภท 1 พิเศษ</a></li>
							<li><a href="products02-1.php">ประกันภัยรถยนต์ประเภท 3 รวมพรบ.</a></li>
							<li><a href="products03-1.php">ประกันภัยรถยนต์ประเภท 3 พิเศษ</a></li>
							<li><a href="products04-1.php">ประกันภัยรถยนต์ประเภท 2 พิเศษ</a></li>
							<li><a href="products05-1.php">ประกันภัยผู้เล่นกอล์ฟ</a></li>
							<li><a href="products06-1.php">ประกันภัยอุบัติเหตุส่วนบุคคล</a></li>
							<li><a href="products07-1.php">ประกันภัยอุบัติเหตุการเดินทาง</a></li>
							<li><a href="products08-1.php">ประกันภัยคนรักบ้าน</a></li>
							<li><a href="products09-1.php">ประกันภัยเบ็ดเตล็ดคุ้มครองผู้ค้าอัญมณี</a></li>
							<li><a href="products-servicecenter.php">อู่ / ศูนย์บริการ</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="#">ข้อมูลนักลงทุน</a>
					<div class="submenu">
						<ul>
							<li><a href="#">รายงานประจำปี</a></li>
							<li><a href="#">ฐานะทางการเงินและผลการดำเนินงาน</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="news.php">ข่าวสารและกิจกรรม</a></li>
				<li class="mainmenu"><a href="#">ร่วมงานกับเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="career-list.php">ตำแหน่งงานว่าง</a></li>
							<li><a href="career-form.php">สมัครงานออนไลน์</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="#">ติดต่อเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="contactus-head.php">ที่อยู่และการติดต่อ</a></li>
							<li><a href="complain.php">ข้อเสนอแนะ</a></li>
							<li><a href="faq.php">FAQ</a></li>
						</ul>
					</div>
				</li>
			</ul>
			<div class="input-holder round">
				<input  type="text" placeholder="search">
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					/* Old subMenu */
					/*
$(".mainmenu > a").click(function(){
						var subMenu = $(this).parent().find(".submenu");
							if($(subMenu).hasClass("opened")){ 
								$(".submenu.opened").slideUp().removeClass("opened");
								
							}else{
								$(".submenu.opened").slideUp().removeClass("opened");
								$(subMenu).slideToggle().addClass("opened");
							}
							
					})
*/
					/* new subMenu */
					
					$(".mainmenu").hoverIntent(function(){
					if($(this).find(".submenu").length>0){
						$(this).addClass("hover");
						$(this).find(".submenu").slideToggle();
						}
					},function(){
						var object =$(this);
						setTimeout(function(){
							$(object).find(".submenu").slideUp();
							$(object).removeClass("hover");
						},200);
					});
				})
			</script>
		</nav>
	</header>
	</div>
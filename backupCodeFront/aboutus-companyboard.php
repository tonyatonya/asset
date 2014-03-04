<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<?php require('inc_mainmenu.php') ?>
<div class="wrapper otherpage contact">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_aboutus-leftcol.php') ?>
	</section>
	<section class="right-col aboutus  aboutbg">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">เกี่ยวกับเรา</a></li>
				<li>คณะกรรมการบริษัท</li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>คณะกรรมการบริษัท</h2>		
		</div>
		<div class="clear" style="height:20px;"></div>
		<!--
<div class="tab-menu">
			<ul>
				<li class="active"><a href="aboutus-board.php">คณะกรรมการบริหาร</a></li>
				<li><a href="aboutus-board2.php">คณะกรรมการตรวจสอบ</a></li>
				<li><a href="aboutus-board3.php">คณะกรรมการความเสี่ยง</a></li>
				<li><a href="aboutus-board4.php">คณะกรรมการลงทุน</a></li>
			</ul>
</div>
-->
		<div class="clear" style="height:20px;"></div>
		<ul class="board-list">
			<li class="mainlist">
				<div class="img"><a href="images/bord/pornsit.JPG"><img src="images/bord/pornsit.JPG" alt="somnuke" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นายพรสิทธิ์ ศรีอรทัยกุล</div>
					<div class="position">ประธานกรรมการกิตติมศักดิ์</div>
				</div>
			</li>
			<li class="mainlist">
				<div class="img"><a href="images/bord/sunee.JPG"><img src="images/bord/sunee.JPG" alt="somnuke" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">ดร.สุณี ศรีอรทัยกุล</div>
					<div class="position">ประธานกรรมการบริษัท</div>
				</div>
			</li>
			<li class="mainlist">
				<div class="img"><a href="images/bord/somnuke.JPG"><img src="images/bord/somnuke.JPG" alt="somnuke" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">ดร.สมนึก สงวนสิน</div>
					<div class="position">รองประธานกรรมการบริษัท</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/sasamon.JPG"><img src="images/bord/sasamon.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นางศศมณฑ์ สงวนสิน</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/surasit.JPG"><img src="images/bord/surasit.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นายสุรสิทธิ์ ศรีอรทัยกุล</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/prawit.JPG"><img src="images/bord/prawit.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">ดร.ประวิตร สงวนสิน</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/piroj.JPG"><img src="images/bord/piroj.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นายไพโรจน์ พรหมสาส์น</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/montri.JPG"><img src="images/bord/montri.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นายมนตรี เนรทัญฐี</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/prapas.JPG"><img src="images/bord/prapas.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">พลเอกประพาฬ นิลวงศ์</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/bangorn.JPG"><img src="images/bord/bangorn.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นางสาวบังอร มี้เจริญ</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/boonchuy.JPG"><img src="images/bord/boonchuy.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">พล.อ.อ. บุญช่วย สุภรสุข</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/suriyon.JPG"><img src="images/bord/suriyon.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นายสุริยน ศรีอรทัยกุล</div>
					<div class="position">กรรมการ</div>​
				</div>
			</li>
		</ul>
	</section>
</div>
</div>
<link rel="stylesheet" href="css/colorbox.css"/>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(function(){
		$(".img a").colorbox();
	})
</script>
<?php require('inc_footer.php'); ?>
</body>
</html>
<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<?php require('inc_mainmenu.php') ?>
<div class="wrapper otherpage">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_contactus-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="index.php">หน้าหลัก</a></li>
				<li><a href="#">ติดต่อเรา</a></li>
					<li>ที่อยู่และการติดต่อ</li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/ico/assetIcon19.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ที่อยู่และการติดต่อ</h2>
		</div>
		<?php include('inc_contact-tabmenu.php'); ?>
		<div style="margin-top:30px; float:left; margin-left:80px;">
			<ul class="contact-detail">
				<li>บริษัทสินทรัพย์ประกันภัยจำกัด (มหาชน)</li>
				<li>492-494 ถ.รัชดาภิเษก แขวงสามเสนนอก เขตห้วยขวาง กทม.</li>
				<li>โทร : 0-2792-5555</li>
				<li>แจ้งอุบัติเหตุโทร : 0-2792-5500</li>
			</ul>
			<div class="map">
				<a href="#">
					<img src="images/mainmap.jpg" alt="mainmap" width="457" height="324">
				</a>
			</div>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
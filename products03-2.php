<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<div class="wrapper otherpage">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_product-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ผลิตภัณฑ์และบริการ</a></li>
				<li><a href="#">ประกันภัยรถยนต์ประเภท 3 พิเศษ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ประกันภัยรถยนต์ประเภท 3 พิเศษ</h2>
		</div>
		<div class="product-banner">
			<img src="images/productsbanner/productsbanner04.jpg" alt="productsbanner04" width="630" height="200">
		</div>
		<div class="tab-menu">
			<ul>
				<li><a href="products03-1.php">รายละเอียด</a></li>
				<li class="active"><a href="products03-2.php">เงื่อนไข</a></li>
			</ul>
		</div>
		<div class="product-content">
			<h3>เงื่อนไขการรับประกันภัย</h3>
			<ol class="rule-list">
				<li>รับประกันภัยเฉพาะรถยนต์เก๋ง, กระบะใช้ส่วนบุคคล</li>
				<li>ไม่รับประกันรถยนต์ กลุ่ม 1 รถยนต์นำเข้า รถยุโรป รถยนต์สปอร์ต รถยนต์ตกแต่งดัดแปลง</li>
				<li>ราคารถยนต์ขณะรับประกันถัยต้องไม่ต่ำกว่า 200,000 บาท</li>
				<li>รับประกันรถยนต์เก๋ง และ กระบะ อายุรถไม่เกิน 15 ปี</li>
				<li>ไม่มีส่วนลดกลุ่ม ส่วนลดประวัติดี และไม่มีการโอนส่วนลดประวัติดี</li>
			</ol>
			
			
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
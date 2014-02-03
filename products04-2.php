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
				<li><a href="#">ประกันภัยรถยนต์ประเภท 2 พิเศษ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ประกันภัยรถยนต์ประเภท 2 พิเศษ</h2>
		</div>
		<div class="product-banner">
			<img src="images/productsbanner/productsbanner02.jpg" alt="productsbanner02" width="630" height="200">
		</div>
		<div class="tab-menu">
			<ul>
				<li ><a href="products04-1.php">รายละเอียด</a></li>
				<li class="active"><a href="products04-2.php">เงื่อนไข</a></li>
			</ul>
		</div>
		<div class="product-content">
			<h3>เงื่อนไขการรับประกันภัย</h3>
			<ol class="rule-list">
				<li>รับประกันภัยเฉพาะรถยนต์เก๋ง, กระบะใช้ส่วนบุคคล</li>
				<li>ไม่รับประกันรถยนต์กลุ่ม 1 รถยนต์นำเช้า รถยุโรป รถยนต์สปอร์ต รถยนต์ตกแต่งดัดแปลง</li>
				<li>ทุนประกันภัยรถยนต์สูญหาย ไฟไหม้ ไม่เกิน 80% ของราคารถยนต์ในปัจจุบัน</li>
				<li>รับประกันอายุรถยนต์เก๋งไม่เกิน 15 ปี และ กระบะไม่เกิน 10 ปี</li>
				<li>ไม่มีสวนลดกลุ่ม ส่วนลดประวัติดี และไม่มีการโอนส่วนลดประวัติดี</li>
			</ol>
			<h3>เงื่อนไขความคุ้มครอง</h3>
			<ol class="rule-list">
				<li>คุ้มครองรถยนต์ สูญหาย ไฟไหม้ สูงสุดไม่เกิน 500,000 บาท ตามตารางเบี้ย</li>
				<li>คุ้มครองความเสียหายต่อรถยนต์อันมีสาเหตุมาจากการชนกับยานพาหนะทางบก และคู่กรณีอยู่ในที่เกิดเหตุ
     ภายในวงเงินไม่เกิน 150,000 บาท</li>
				<li>การประกันภัยนี้ไม่คุ้มครองความเสียหายต่อรถยนต์ที่เกิดจากการพลิกคว่ำ หรือหักหลบสิ่งกีดขวาง หรือ
     การเฉี่ยวชนกับวัตถุใดๆ ที่ไม่ใช่ยานพาหนะทางบก หรือจากการใช้รับจ้างสาธารณะ</li>
     			<li>คุ้มครองอุปกรณ์ตกแต่งรถยนต์ตามมาตรฐานที่มาจากโรงงาน</li>
			</ol>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
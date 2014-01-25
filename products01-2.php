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
				<li><a href="#">ประกันภัยรถยนต์ประเภท 1 พิเศษ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ประกันภัยรถยนตืประเภท 1 พิเศษ</h2>
		</div>
		<div class="product-banner">
			<img src="images/productsbanner/productsbanner01.jpg" alt="productsbanner01" width="630" height="200">
		</div>
		<div class="tab-menu">
			<ul>
				<li><a href="products01-1.php">รายละเอียด</a></li>
				<li class="active"><a href="products01-2.php">เงื่อนไข</a></li>
			</ul>
		</div>
		<div class="product-content">
			<h3>รายละเอียดความคุ้มครองกรมธรรม์</h3>
			<ol class="rule-list">
				<li>รับประกันเฉพาะรถยนต์เก๋ง, กระบะใช้ส่วนบุคคล</li>
				<li>ไม่รับประกันรถยนต์กลุ่ม 1 รถยนต์นำเข้า รถยุโรป รถยนต์สปอร์ต รถยนต์ตกแต่งดัดแปลง</li>
				<li>ราคารถยนต์ขณะรับประกันภัยไม่ต่ำว่าทุนประกันภัย และ ทุนประกันภัยไม่ต่ำกว่า 80% ของราคารถยนต์ในปัจจุบัน</li>
				<li>รับประกันรถยนต์เก๋ง ไม่เกิน 10 ปี กระบะไม่เกิน 7ปี</li>
				<li>ไม่มีส่วนลดกลุ่ม ส่วลดประวัติดี และไม่มีการโอนส่วนลดประวัติดี</li>
			</ol>
			<h3>เงื่อนไขความคุ้มครอง</h3>
			<ol class="rule-list">
				<li>คุ้มครองรถยนต์สูญหาย และไฟไหม้ ภายในวงเงินตามตารางเบี้ย</li>
				<li>คุ้มครองความเสียหายต่อรถยนต์ อันมีสาเหตุมาจากการชนกับยานพาหนะทางบก และคู่กรณีอยู่ในที่เกิดเหตุ ภายในวงเงินตามตารางเบี้ย</li>
				<li>การประกันภัยนี้ไม่คุ้มครองความเสียหายต่อรถยนต์ ที่เกิดจากการพลิกคว่ำ หรือหักหลบสิ่งกีดขวาง หรือการเฉี่ยวชนกับวัตถุใดๆ ที่ไม่ใช่ยานพาหนะทางบก หรือจากการใช้รับจ้างสาธรณะ</li>
			</ol>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
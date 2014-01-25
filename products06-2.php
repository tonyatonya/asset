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
				<li><a href="#">ประกันภัยอุบัติเหตุส่วนบุคคล</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ประกันภัยอุบัติเหตุส่วนบุคคล</h2>
		</div>
		<div class="product-banner">
			<img src="images/productsbanner/productsbanner06.jpg" alt="productsbanner06" width="630" height="200">
		</div>
		<div class="tab-menu">
			<ul>
				<li><a href="products06-1.php">รายละเอียด</a></li>
				<li class="active"><a href="products06-2.php">เงื่อนไข</a></li>
			</ul>
		</div>
		<div class="product-content">
			<h3>เงื่อนไขการรับประกันภัย</h3>
			<ol class="rule-list">
				<li>รับประกันภัยจำกัดอายุไม่เกิน  60 ปี</li>
			</ol>
			<h3>ข้อยกเว้นการรับประกันภัย</h3>
			<ol class="rule-list">
				<li>ให้เป็นไปตาม หมวดที่ 3 ข้อยกเว้นทั้วไป</li>
			</ol>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
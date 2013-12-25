<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<div class="wrapper otherpage contact">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_contactus-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ติดต่อเรา</a></li>
				<li><a href="#">ที่อยู่และการติดต่อ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ที่อยู่และการติดต่อ</h2>
		</div>
		<?php include('inc_contact-tabmenu.php'); ?>
		<div class="formholder">
			<h3>กรุณากรอกข้อมูลการติดต่อตามแบบฟอร์มด้านล่าง</h3>
			<input type="text" placeholder="ชื่อ-นามสกุล">
			<input type="text" placeholder="อีเมล์">
			<input type="text" placeholder="โทรศัพท์">
			<textarea placeholder="ข้อความ"></textarea>
			<div style="margin-top:10px; width:310px; margin-left:auto;margin-right:auto;">
				<div class="asset-btn" style="float:right;">
					<a href="#">
						<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
						<div class="btn-body">ส่งข้อความ</div>
						<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
					</a>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
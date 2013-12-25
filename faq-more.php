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
				<li><a href="#">FAQ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>FAQ</h2>
		</div>
		<div class="search-box">
			<div>กรุณาเลือกหมวดคำถามที่ท่านต้องการทราบ</div>
			<div class="box-holder"><input type="text" placeholder="ค้นหาคำถามทันใจ"><input type="image" src="images/searchbtn.png"></div>
		</div>
		<div class="tab-menu">
			<ul>
				<li class="active"><a href="#">กรมธรรม์</a></li>
				<li><a href="#">เคลม</a></li>
				<li><a href="#">นโยบาย</a></li>
				<li><a href="#">เรื่องอื่นๆ</a></li>
				<li><a href="#">สอบถามเพิ่มเติม</a></li>
			</ul>
</div>
		<div class="clear"></div>
		<div class="formholder">
			<h3>กรุณากรอกคำถามที่ต้องการถามเพิ่มเติม</h3>
			<input type="text" placeholder="ชื่อ-นามสกุล">
			<input type="text" placeholder="อีเมล์">
			<input type="text" placeholder="โทรศัพท์">
			<select>
				<option>เลือกหมวดคำถามที่ต้องการ</option>
				<option>กรรมธรรม์</option>
				<option>เคลม</option>
				<option>นโยบาย</option>
				<option>เรื่องอื่นๆ</option>
			</select>
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
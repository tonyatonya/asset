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
		<?php require('inc_calculate-leftcol.php') ?>
	</section>
	<section class="right-col aboutus">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">คำนวณเบี้ยประกัน</a></li>
				<li>ประกันภัยประเภท 3 รวม พรบ.</li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>คำนวณเบี้ยประกัน</h2>		
		</div>
		<div class="clear" style="height:20px;"></div>
		<h3>ประกันภัยรถยนต์ประเภท 3 รวม พรบ.</h3>
		<div class="formsection calform">
			<div class="title">ข้อมูลผู้เอาประกันภัย</div>
			<table class="tb-member">
				<tr>
					<td>ชื่อ - นามสกุล :</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>เลขบัตรประจำตัวประชาขน :</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>ที่อยู่ปัจจุบัน เลขที่ :</td>
					<td><input type="text" class="minWidth"><label>หมู่ : </label><input type="text" class="minWidth"><label>ตรอก / ซอย : </label><input type="text" style="width:142px;"></td>
				</tr>
				<tr>
					<td>ถนน :</td>
					<td>
						<input type="text" class="maxWidth">
					</td>
				</tr>
				<tr>
					<td>จังหวัด</td>
					<td><div class="select-holder halfWidth">
				 		<select>
				 			<option>กรุณาเลือกจังหวัด</option>
				 		</select>		
				 	</div></td>
				</tr>
				<tr>
					<td>อำเภอ :</td>
					<td><div class="select-holder halfWidth">
				 		<select>
				 			<option>กรุณาเลือกอำเภอ</option>
				 		</select>		
				 	</div></td>
				</tr>
				<tr>
					<td>ตำบล :</td>
					<td><div class="select-holder halfWidth">
				 		<select>
				 			<option>กรุณาเลือกตำบล</option>
				 		</select>		
				 	</div></td>
				</tr>
				<tr>
					<td>รหัสไปรษณีย์ :</td>
					<td>
						<input type="text" class="halfWidth">
					</td>
				</tr>
				<tr>
					<td>โทรศัพท์ 1 :</td>
					<td>
						<input type="text" class="halfWidth">
					</td>
				</tr>
				<tr>
					<td>โทรศัพท์ 2 :</td>
					<td>
						<input type="text" class="halfWidth">
					</td>
				</tr>
				<tr>
					<td>อีเมล์</td>
					<td>
						<input type="text" class="halfWidth">
					</td>
				</tr>
			</table>
			<div class="clear" style="height:20px;"></div>
		</div>
		<div class="form-nav">
			<table>
				<tr>
					<td></td>
					<td>
						<ul>
							<li><div class="asset-btn">
							<a href="#">
							<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
							<div class="btn-body">ยกเลิก</div>
							<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
							</a>
						</div></li>
							<li><div class="asset-btn">
							<a href="#">
							<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
							<div class="btn-body">ส่งข้อมูล</div>
							<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
							</a>
						</div></li>
						</ul>
					</td>
				</tr>
			</table>
		</div>	
		<div class="remark calform">
				 <span>หมายเหตุ : </span>
				 <ol>
				 	<li>แบบฟอร์มนี้ไม่ใช่ใบคำขอเอาประกันภัย</li>
				 	<li>เมื่อบริษัทฯได้รับข้อมูลตามแบบฟอร์มที่กรอกแล้วจะมีเจ้าหน้าที่ของบริษัทดำเนินการต่อไป</li>
				 </ol>
			</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
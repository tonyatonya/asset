<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<div class="wrapper otherpage">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_member-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">สมาชิก</a></li>
				<li><a href="#">สมัครสมาชิก</a></li>
			</ul>
		</div>
		<hr>
		<h2>แก้ไขข้อมูลสมาชิก</h2>
		
		<hr>
		<div class="formsection">
			<div class="title">ข้อมูลส่วนตัว</div>
			<table class="tb-member">
				<tr>
					<td>ชื่ออีเมล์</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>คำนำหน้าชื่อ</td>
					<td>
						<input type="radio"><label>นาย</label>
						<input type="radio"><label>นางสาว</label>
						<input type="radio"><label>นาง</label>
						<input type="radio"><label>อื่นๆ</label><input type="text" style="width:80px;">
					</td>
				</tr>
				<tr>
					<td>ชื่อ</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>นามสกุล</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>เอกสารอ้างอิง</td>
					<td>
						<select>
							<option>เลขประจำตัวประชาขน</option>
							<option>เลขที่หนังสือเดินทาง</option>
						</select>
						
						<label>เลขที่</label><input type="text" class="halfWidth">
					</td>
				</tr>
				<tr>
					<td>วันเดือนปีเกิด</td>
					<td><input type="date" class="maxWidth"></td>
				</tr>
				<tr>
					<td>สัญชาติ</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>สถานภาพการสมรส</td>
					<td>
						<input type="radio"><label>โสด</label>
						<input type="radio"><label>สมรส</label>
						<input type="radio"><label>ไม่ระบุ</label>
					</td>
				</tr>
			</table>
			<div class="title">สถานที่ติดต่อ (ที่สามารถติดต่อได้)</div>
			<table class="tb-member">
				<tr>
					<td>ที่อยู่</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>แขวง/ตำบล</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>เขต/อำเภอ</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>จังหวัด</td>
					<td>
						<select>
							<option>กรุณาเลือกจังหวัด</option>
						</select>
						<label>รหัสไปรษณีย์</label><input type="text" class="halfWidth">
					</td>
				</tr>
				<tr>
					<td>โทรศัพท์</td>
					<td><input type="text" class="halfWidth"></td>
				</tr>
				<tr>
					<td>โทรศัพท์มือถือ</td>
					<td><input type="text" class="halfWidth"></td>
				</tr>
				<tr>
					<td>โทรสาร</td>
					<td><input type="text" class="halfWidth"></td>
				</tr>
			</table>
			<div class="remark">
				 <span>หมายเหตุ : </span> หากมีการกรอกข้อมูลครบถ้วนจะสะดวกในการซื้อประกันภัยในครั้งถัดไป
			</div>
			<div class="btn-holder">
				<input  type="submit" value="ยกเลิกการแก้ไข">
				<input  type="submit" value="ยืนยันการแก้ไข">
			</div>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
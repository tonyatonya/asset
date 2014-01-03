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
		<h2>แบบฟอร์มการลงทะเบียนเป็นสมาชิก</h2>
		<p>
			ท่านสามารถกรอกรายละเอียดลงทะเบียนเป็นสมาชิก เพื่อรับโปรโมชั่น และสิทธิพิเศษต่างๆ เมื่อซื้อประกันภัยกับเรา โดยไม่มีค่าใช้จ่ายในการสมัคร
		</p>
		<h3>
			กรุณากรอกข้อมูลของท่านคามความเป็นจริงลงในแบบฟอร์มด้านล่าง
			<span>(ส่วนล่างของแบบฟอร์มที่มีเครื่องหมาย "*" หมายถึงข้อมูลสำคัญที่ท่านต้องกรอก)</span>
		</h3>
		<hr>
		<div class="formsection">
			<div class="title">ข้อมูลส่วนตัว</div>
			<table class="tb-member">
				<tr>
					<td>ชื่ออีเมล์</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>รหัสผ่านที่ต้องการ</td>
					<td><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td>ยืนยันรหัสผ่าน</td>
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
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
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
				<li><a href="#">ลืมรหัสผ่าน</a></li>
			</ul>
		</div>
		<hr>
		<div class="formsection">
			<div class="title">ลืมรหัสผ่าน</div>
			<table class="tb-member">
				<tr>
					<td>ระบุอีเมล์ที่ใช้ลงทะเบียน</td>
					<td><input type="password" class="maxWidth"></td>
				</tr>		
			</table>
			<div class="btn-holder">
				<input  type="submit" value="ยกเลิก">
				<input  type="submit" value="ยืนยัน">
			</div>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
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
		<h2>แก้ไขรหัสผ่าน</h2>
		
		<hr>
		<div class="formsection">
			<div class="title">ข้อมูลรหัสผ่าน</div>
			<table class="tb-member">
				<tr>
					<td>รหัสผ่านเดิม</td>
					<td><input type="password" class="maxWidth"></td>
				</tr>
				<tr>
					<td>รหัสผ่านใหม่</td>
					<td><input type="password" class="maxWidth"></td>
				</tr>
				<tr>
					<td>ยืนยันรหัสผ่านใหม่</td>
					<td><input type="password" class="maxWidth"></td>
				</tr>
			</table>
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
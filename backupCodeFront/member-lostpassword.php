<?php 
	@require_once('backoffice/init.php');
?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<?php require('inc_mainmenu.php') ?>
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
			<form method="post" action="chk-lostpassword.php">
				<table class="tb-member">
					<tr>
						<td>ระบุอีเมล์ที่ใช้ลงทะเบียน</td>
						<td><input type="text" class="maxWidth" name="lost-email"></td>
					</tr>		
				</table>
				<div class="btn-holder">
					<input  type="reset" value="ยกเลิก">
					<input  type="submit" value="ยืนยัน">
				</div>
			</form>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
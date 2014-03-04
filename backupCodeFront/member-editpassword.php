<?php 
	@require_once('backoffice/init.php'); 
	if($_SESSION["ID"] == ""){
		alert('กรูณาสมัครสมาชิก ค่ะ');
	} else {
	$user 	= $db->record(DB_PREFIX.'user','id_user='.$_SESSION["ID"]);
		$password=$user->password;
	}
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
				<li><a href="#">แก้ไขรหัสผ่าน</a></li>
			</ul>
		</div>
		<hr>
		<div class="formsection">
			<div class="title">ข้อมูลรหัสผ่าน</div>
			<form method="post" id="form1" action="?Mode=changpw">
			<table class="tb-member">
				<tr>
					<td>รหัสผ่านเดิม</td>
					<td><input type="password" class="maxWidth" name="oldpassword"></td>
				</tr>
				<tr>
					<td>รหัสผ่านใหม่</td>
					<td><input type="password" class="maxWidth" name="newpassword"></td>
				</tr>
				<tr>
					<td>ยืนยันรหัสผ่านใหม่</td>
					<td><input type="password" class="maxWidth" name="cnewpassword"></td>
				</tr>
			</table>
			<div class="btn-holder">
				<input  type="reset" value="ยกเลิกการแก้ไข">
				<input  type="submit" value="ยืนยันการแก้ไข">
			</div>
			</form>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
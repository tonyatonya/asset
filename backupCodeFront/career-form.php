<?php 
	@require_once('backoffice/init.php');
	$office = $db->result(DB_PREFIX.'office');
	//require('init.php'); 
	if( !empty($_REQUEST["Mode"]) ){
	require 'backoffice/backoffice/user/ck.class.php';
	require 'backoffice/init.php';
	$obj = new cCompile($db);
	if( method_exists($obj,$_REQUEST["Mode"]) ){
		$obj->$_REQUEST["Mode"]();
	}else{
		alert('ไม่พบ Method!');
		backpage();
	}
	exit;
	 
	}
	 
	// echo $_GET['aaa'];
?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<?php require('inc_mainmenu.php') ?>
<div class="wrapper otherpage contact">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_career-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ร่วมงานกับเรา</a></li>
				<li>สมัครงานออนไลน์</li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/ico/assetIcon16.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>สมัครงานออนไลน์</h2>
				<div style="display:inline; float:right; text-align:right; margin-top:-40px; font-size:1.2em;">
					<span>สอบถามรายละเอียดเพิ่มเติม<br>ฝ่ายทรัพยากรบุคคล 0-2792-5558</span>
				</div>
		</div>
		<div class="form-section">ข้อมูลทั่วไป</div>
		<?php
			$_GET['ss'];
		?>
		<form method="post" id="form1" action="testsendmail.php" enctype="multipart/form-data" target="_Blank">
			<div class="form-box">	
				<table class="career-tb">
					<tr>
						<td class="label">ชื่อนามสกุล</td>
						<td colspan="3"><input type="text" class="maxWidth" name="txtname"></td>
					</tr>
					<tr>
						<td class="label">เลขที่บัตรประชาชน</td>
						<td colspan="3"><input type="text" class="maxWidth" name="txt_id_card"></td>
					</tr>
					<tr>
						<td class="label">อายุ</td>
						<td><input type="text" class="minWidth" name="txtage"></td>
						<td class="label">เพศ</td>
						<td><input type="text" class="minWidth" name="txtsex"></td>
					</tr>
					<tr>
						<td class="label">สัญชาติ</td>
						<td><input type="text" class="minWidth" name="txtnationality_1"></td>
						<td class="label">เชื้อชาติ</td>
						<td><input type="text" class="minWidth" name="txtnationality_2"></td>
					</tr>
					<tr>
						<td class="label">โทรศัพท์</td>
						<td colspan="3"><input type="text" class="maxWidth" name="txttel"></td>
					</tr>
					<tr>
						<td class="label">อีเมล์</td>
						<td colspan="3"><input type="text" class="maxWidth" name="txtemail"></td>
					</tr>
					<tr>
						<td class="label">ที่อยู่</td>
						<td colspan="3"><textarea name="txtaddress"></textarea></td>
					</tr>
				</table>
			</div>
			<div class="form-section">ข้อมูลการศึกษา</div>
			<div class="form-box">
				<table class="career-tb">
					<tr>
						<td class="label">ระดับการศึกษาสูงสุด</td>
						<td colspan="3"><input type="text" class="maxWidth" name="txtlevel"></td>
					</tr>
					<tr>
						<td class="label">คณะ / สาขา</td>
						<td colspan="3"><input type="text" class="maxWidth" name="txtbranch"></td>
					</tr>
					<tr>
						<td class="label">สถาบันการศึกษา</td>
						<td colspan="3"><input type="text" class="maxWidth" name="txtuniversity"></td>
					</tr>
					<tr>
						<td class="label">ปี พ.ศ. ที่จบการศึษา</td>
						<td colspan="3"><input type="text" class="minWidth" name="txtgraduate"></td>
					</tr>
					<tr>
						<td class="label">เกรดเฉลี่ย</td>
						<td colspan="3"><input type="text" class="minWidth" name="txtgrade"></td>
					</tr>
				</table>
			</div>
			<div class="form-section">ประสบการณ์การทำงาน</div>
			<div class="form-box">
				<table class="career-tb" style="width:500px;">
					<tr>
						<td class="label">อายุงาน</td>
						<td colspan="3"><input type="text" class="minWidth" name="txtexperience"></td>
					</tr>
					<tr>
						<td class="label" colspan="4">กรุณาอธิบายลักษณะของงาน, ความเชี่ยวชาญ, และความสามารถพิเศษของท่านโดยสังเขป</td>
					</tr>
					<tr>
						<td colspan="4"><textarea style="margin-left:auto; margin-right:auto; float:none;" name="txtdetail_myself"></textarea></td>
					</tr>
				</table>
			</div>
			<div class="form-section">ข้อมูลอื่นๆ</div>
			<div class="form-box">
				<table class="career-tb">
					<tr>
						<td class="label">ใบอนุญาตขับขี่</td>
						<td class="3"><input type="radio" name="txtlicence" value="มี"><label>มี</label> <input type="radio" name="txtlicence" value="ไม่มี"><label>ไม่มี</label></td>
					</tr>
					<tr>
						<td class="label">ยานพาหนะส่วนตัว</td>
						<td class="3"><input type="radio" name="txtmy_car" value="มี"><label>มี</label> <input type="radio" name="txtmy_car" value="ไม่มี"><label>ไม่มี</label></td>
					</tr>
					<tr>
						<td class="label">พิมพ์ดีดไทย</td>
						<td colspan="3"><input type="text" class="minWidth" name="txttype_th"> คำ/นาที</td>
					</tr>
					<tr>
						<td class="label">พิมพ์ดีดอังกฤษ</td>
						<td colspan="3"><input type="text" class="minWidth" name="txttype_en"> คำ/นาที</td>
					</tr>
					<tr>
						<td class="label">การอ่านภาษาอังกฤษ</td>
						<td class="3">
							<input type="radio" name="txtread" value="ไม่ได้"><label>ไม่ได้</label>
							<input type="radio" name="txtread" value="พอได้"><label>พอได้</label>
							<input type="radio" name="txtread" value="ดี"><label>ดี</label>
							<input type="radio" name="txtread" value="ดีเยี่ยม"><label>ดีเยี่ยม</label>
						</td>
					</tr>
					<tr>
						<td class="label">การเขียนภาษาอังกฤษ</td>
						<td class="3">
							<input type="radio" name="txtwrith" value="ไม่ได้"><label>ไม่ได้</label>
							<input type="radio" name="txtwrith" value="พอได้"><label>พอได้</label>
							<input type="radio" name="txtwrith" value="ดี"><label>ดี</label>
							<input type="radio" name="txtwrith" value="ดีเยี่ยม"><label>ดีเยี่ยม</label>
						</td>
					</tr>
					<tr>
						<td class="label">การพูดภาษาอังกฤษ</td>
						<td class="3">
							<input type="radio" name="txtspeak" value="ไม่ได้"><label>ไม่ได้</label>
							<input type="radio" name="txtspeak" value="พอได้"><label>พอได้</label>
							<input type="radio" name="txtspeak" value="ดี"><label>ดี</label>
							<input type="radio" name="txtspeak" value="ดีเยี่ยม"><label>ดีเยี่ยม</label>
						</td>
					</tr>
				</table>
			</div>
			<div class="form-section">ตำแหน่งงานที่ท่านต้องการสมัคร</div>
			<div class="form-box">
				<table class="career-tb">
					<tr>
						<td class="label">ตำแหน่งงาน</td>
						<td>
							<select name="txtoffice">
								<?php
									if($office ){
										foreach($office as $c){
											$c->id_office;
											$off_topic=$c->office_topic;
											
												if ($off_topic == $_GET['aaa'] ){
													echo '<option value="'.$c->office_topic.'" selected="select">'.$c->office_topic.'</option>';
												} else {
													echo '<option value="'.$c->office_topic.'">'.$c->office_topic.'</option>';
												}
										}
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="label">เงินเดือนที่ต้องการ</td>
						<td><input type="text" class="minWidth" name="txtsaraly"> บาท</td>
					</tr>
				</table>
			</div>
			<div class="form-section">เอกสารแนบ (ถ้ามี)</div>
			<div class="form-box">
				<table class="career-tb">
				<tbody id="file_pic">
					<tr>
						<td class="label">ไฟล์รูปถ่าย</td>
						<td><input type="file" name="picture[]" multiples></td>
					</tr>
				<tbody>
					<tr>
						<td class="label">ไฟล์ Resume</td>
						<td><input type="file" name="resume"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center;"><input type="submit" placeholder="สมัคร"> <input onclick="add_pic();" type="button" value="เพิ่มรูป"></td>
					</tr>
				</table>
				
			</div>
		</form>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
<script>
function add_pic(){
$('#file_pic').append('<tr>'+
		'<td class="label">ไฟล์รูปถ่าย</td>'+
		'<td><input type="file" name="picture[]" multiples></td>'+
	'</tr>');
}
</script>
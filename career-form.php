<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
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
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>สมัครงานออนไลน์</h2>
				<div style="display:inline; float:right; text-align:right; margin-top:-40px; font-size:1.2em;">
					<span>สอบถามรายละเอียดเพิ่มเติม<br>ฝ่ายทรัพยากรบุคคล 0-2792-5558</span>
				</div>
		</div>
		<div class="form-section">ข้อมูลทั่วไป</div>
		<div class="form-box">	
			<table class="career-tb">
				<tr>
					<td class="label">ชื่อนามสกุล</td>
					<td colspan="3"><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td class="label">เลขที่บัตรประชาชน</td>
					<td colspan="3"><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td class="label">อายุ</td>
					<td><input type="text" class="minWidth"></td>
					<td class="label">เพศ</td>
					<td><input type="text" class="minWidth"></td>
				</tr>
				<tr>
					<td class="label">สัญชาติ</td>
					<td><input type="text" class="minWidth"></td>
					<td class="label">เชื้อชาติ</td>
					<td><input type="text" class="minWidth"></td>
				</tr>
				<tr>
					<td class="label">โทรศัพท์</td>
					<td colspan="3"><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td class="label">อีเมล์</td>
					<td colspan="3"><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td class="label">ที่อยู่</td>
					<td colspan="3"><textarea></textarea></td>
				</tr>
			</table>
		</div>
		<div class="form-section">ข้อมูลการศึกษา</div>
		<div class="form-box">
			<table class="career-tb">
				<tr>
					<td class="label">ระดับการศึกษาสูงสุด</td>
					<td colspan="3"><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td class="label">คณะ / สาขา</td>
					<td colspan="3"><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td class="label">สถาบันการศึกษา</td>
					<td colspan="3"><input type="text" class="maxWidth"></td>
				</tr>
				<tr>
					<td class="label">ปี พ.ศ. ที่จบการศึษา</td>
					<td colspan="3"><input type="text" class="minWidth"></td>
				</tr>
				<tr>
					<td class="label">เกรดเฉลี่ย</td>
					<td colspan="3"><input type="text" class="minWidth"></td>
				</tr>
			</table>
		</div>
		<div class="form-section">ประสบการณ์การทำงาน</div>
		<div class="form-box">
			<table class="career-tb" style="width:500px;">
				<tr>
					<td class="label">อายุงาน</td>
					<td colspan="3"><input type="text" class="minWidth"></td>
				</tr>
				<tr>
					<td class="label" colspan="4">กรุณาอธิบายลักษณะของงาน, ความเชี่ยวชาญ, และความสามารถพิเศษของท่านโดยสังเขป</td>
				</tr>
				<tr>
					<td colspan="4"><textarea style="margin-left:auto; margin-right:auto; float:none;"></textarea></td>
				</tr>
			</table>
		</div>
		<div class="form-section">ข้อมูลอื่นๆ</div>
		<div class="form-box">
			<table class="career-tb">
				<tr>
					<td class="label">ใบอนุญาตขับขี่</td>
					<td class="3"><input type="radio"><label>มี</label> <input type="radio"><label>ไม่มี</label></td>
				</tr>
				<tr>
					<td class="label">ยานพาหนะส่วนตัว</td>
					<td class="3"><input type="radio"><label>มี</label> <input type="radio"><label>ไม่มี</label></td>
				</tr>
				<tr>
					<td class="label">พิมพ์ดีดไทย</td>
					<td colspan="3"><input type="text" class="minWidth"> คำ/นาที</td>
				</tr>
				<tr>
					<td class="label">พิมพ์ดีดอังกฤษ</td>
					<td colspan="3"><input type="text" class="minWidth"> คำ/นาที</td>
				</tr>
				<tr>
					<td class="label">การอ่านภาษาอังกฤษ</td>
					<td class="3">
						<input type="radio"><label>ไม่ได้</label>
						<input type="radio"><label>พอได้</label>
						<input type="radio"><label>ดี</label>
						<input type="radio"><label>ดีเยี่ยม</label>
					</td>
				</tr>
				<tr>
					<td class="label">การเขียนภาษาอังกฤษ</td>
					<td class="3">
						<input type="radio"><label>ไม่ได้</label>
						<input type="radio"><label>พอได้</label>
						<input type="radio"><label>ดี</label>
						<input type="radio"><label>ดีเยี่ยม</label>
					</td>
				</tr>
				<tr>
					<td class="label">การพูดภาษาอังกฤษ</td>
					<td class="3">
						<input type="radio"><label>ไม่ได้</label>
						<input type="radio"><label>พอได้</label>
						<input type="radio"><label>ดี</label>
						<input type="radio"><label>ดีเยี่ยม</label>
					</td>
				</tr>
			</table>
		</div>
		<div class="form-section">ตำแหน่งงานที่ท่านต้องการสมัคร</div>
		<div class="form-box">
			<table class="career-tb">
				<tr>
					<td class="label">ตำแหน่งงาน</td>
					<td><select><option>อื่นๆ</option></select></td>
				</tr>
				<tr>
					<td class="label">เงินเดือนที่ต้องการ</td>
					<td><input type="text" class="minWidth"> บาท</td>
				</tr>
			</table>
		</div>
		<div class="form-section">เอกสารแนบ (ถ้ามี)</div>
		<div class="form-box">
			<table class="career-tb">
				<tr>
					<td class="label">ไฟล์รูปถ่าย</td>
					<td><input type="file"></td>
				</tr>
				<tr>
					<td class="label">ไฟล์ Resume</td>
					<td><input type="file"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center;"><input type="submit" placeholder="สมัคร"><input type="submit" placeholder="ยกเลิก"></td>
				</tr>
			</table>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
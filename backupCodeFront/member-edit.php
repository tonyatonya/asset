<?php 
	@require_once('backoffice/init.php'); 
	if($_SESSION["ID"] == ""){
		alert('กรูณาสมัครสมาชิก ค่ะ');
	} else {
	$user 	= $db->record(DB_PREFIX.'user','id_user='.$_SESSION["ID"]);
		$email			=$user->email;
		$title			=$user->title;
		$ref_title		=$user->ref_title;
		$fname			=$user->fname;
		$lname			=$user->lname;
		$ref_doc_id		=$user->ref_doc_id;
		$birthday		=$user->birthday;
		$nationality	=$user->nationality	;
		$status			=$user->status;
		$address		=$user->address;
		$city			=$user->city;
		$district		=$user->district;
		$town			=$user->town;
		$post_code		=$user->post_code;
		$phone			=$user->phone;
		$telephone		=$user->telephone;
		$fax			=$user->fax;
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
				<li><a href="#">แก้ไขข้อมูลสมาชิก</a></li>
			</ul>
		</div>
		<hr>
		<div class="formsection">
			<div class="title">ข้อมูลส่วนตัว</div>
			<form method="post" id="form1" action="?Mode=edit_user">
			<table class="tb-member">
				<tr>
					<td>ชื่ออีเมล์</td>
					<td><input type="text" class="maxWidth" value="<?=$email?>"  id="txtemail"></td>
				</tr>
				<tr>
					<td>คำนำหน้าชื่อ</td>
					<td>
						<input type="radio" name="title" id="txttitle" value="นาย" <? if($title=="นาย"){ echo "checked"; }?>><label>นาย</label>
						<input type="radio" name="title" id="txttitle" value="นางสาว" <? if($title=="นางสาว"){ echo "checked"; }?>><label>นางสาว</label>
						<input type="radio" name="title" id="txttitle" value="นาง" <? if($title=="นาง"){ echo "checked"; }?>><label>นาง</label>
						<input type="radio" name="title" id="txttitle"><label>อื่นๆ</label><input type="text" style="width:80px;" value="<?=$ref_title?>">
					</td>
				</tr>
				<tr>
					<td>ชื่อ</td>
					<td><input type="text" class="maxWidth" name="fname" id="txtfname" value="<?=$fname?>"></td>
				</tr>
				<tr>
					<td>นามสกุล</td>
					<td><input type="text" class="maxWidth" name="lname" id="txtlname" value="<?=$lname?>"></td>
				</tr>
				<tr>
					<td>เอกสารอ้างอิง</td>
					<td>
						<select name="ref_doc">
							<option value="เลขประจำตัวประชาขน" <? if($ref_doc=="เลขประจำตัวประชาขน"){ echo "checked"; }?>>เลขประจำตัวประชาขน</option>
							<option value="เลขที่หนังสือเดินทาง" <? if($ref_doc=="เลขที่หนังสือเดินทาง"){ echo "checked"; }?>>เลขที่หนังสือเดินทาง</option>
						</select>
						
						<label>เลขที่</label><input type="text" class="halfWidth" name="ref_doc_id" id="txtref_doc_id" value="<?=$ref_doc_id?>"> 
					</td>
				</tr>
				<tr>
					<td>วันเดือนปีเกิด</td>
					<td><input type="date" class="maxWidth" name="birthday" id="txtbirthday" value="<?=$birthday?>"></td>
				</tr>
				<tr>
					<td>สัญชาติ</td>
					<td><input type="text" class="maxWidth" name="nationality" id="txtnationality" value="<?=$nationality?>"></td>
				</tr>
				<tr>
					<td>สถานภาพการสมรส</td>
					<td>
						<input type="radio" name="status"  id="txtstatus" value="โสด" <? if($status=="โสด"){ echo "checked"; }?>><label>โสด</label>
						<input type="radio" name="status"  id="txtstatus" value="สมรส" <? if($status=="สมรส"){ echo "checked"; }?>><label>สมรส</label>
						<input type="radio" name="status"  id="txtstatus" value="ไม่ระบุ" <? if($status=="ไม่ระบุ"){ echo "checked"; }?>><label>ไม่ระบุ</label>
					</td>
				</tr>
			</table>
			<div class="title">สถานที่ติดต่อ (ที่สามารถติดต่อได้)</div>
			<table class="tb-member">
				<tr>
					<td>ที่อยู่</td>
					<td><input type="text" class="maxWidth" name="address" id="txtaddress" value="<?=$address?>"></td>
				</tr>
				<tr>
					<td>แขวง/ตำบล</td>
					<td><input type="text" class="maxWidth" name="district" name="txtdistrict" value="<?=$district?>"></td>
				</tr>
				<tr>
					<td>เขต/อำเภอ</td>
					<td><input type="text" class="maxWidth" name="city" id="txtcity" value="<?=$city?>"></td>
				</tr>
				<tr>
					<td>จังหวัด</td>
					<td>
						<select name="town" class="halfWidth">
								<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
								<option value="กระบี่">กระบี่ </option>
								<option value="กาญจนบุรี">กาญจนบุรี </option>
								<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
								<option value="กำแพงเพชร">กำแพงเพชร </option>
								<option value="ขอนแก่น">ขอนแก่น</option>
								<option value="จันทบุรี">จันทบุรี</option>
								<option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
								<option value="ชัยนาท">ชัยนาท </option>
								<option value="ชัยภูมิ">ชัยภูมิ </option>
								<option value="ชุมพร">ชุมพร </option>
								<option value="ชลบุรี">ชลบุรี </option>
								<option value="เชียงใหม่">เชียงใหม่ </option>
								<option value="เชียงราย">เชียงราย </option>
								<option value="ตรัง">ตรัง </option>
								<option value="ตราด">ตราด </option>
								<option value="ตาก">ตาก </option>
								<option value="นครนายก">นครนายก </option>
								<option value="นครปฐม">นครปฐม </option>
								<option value="นครพนม">นครพนม </option>
								<option value="นครราชสีมา">นครราชสีมา </option>
								<option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
								<option value="นครสวรรค์">นครสวรรค์ </option>
								<option value="นราธิวาส">นราธิวาส </option>
								<option value="น่าน">น่าน </option>
								<option value="นนทบุรี">นนทบุรี </option>
								<option value="บึงกาฬ">บึงกาฬ</option>
								<option value="บุรีรัมย์">บุรีรัมย์</option>
								<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
								<option value="ปทุมธานี">ปทุมธานี </option>
								<option value="ปราจีนบุรี">ปราจีนบุรี </option>
								<option value="ปัตตานี">ปัตตานี </option>
								<option value="พะเยา">พะเยา </option>
								<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
								<option value="พังงา">พังงา </option>
								<option value="พิจิตร">พิจิตร </option>
								<option value="พิษณุโลก">พิษณุโลก </option>
								<option value="เพชรบุรี">เพชรบุรี </option>
								<option value="เพชรบูรณ์">เพชรบูรณ์ </option>
								<option value="แพร่">แพร่ </option>
								<option value="พัทลุง">พัทลุง </option>
								<option value="ภูเก็ต">ภูเก็ต </option>
								<option value="มหาสารคาม">มหาสารคาม </option>
								<option value="มุกดาหาร">มุกดาหาร </option>
								<option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
								<option value="ยโสธร">ยโสธร </option>
								<option value="ยะลา">ยะลา </option>
								<option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
								<option value="ระนอง">ระนอง </option>
								<option value="ระยอง">ระยอง </option>
								<option value="ราชบุรี">ราชบุรี</option>
								<option value="ลพบุรี">ลพบุรี </option>
								<option value="ลำปาง">ลำปาง </option>
								<option value="ลำพูน">ลำพูน </option>
								<option value="เลย">เลย </option>
								<option value="ศรีสะเกษ">ศรีสะเกษ</option>
								<option value="สกลนคร">สกลนคร</option>
								<option value="สงขลา">สงขลา </option>
								<option value="สมุทรสาคร">สมุทรสาคร </option>
								<option value="สมุทรปราการ">สมุทรปราการ </option>
								<option value="สมุทรสงคราม">สมุทรสงคราม </option>
								<option value="สระแก้ว">สระแก้ว </option>
								<option value="สระบุรี">สระบุรี </option>
								<option value="สิงห์บุรี">สิงห์บุรี </option>
								<option value="สุโขทัย">สุโขทัย </option>
								<option value="สุพรรณบุรี">สุพรรณบุรี </option>
								<option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
								<option value="สุรินทร์">สุรินทร์ </option>
								<option value="สตูล">สตูล </option>
								<option value="หนองคาย">หนองคาย </option>
								<option value="หนองบัวลำภู">หนองบัวลำภู </option>
								<option value="อำนาจเจริญ">อำนาจเจริญ </option>
								<option value="อุดรธานี">อุดรธานี </option>
								<option value="อุตรดิตถ์">อุตรดิตถ์ </option>
								<option value="อุทัยธานี">อุทัยธานี </option>
								<option value="อุบลราชธานี">อุบลราชธานี</option>
								<option value="อ่างทอง">อ่างทอง </option>
								<option value="อื่นๆ">อื่นๆ</option>
						</select>
						<label>รหัสไปรษณีย์</label><input type="text" class="halfWidth" name="post_code" id="txtpost_code" value="<?=$post_code?>">
					</td>
				</tr>
				<tr>
					<td>โทรศัพท์</td>
					<td><input type="text" class="halfWidth" name="phone" id="txtphone" value="<?=$phone?>"></td>
				</tr>
				<tr>
					<td>โทรศัพท์มือถือ</td>
					<td><input type="text" class="halfWidth" name="telephone" id="txttelephone" value="<?=$telephone?>"></td>
				</tr>
				<tr>
					<td>โทรสาร</td>
					<td><input type="text" class="halfWidth" name="fax" id="txtfax" value="<?=$fax?>"></td>
				</tr>
			</table>
			<div class="remark">
				 <span>หมายเหตุ : </span> หากมีการกรอกข้อมูลครบถ้วนจะสะดวกในการซื้อประกันภัยในครั้งถัดไป
			</div>
			<div class="btn-holder">
				<input  type="submit" value="ยกเลิกการแก้ไข">
				<input name="btnSubmit"  id="btnSubmit" type="submit" value="ยืนยันการแก้ไข">
			</div>
			</form>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
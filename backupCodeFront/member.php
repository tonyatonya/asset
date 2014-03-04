<?php 
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
?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?>
	<script type="text/javascript" src="script/jquery-2.0.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		$("#txtpost_code").keyup(function (){
			$("#errorPost_code").hide();
				var inputNum = $(this).val();
				var numericReeg = /^([0-9]+)$/;
					if(!numericReeg.test(inputNum)){
						$("#errorPost_code").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
						return false;
					}
				});
				
		$("#txtphone").keyup(function (){
					$("#errorPhone").hide();
						var inputNum = $(this).val();
						var numericReeg = /^([0-9]+)$/;

						if(!numericReeg.test(inputNum)){
							$("#errorPhone").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
							return false;
						}
				});
				
				$("#txttelephone").keyup(function (){
					$("#errorTelephone").hide();
						var inputNum = $(this).val();
						var numericReeg = /^([0-9]+)$/;

						if(!numericReeg.test(inputNum)){
							$("#errorTelephone").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
							return false;
						}
				});
				
				$("#txtfax").keyup(function (){
					$("#errorFax").hide();
						var inputNum = $(this).val();
						var numericReeg = /^([0-9]+)$/;

						if(!numericReeg.test(inputNum)){
							$("#errorFax").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
							return false;
						}
				});		
		$(".error").hide();
		$("#btnSubmit").click(function (e) {
				var tEmail 	=$("#txtemail").val();
			 	var tpassword 	=$("#txtpassword").val();
				var tcpassword =$("#txtcpassword").val();
				var ttitle 	=$("#txttitle").val();
				var tfname 	=$("#txtfname").val();
				var tlname 	=$("#txtlname").val();
				var tref_doc_id =$("#txtref_doc_id").val();
				var tbirthday 	=$("#txtbirthday").val();
				var tnationality =$("#txtnationality").val();
				var tstatus		=$("#txtstatus").val();
				var taddress 	=$("#txtaddress").val();
				var tdistrict	=$("#txtdistrict").val();
				var tcity 		=$("#txtcity").val();
				var tpost_code =$("#txtpost_code").val();
				var tphone 	=$("#txtphone").val();
				var ttelephone =$("#txttelephone").val();
				var tfax =$("#txtfax").val();
			 
				if (tEmail == "") {
					$("#errorEmail").show();
					e.preventDefault();
				} else {
					$("#errorEmail").hide();
				}

				if (tpassword == "") {
					$("#errorPassword").show();
					e.preventDefault();
				} else {
					$("#errorPassword").hide();
				}
				
				if (tcpassword == "") {
					$("#errorCpassword").show();
					e.preventDefault();
				} else {
					$("#errorCpassword").hide();
				}
				
				if (tpassword == "") {
					$("#errorPassword").show();
					e.preventDefault();
				} else if (tcpassword == ""){
					$("#errorCpassword").show();
					e.preventDefault();
				} else if (tpassword != tcpassword){
					$("#errorPwd").html("คุณป้อน Password ไม่ตรงกัน ค่ะ").show();
					$("#txtcpassword").attr("value","").focus();
					e.preventDefault();
				} else {
					$(".error").hide();
				}
				
				if (ttitle == "") {
					$("#errorTitle").show();
					e.preventDefault();
				} else {
					$("#errorTitle").hide();
				}
				
				if (tfname == "") {
					$("#errorFname").show();
					e.preventDefault();
				} else {
					$("#errorFname").hide();
				}
				
				if (tlname == "") {
					$("#errorLname").show();
					e.preventDefault();
				} else {
					$("#errorLname").hide();
				}
				
				if (tref_doc_id == "") {
					$("#errorRef_doc_id").show();
					e.preventDefault();
				} else {
					$("#errorRef_doc_id").hide();
				}
				
				if (tbirthday == "") {
					$("#errorBirthday").show();
					e.preventDefault();
				} else {
					$("#errorBirthday").hide();
				}
				
				if (tnationality == "") {
					$("#errorNationality").show();
					e.preventDefault();
				} else {
					$("#errorNationality").hide();
				}
				
				if (tstatus == "") {
					$("#errorStatus").show();
					e.preventDefault();
				} else {
					$("#errorStatus").hide();
				}
				
				if (taddress == "") {
					$("#errorAddress").show();
					e.preventDefault();
				} else {
					$("#errorAddress").hide();
				}
				
				if (tdistrict == "") {
					$("#errorDistrict").show();
					e.preventDefault();
				} else {
					$("#errorDistrict").hide();
				}
				
				if (tcity == "") {
					$("#errorCity").show();
					e.preventDefault();
				} else {
					$("#errorCity").hide();
				}
				
				if (tpost_code == "") {
					$("#errorPost_code").show();
					e.preventDefault();
				} else {
					$("#errorPost_code").hide();
				}
				
				if (tphone == "") {
					$("#errorPhone").show();
					e.preventDefault();
				} else {
					$("#errorPhone").hide();
				}
				
				if (ttelephone == "") {
					$("#errorTelephone").show();
					e.preventDefault();
				} else {
					$("#errorTelephone").hide();
				}
				
				if (tfax == "") {
					$("#errorFax").show();
					e.preventDefault();
				} else {
					$("#errorFax").hide();
				}

				$("#txtref_doc_id").keyup(function (){
					$("#errorRef_doc_id").hide();
						var inputNum = $(this).val();
						var numericReeg = /^([0-9]+)$/;

						if(!numericReeg.test(inputNum)){
							$("#errorRef_doc_id").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
							return false;
						}
				});
				
				
				
				$("#txtphone").keyup(function (){
					$("#errorPhone").hide();
						var inputNum = $(this).val();
						var numericReeg = /^([0-9]+)$/;

						if(!numericReeg.test(inputNum)){
							$("#errorPhone").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
							return false;
						}
				});
				
				$("#txttelephone").keyup(function (){
					$("#errorTelephone").hide();
						var inputNum = $(this).val();
						var numericReeg = /^([0-9]+)$/;

						if(!numericReeg.test(inputNum)){
							$("#errorTelephone").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
							return false;
						}
				});
				
				$("#txtfax").keyup(function (){
					$("#errorFax").hide();
						var inputNum = $(this).val();
						var numericReeg = /^([0-9]+)$/;

						if(!numericReeg.test(inputNum)){
							$("#errorFax").html("กรุณาป้อนรหัสให้เป็นตัวเลขเท่านั้น ค่ะ").show().fadeIn(2000);
							return false;
						}
				});
			});
		});
	</script>
<style type="text/css">
.error {
	color: #FF0000;
	padding-left: 5px;
	font-size: 14px;
}
</style>
</head>
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
				<li><a href="#">สมัครสมาชิก</a></li>
			</ul>
		</div>
		<hr>
		<div class="member-lead">
		<h2>แบบฟอร์มการลงทะเบียนเป็นสมาชิก</h2>
		<p>
			ท่านสามารถกรอกรายละเอียดลงทะเบียนเป็นสมาชิก เพื่อรับโปรโมชั่น และสิทธิพิเศษต่างๆ เมื่อซื้อประกันภัยกับเรา โดยไม่มีค่าใช้จ่ายในการสมัคร
		</p>
		<h3>
			กรุณากรอกข้อมูลของท่านคามความเป็นจริงลงในแบบฟอร์มด้านล่าง<br>
			<span>(ส่วนล่างของแบบฟอร์มที่มีเครื่องหมาย "*" หมายถึงข้อมูลสำคัญที่ท่านต้องกรอก)</span>
		</h3>
		</div>
		<hr>
		<div class="formsection">
			<form method="post" id="form1" action="?Mode=user"><!--?Mode=user-->
				<div class="title">ข้อมูลส่วนตัว</div>
				<table class="tb-member">
					<tr>
						<td>ชื่ออีเมล์</td>
						<td><input type="text" class="maxWidth" name="email" id="txtemail"><span id="errorEmail" class="error">กรุณาป้อน Email ค่ะ</span></td>
					</tr>
					<tr>
						<td>รหัสผ่านที่ต้องการ</td>
						<td><input type="text" class="maxWidth" name="password" id="txtpassword"><span id="errorPassword" class="error">กรุณาป้อน Password ค่ะ</span></td>
					</tr>
					<tr>
						<td>ยืนยันรหัสผ่าน</td>
						<td><input type="text" class="maxWidth" name="cpassword" id="txtcpassword"><span id="errorCpassword" class="error">กรุณาป้อน ยืนยัน Password ค่ะ</span></td>
						
					</tr>
					<tr>
						<td>คำนำหน้าชื่อ</td>
						<td><div id="errorPwd" class="error"></div>
							<input type="radio" name="title" id="txttitle" value="นาย"><label>นาย</label>
							<input type="radio" name="title" id="txttitle" value="นางสาว"><label>นางสาว</label>
							<input type="radio" name="title" id="txttitle" value="นาง"><label>นาง</label>
							<input type="radio" name="title" id="txttitle" value="อื่นๆ"><label>อื่นๆ</label><input type="text" name="ref_title"style="width:80px;">
						<span id="errorTitle" class="error">กรุณาป้อน คำนำหน้าชื่อ ค่ะ</span></td>
					</tr>
					<tr>
						<td>ชื่อ</td>
						<td><input type="text" class="maxWidth" name="fname" id="txtfname"><span id="errorFname" class="error">กรุณาป้อน ชื่อ ค่ะ</span></td>
					</tr>
					<tr>
						<td>นามสกุล</td>
						<td><input type="text" class="maxWidth" name="lname" id="txtlname"><span id="errorLname" class="error">กรุณาป้อน นามสกุล ค่ะ</span></td>
					</tr>
					<tr>
						<td>เอกสารอ้างอิง</td>
						<td>
							<select name="ref_doc">
								<option value="เลขประจำตัวประชาชน">เลขประจำตัวประชาชน</option>
								<option value="เลขที่หนังสือเดินทาง">เลขที่หนังสือเดินทาง</option>
							</select>
							
							<label>เลขที่</label><input type="text" class="halfWidth" name="ref_doc_id" id="txtref_doc_id"><span id="errorRef_doc_id" class="error">กรุณาป้อน เลขเที่ ค่ะ</span>
						</td>
					</tr>
					<tr>
						<td>วันเดือนปีเกิด</td>
						<td><input type="date" class="maxWidth" name="birthday" id="txtbirthday"><span id="errorBirthday" class="error">กรุณาป้อน วัน / เดือน / ปี ค่ะ</span></td>
					</tr>
					<tr>
						<td>สัญชาติ</td>
						<td><input type="text" class="maxWidth" name="nationality" id="txtnationality"><span id="errorNationality" class="error">กรุณาป้อน สัญชาติ ค่ะ</span></td>
					</tr>
					<tr>
						<td>สถานภาพการสมรส</td>
						<td>
							<input type="radio" name="status"  id="txtstatus" value="โสด"><label>โสด</label>
							<input type="radio" name="status"  id="txtstatus" value="สมรส"><label>สมรส</label>
							<input type="radio" name="status"  id="txtstatus" value="ไม่ระบุ"><label>ไม่ระบุ</label>
						<span id="errorStatus" class="error">กรุณาเลือก สถานภาพการสมรส ค่ะ</span></td>
					</tr>
				</table>
				<div class="title">สถานที่ติดต่อ (ที่สามารถติดต่อได้)</div>
				<table class="tb-member">
					<tr>
						<td>ที่อยู่</td>
						<td><input type="text" class="maxWidth" name="address" id="txtaddress"><span id="errorAddress" class="error">กรุณาป้อน Address ค่ะ</span></td>
					</tr>
					<tr>
						<td>แขวง/ตำบล</td>
						<td><input type="text" class="maxWidth" name="district" name="txtdistrict"><span id="errorDistrict" class="error">กรุณาป้อน แขวง/ตำบล ค่ะ</span></td>
					</tr>
					<tr>
						<td>เขต/อำเภอ</td>
						<td><input type="text" class="maxWidth" name="city" id="txtcity"><span id="errorCity" class="error">กรุณาป้อน เขต/อำเภอ ค่ะ</span></td>
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
							<label>รหัสไปรษณีย์</label><input type="text" class="halfWidth" name="post_code" id="txtpost_code"><span id="errorPost_code" class="error">กรุณาป้อน รหัสไปรษณีย์ ค่ะ</span>
						</td>
					</tr>
					<tr>
						<td>โทรศัพท์</td>
						<td><input type="text" class="halfWidth" name="phone" id="txtphone"><span id="errorPhone" class="error">กรุณาป้อน โทรศัพท์ ค่ะ</span></td>
					</tr>
					<tr>
						<td>โทรศัพท์มือถือ</td>
						<td><input type="text" class="halfWidth" name="telephone" id="txttelephone"><span id="errorTelephone" class="error">กรุณาป้อน โทรศัพท์มือถือ ค่ะ</span></td>
					</tr>
					<tr>
						<td>โทรสาร</td>
						<td><input type="text" class="halfWidth" name="fax" id="txtfax"><span id="errorFax" class="error">กรุณาป้อน โทรสาร ค่ะ</span></td>
					</tr>
				</table>
				<div class="remark">
					 <span>หมายเหตุ : </span> หากมีการกรอกข้อมูลครบถ้วนจะสะดวกในการซื้อประกันภัยในครั้งถัดไป
				</div>
				<div class="btn-holder">
					<!--<input  type="submit" value="ยกเลิก">-->
					
					<input name="btnSubmit"  id="btnSubmit" type="submit" value="ยืนยันการสมัคร">
				</div>
			</form>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
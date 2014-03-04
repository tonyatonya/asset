<?php 
	require_once('backoffice/init.php');
	require_once('includes/class.phpmailer.php');
	
	
	print_r ($_FILES['picture']['name']);


	
	
	/*$subject			='สมัครงานออนไลน์';
	$br					="\r\n";
	$txtname			=$_POST['txtname'];
	$txt_id_card		=$_POST['txt_id_card'];
	$txtage				=$_POST['txtage'];
	$txtsex				=$_POST['txtsex'];
	$txtnationality_1	=$_POST['txtnationality_1'];
	$txtnationality_2	=$_POST['txtnationality_2'];
	$txttel				=$_POST['txttel'];
	$txtemail			=$_POST['txtemail'];
	$txtaddress			=$_POST['txtaddress'];
	$txtlevel			=$_POST['txtlevel'];
	$txtbranch			=$_POST['txtbranch'];
	$txtuniversity		=$_POST['txtuniversity'];
	$txtgraduate		=$_POST['txtgraduate'];
	$txtgrade			=$_POST['txtgrade'];
	$txtexperience		=$_POST['txtexperience'];
	$txtdetail_myself	=$_POST['txtdetail_myself'];
	$txtlicence			=$_POST['txtlicence'];
	$txtmy_car			=$_POST['txtmy_car'];
	$txttype_th			=$_POST['txttype_th'];
	$txttype_en			=$_POST['txttype_en'];
	$txtread			=$_POST['txtread'];
	$txtwrith			=$_POST['txtwrith'];
	$txtspeak			=$_POST['txtspeak'];
	$txtoffice			=$_POST['txtoffice'];
	$txtsaraly			=$_POST['txtsaraly'];*/

		//$mail = new PHPMailer(); // สร้าง object class ครับ
	//$mail->CharSet = "utf-8";
      //$mail->IsSMTP(); // กำหนดว่าเป็น SMTP นะ
      //$mail->Host = 'ssl://smtp.gmail.com'; // กำหนดค่าเป็นที่ gmail ได้เลยครับ
      //$mail->Port = 465; // กำหนด port เป็น 465 ตามที่ google บอกครับ
      //$mail->SMTPAuth = true; // กำหนดให้มีการตรวจสอบสิทธิ์การใช้งาน
      //$mail->Username = 'nattapon@orange-thailand.com'; // ต้องมีเมล์ของ gmail ที่สมัครไว้ด้วยนะครับ
      //$mail->Password = 'aaaa1111'; // ใส่ password ที่เราจะใช้เข้าไปเช็คเมล์ที่ gmail ล่ะครับ
		//  $mail->AddAttachment('Mypdf/MyPDF.pdf');   
		//$mail->AddAttachment($_FILES['picture']['name']);
		//$mail->From = $txtemail; // ใครเป็นผู้ส่ง
		//$mail->FromName = $txtname; // ชื่อผู้ส่งสักนิดครับ
		//$mail->Subject  = $subject.'ตำแหน่ง ( '.$_POST['txtoffice'].' ) จากคุณ ( '.$_POST['txtname'].' )'; // กำหนด subject ครับ
		//$mail->Body     =  'ข้อมูลทั่วไป'.$br.
			/*'ชื่อนามสกุล : '.$txtname.$br.
			'เลขที่บัตรประชาชน : '.$txt_id_card.$br.
			'อายุ : '.$txtage.'   '.'เพศ : '.$txtsex.$br.
			'สัญชาติ : '.$txtage.'   '.'เชื้อชาติ : '.$txtsex.$br.
			'โทรศัพท์ : '.$txttel.$br.
			'อีเมล์ : '.$txtemail.$br.
			'ที่อยู่ : '.$br.
			$txtaddress.$br.$br.
			
			'ข้อมูลการศึกษา'.$br.
			'ระดับการศึกษาสูงสุด : '.$txtlevel.$br.
			'คณะ / สาขา : '.$txtbranch.$br.
			'ปี พ.ศ. ที่จบการศึษา : '.$txtgraduate.$br.
			'เกรดเฉลี่ย : '.$txtgrade.$br.$br.
			
			'ประสบการณ์การทำงาน'.$br.
			'อายุงาน : '.$txtexperience.' ปี'.$br.
			'กรุณาอธิบายลักษณะของงาน, ความเชี่ยวชาญ, และความสามารถพิเศษของท่านโดยสังเขป'.$br.
			$txtdetail_myself.$br.$br.
			
			'ข้อมูลอื่นๆ'.$br.
			'ใบอนุญาตขับขี่ : '.$txtlicence.$br.
			'ยานพาหนะส่วนตัว : '.$txtmy_car.$br.
			'พิมพ์ดีดไทย : '.$txttype_th.' คำ / นาที'.$br.
			'พิมพ์ดีดอังกฤษ : '.$txttype_en.' คำ / นาที'.$br.
			'การอ่านภาษาอังกฤษ : '.$txtread.$br.
			'การเขียนภาษาอังกฤษ : '.$txtwrith.$br.
			'การพูดภาษาอังกฤษ : '.$txtspeak.$br.$br.
			
			'ตำแหน่งงานที่ท่านต้องการสมัคร'.$br.
			'ตำแหน่งงาน : '.$txtoffice.$br.
			'เงินเดือนที่ต้องการ :'.$txtsaraly.' บาท'.$br.$br;*/

		//$mail->AddAddress('nattapon@orange-thailand.com'); // ส่งไปที่ใครดีครับ
		/*if(!$mail->Send()) {
			alert ('Message sent Fail!');
		} else {
			alert ('Message sent succeed');
		}*/
  
	//redirect('index.php');

?>
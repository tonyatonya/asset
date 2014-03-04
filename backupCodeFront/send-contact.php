<?php
	@require_once('backoffice/init.php');
	@require_once('includes/class.phpmailer.php');
	
	
	$err = array();
	if(!required($_POST['name']))			$err[] = 'กรุณาระบุชื่อผู้ใช้ค่ะ';
	if(!required($_POST['telephone']))				$err[] = 'กรุณาระบุเบอร์โทรติดต่อค่ะ';
	if(!required($_POST['comment']))			$err[] = 'กรุณาระบุข้อความค่ะ';
	if(!validEmail($_POST['email']))			$err[] = 'กรุณาระบุอีเมล์ให้ถูกต้องค่ะ';		
	if(count($err) > 0) {  
		alert($err);  
		redirect('index.php');
	}
	
	
	$br					= "\r\n";
	$subject 			= "ติดต่อสอบถาม ";
	$name				=$_POST['name'];
	$email				=$_POST['email'];
	$telephone			=$_POST['telephone'];
	$comment			=$_POST['comment'];
	$mailadmin			= 'nattapon@orange-thailand.com';
		
	$mail = new PHPMailer(); // สร้าง object class ครับ
 $mail->CharSet = "utf-8";
      $mail->IsSMTP(); // กำหนดว่าเป็น SMTP นะ
      $mail->Host = 'ssl://smtp.gmail.com'; // กำหนดค่าเป็นที่ gmail ได้เลยครับ
      $mail->Port = 465; // กำหนด port เป็น 465 ตามที่ google บอกครับ
      $mail->SMTPAuth = true; // กำหนดให้มีการตรวจสอบสิทธิ์การใช้งาน
      $mail->Username = 'nattapon@orange-thailand.com'; // ต้องมีเมล์ของ gmail ที่สมัครไว้ด้วยนะครับ
      $mail->Password = 'aaaa1111'; // ใส่ password ที่เราจะใช้เข้าไปเช็คเมล์ที่ gmail ล่ะครับ
	//  $mail->AddAttachment('Mypdf/MyPDF.pdf');   
      $mail->From = $email; // ใครเป็นผู้ส่ง
      $mail->FromName = $name; // ชื่อผู้ส่งสักนิดครับ
      $mail->Subject  = $subject.'จากคุณ ( '.$_POST['name'].' )'; // กำหนด subject ครับ
      $mail->Body     = 
		'ชื่อ นามสกุล : '.$name.$br.
		'อีเมล์ : '.$email.$br.
		'เบอร์โทรติดต่อ : '.$telephone.$br.
		'ข้อความ : '.$br.$comment.$br;
	  $mail->AddAddress('nattapon@orange-thailand.com'); // ส่งไปที่ใครดีครับ

  if(!$mail->Send()) {
		alert ("Message Don't sent!");
	} else {
	   alert ("Message sent!");
	}
 	redirect('index.php');
?>
<?php
	@require_once('backoffice/init.php');
		$emaill	= $_POST['lost-email'];
		$data=array(
			'password' 	=> (sha1('123456'))
		);
	$result = $db->result(DB_PREFIX.'user',array('email' => $emaill));

	if($result <= 0){
		
		alert ("ไม่มีในระบบ");
	} else {
		$db->update(DB_PREFIX.'user',$data, array('email'=> $_POST['lost-email']));
		$to      = $emaill;
		$subject = 'Asset แจ้งรหัสผ่าน ค่ะ';
		$message = 'รหัสผ่านของคุณคือ : 123456';
		$headers = 'From: nattapon@orange-thailand.com' . "\r\n" .
		'Reply-To: Admin' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	
		if(mail($to, $subject, $message, $headers)){
			alert('ส่งแล้ว');
		} else {
			alert('การส่งผิดพลาด');
		}
	}

	redirect('member-lostpassword.php');
	
?>
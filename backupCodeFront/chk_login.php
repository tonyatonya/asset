<?php
	@require_once('backoffice/init.php');

	$where_login = array(
			'email'=>$_POST["email"],
			'password'=>sha1($_POST["password"])
		);
	
	$rs_login = $db->record(DB_PREFIX.'user',$where_login);
		if($rs_login){
				//$db->update(DB_PREFIX.'user',array('id_user' => $rs_login->id_user));	
				$_SESSION['ID']			= $rs_login->id_user;
				$_SESSION['EMAIL']		= $rs_login->email;
				redirect('index.php');
		} else {
			alert('Email หรือ password ไม่ถูกต้องค่ะ');
			redirect('index.php');
		}
?>
<?php
	@require_once('backoffice/init.php');

	$data = array(
			'email' 		=> $_POST['email'],
			'password' 		=> $_POST['password'],
			'title' 		=> $_POST['title'],
			'ref_title' 	=> $_POST['ref_title'],
			'fname' 		=> $_POST['fname'],
			'lname' 		=> $_POST['lname'],
			'ref_doc' 		=> $_POST['ref_doc'],
			'ref_doc_id' 	=> $_POST['ref_doc_id'],
			'birthday' 		=> $_POST['birthday'],
			'nationality' 	=> $_POST['nationality'],
			'status' 		=> $_POST['status'],
			'address' 		=> $_POST['address'],
			'district' 		=> $_POST['district'],
			'city' 			=> $_POST['city'],
			'town' 			=> $_POST['town'],
			'post_code' 	=> $_POST['post_code'],
			'phone' 		=> $_POST['phone'],
			'telephone' 	=> $_POST['telephone'],
			'fax' 			=> $_POST['fax']
		);
		
		if( !empty($_POST['email']) && !empty($_POST['password']) ) $data['password'] = substr(sha1($_POST['email'].$_POST['password']), 0, 30);
		
		if(empty($_POST['id_user'])){
			$this->db->insert(DB_PREFIX.'user', $data);
			alert('Insert to complete!');
		}else{
			$this->db->update(DB_PREFIX.'user', $data, array('id_user' => $_POST['id_user']));
			alert('Update to complete!');
		}
		
		redirect('index.php');
?>
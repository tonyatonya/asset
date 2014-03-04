<?php
	//require 'init.php';
	if( !empty($_REQUEST["Mode"]) ){
		require 'backoffice/backoffice/user/ck.class.php';
		@require_once 'backoffice/init.php';
			$obj = new cCompile($db);
		if( method_exists($obj,$_REQUEST["Mode"]) ){
			$obj->$_REQUEST["Mode"]();
			}else{
				alert('ไม่พบ Method!');
				backpage();
			}
		exit;
	}
	
	if(empty($_title)) 			$_title ='';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';
	
	@require_once 'backoffice/init.php';
	$row_menu 		= $db->result(DB_PREFIX.'insurance');
	$row_menu_en 	= $db->result(DB_PREFIX.'insurance');

?>
	<title><?php echo $_title;?></title>
	<meta name="keywords" content="<?php echo $_keywords;?>" />
	<meta name="description" content="<?php echo $_description;?>" />
	<meta name="robot" content="noindex, nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
	<link type="text/css" rel="stylesheet" href="css/reset.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/dark-hive/jquery-ui-1.8.18.custom.css" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/sliderkit-core.css" media="screen, projection" />
	<link type="text/css" rel="stylesheet" href="css/layout.css" media="screen,projection"/>

	<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
	<link type="image/ico" rel="shortcut icon" href="images/favicon.ico">
	
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/lightbox-2.6.min.js"></script>
	<link href="css/lightbox.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>
	<?php require('inc_mainmenu.php') ?>
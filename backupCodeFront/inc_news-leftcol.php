<?php
	@require_once('backoffice/init.php');
	$row_cnews 	= $db->result(DB_PREFIX.'cate_news');
?>
<div class="category-menu">
	<div class="title"><h2>ข่าวสารและกิจกรรม</h2></div>
	<ul>
	<?php if($row_cnews){
		foreach($row_cnews as $rs_cnew){
			$rs_cnew->category;
			
			if($_SESSION["lang"]== "th"){
				$lang_category=$_SESSION["lang"]."_category";			
			} else if($_SESSION["lang"]== "en"){
				$lang_category=$_SESSION["lang"]."_category";
			}
				$rs_ins_con->$lang_category;
			
			
			echo '<li><a href="news.php?id='.$rs_cnew->id_cnews.'"><div class="ico"><img src="images/ico/assetIcon10.png" alt="exampleicon" width="46" height="46" /></div><div>'.$rs_cnew->$lang_category.'</div></a></li>';
		}
	}
	?>
	</ul>
</div>
<?php require('inc_calculatebanner.php'); ?>
<div class="left-banner">
			<a href="#">
				<img src="images/ebookbanner.jpg" alt="ebookbanner" width="299" height="110">
			</a>
		</div>
<div class="service-box">
			<!--<div class="service-title">ลิงค์หน่วยงานต่างๆ</div>--><?php require('inc_linkbanner.php'); ?>
			<div class="service-body">
				 
			</div>
		</div>
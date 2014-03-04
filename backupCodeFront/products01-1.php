<?php 
	@require_once('backoffice/init.php'); 
	$ins_p = $db->result(DB_PREFIX.'insurance','id_insurance='.$_GET['id']);
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
		<?php require('inc_product-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ผลิตภัณฑ์และบริการ</a></li>
				<li><a href="#">ประกันภัยรถยนต์ประเภท 1 พิเศษ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
		<?php 
				if($ins_p){
					foreach($ins_p as $rs_ins){
						$ins_img = $rs_ins->ins_img ;
						$rs_ins->th_menu;
						$rs_ins->en_menu;
						$rs_ins->th_detail;
						$rs_ins->en_detail;
						$rs_ins->th_condition_type;
						$rs_ins->en_condition_type;
						
						if($_SESSION["lang"]== "th"){
							$lang_menu=$_SESSION["lang"]."_menu";			
							$lang_detail=$_SESSION["lang"]."_detail";			
						} else if($_SESSION["lang"]== "en"){
							$lang_menu=$_SESSION["lang"]."_menu";
							$lang_detail=$_SESSION["lang"]."_detail";
						}
							$l_menu=$rs_ins->$lang_menu;
							$l_detail=$rs_ins->$lang_detail;
					}
				}
			?>
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2><?=$l_menu?></h2>
		</div>
		<div class="product-banner">
			<img src="images/news/<?=$ins_img?>" alt="productsbanner01" width="630" height="200">
		</div>
		<div class="tab-menu">
			<ul>
				<li class="active"><?php echo '<a href="products01-1.php?id='.$rs_ins->id_insurance.'">รายละเอียด</a>';?></li>
				<li><?php echo  '<a href="products01-2.php?id='.$rs_ins->id_insurance.'">เงื่อนไข</a>';?></li>
			</ul>
		</div>
		<div class="product-content">
			<th class="a">	
				<?=$l_detail?>
			</th>
		
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
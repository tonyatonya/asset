<?php 
	@require_once('backoffice/init.php'); 
	$ins_p = $db->result(DB_PREFIX.'insurance,ck_cate_product','ck_insurance.id_insurance=ck_cate_product.id_cate_product'.$_GET['id']);
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
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<?php 
				if($ins_p){
					foreach($ins_p as $rs_ins){
						$product_menu = $rs_ins->product_menu;
						$ins_img = $rs_ins->ins_img ;
						$rs_ins->detail;
						$rs_ins->detail;
						$condition_type = $rs_ins->condition_type;
					}
				}
			?>
			<h2><?=$product_menu?></h2>
		</div>
		<div class="product-banner">
		</div>
		<div class="tab-menu">
			<ul>
				<li class="active"><a href="#">รายละเอียด</a></li>
				<li><a href="#">เงื่อนไข</a></li>
			</ul>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
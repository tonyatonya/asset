<?php 
	@require_once('backoffice/init.php');
	$finan 		= $db->result(DB_PREFIX.'report_financial');
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
		<?php require('inc_report-leftcol.php'); ?>
		
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ดาว์นโหลดวารสาร</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/ico/assetIcon14.png" alt="assetIcon13" width="46" height="46" /></div>
			<h2>ฐานะทางการเงินแบะผลการดำเนินงาน</h2>
		</div>
		<div class="product-content">
			<!-- Add content here -->
			<?php 
				if($finan){
					foreach($finan as $f){
						$financial=$f->financial;
					}
				}
			?>
			<?=$financial?>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
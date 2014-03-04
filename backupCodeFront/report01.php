<?php 
	@require_once('backoffice/init.php');
	$report 		= $db->result(DB_PREFIX.'report');
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
			<div class="ico"><img src="images/ico/assetIcon13.png" alt="assetIcon13" width="46" height="46" /></div>
			<h2>รายงานประจำปี</h2>
		</div>
		<div class="product-content">
			<!-- Add content here -->
			<?php 
				if($report){
					foreach($report as $r){
						$re=$r->report;
					}
				}
			?>
			<?=$re?>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
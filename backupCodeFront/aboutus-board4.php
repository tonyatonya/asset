<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<?php require('inc_mainmenu.php') ?>
<div class="wrapper otherpage contact">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_aboutus-leftcol.php') ?>
	</section>
	<section class="right-col aboutus  aboutbg">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">เกี่ยวกับเรา</a></li>
				<li>คณะกรรมการลงทุน</li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>คณะกรรมการลงทุน</h2>		
		</div>
		<div class="clear" style="height:20px;"></div>
		<!--
<div class="tab-menu">
			<ul>
				<li><a href="aboutus-board.php">คณะกรรมการบริหาร</a></li>
				<li><a href="aboutus-board2.php">คณะกรรมการตรวจสอบ</a></li>
				<li><a href="aboutus-board3.php">คณะกรรมการความเสี่ยง</a></li>
				<li class="active"><a href="aboutus-board4.php">คณะกรรมการลงทุน</a></li>
			</ul>
</div>
-->
		<div class="clear" style="height:20px;"></div>
		<ul class="board-list">
			<li class="mainlist">
				<div class="img"><a href="images/bord/prawit.JPG"><img src="images/bord/prawit.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">ดร.ประวิตร สงวนสิน</div>
					<div class="position">กรรมการผู้อำนวยการ</div>
				</div>
			</li>
			
			
			<li style="margin-left:140px;">
				<div class="img"><a href="images/bord/vichai.JPG"><img src="images/bord/vichai.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นายวิชัย เที่ยงธรรมวุฒิ</div>
					<div class="position">กรรมการ</div>
				</div>
			</li>
			<li>
				<div class="img"><a href="images/bord/jirapa.JPG"><img src="images/bord/jirapa.JPG" alt="prawit" width="100" height="130"></a></div>
				<div class="detail">
					<div class="name">นางสาวจีราภา พรเกษมศาสตร์</div>
					<div class="position">กรรมการ และเลขานุการ</div>
				</div>
			</li>
			
		</ul>
	</section>
</div>
</div>
<link rel="stylesheet" href="css/colorbox.css"/>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(function(){
		$(".img a").colorbox();
	})
</script>

<?php require('inc_footer.php'); ?>
</body>
</html>
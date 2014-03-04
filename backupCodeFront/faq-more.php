<?php 
	@require_once('backoffice/init.php'); 
	$topic 	= $db->result(DB_PREFIX.'topic_faq');
?>
<!DOCTYPE html>
<html lang="">
<head>
	<?php require('inc_header.php'); ?>
</head>
<body>
<?php require('inc_mainmenu.php') ?>
<div class="wrapper otherpage contact">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_contactus-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ติดต่อเรา</a></li>
				<li><a href="#">FAQ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/ico/assetIcon18.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>FAQ</h2>
		</div>
		<div class="search-box">
			<div>กรุณาเลือกหมวดคำถามที่ท่านต้องการทราบ</div>
			<div class="box-holder"><input type="text" placeholder="ค้นหาคำถามทันใจ"><input type="image" src="images/searchbtn.png"></div>
		</div>
		<div class="tab-menu">
			<?php if($topic){
					foreach($topic as $t){
						$topic_name=$t->topic_name;
							echo '<ul>
									<li><a href="faq.php?id='.$t->id_topic.'">'.$t->topic_name.'</a></li>
									
								';
					}
				}			
			?>
			<!--<li><a href="faq.php">เคลม</a></li>
				<li><a href="faq.php">นโยบาย</a></li>
				<li><a href="faq.php">เรื่องอื่นๆ</a></li>-->
				<li><a href="faq-more.php">สอบถามเพิ่มเติม</a></li></ul>
</div>
		<div class="clear"></div>
		<div class="formholder">
			<h3>กรุณากรอกคำถามที่ต้องการถามเพิ่มเติม</h3>
			<form id="sendFAQ" method="post" action="?Mode=faq" onclick="return sandff()"><!---->
				<input type="text" name="txtname" id="txtname" placeholder="ชื่อ-นามสกุล">
				<input type="text" name="txtemail" id="txtemail" placeholder="อีเมล์">
				<input type="text" name="txttel" id="txttel" placeholder="โทรศัพท์">
				<select name="txttopic">
					<option value="1">กรรมธรรม์</option>
					<option value="2">เคลม</option>
					<option value="3">นโยบาย</option>
					<option value="4">เรื่องอื่นๆ</option>
				</select>
				<input type="text" name="txtsubject" id="txtsubject" placeholder="หัวข้อ">
				<textarea name="txtdetail" id="txtdetail" placeholder="ข้อความ"></textarea>
				<div style="margin-top:10px; width:310px; margin-left:auto;margin-right:auto;">
					<div class="asset-btn" style="float:right;">
						<a href="#" onclick="document.getElementById('sendFAQ').submit();">
							<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
							<div class="btn-body">ส่งข้อความ</div>
							<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
						</a>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
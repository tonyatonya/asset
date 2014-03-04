<?php 
	@require_once('backoffice/init.php');
	$row_topic 		= $db->result(DB_PREFIX.'faq_plus',' ref_topic_faq='.$_GET['id']);
	$topic 			= $db->result(DB_PREFIX.'topic_faq');
?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".faq-tb a").colorbox();
	})
</script>
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
						$id_name=$t->id_topic;
						$topic_name=$t->topic_name;
						$a=$db->record(DB_PREFIX.'topic_faq','id_topic='.$_GET['id']);
						echo '<ul>
								<li><a href="faq.php?id='.$t->id_topic.'">'.$t->topic_name.'</a></li>
							';
					}
				}			
			?>
				<li><a href="faq-more.php">สอบถามเพิ่มเติม</a></li></ul>
</div>
		<div class="clear"></div>
		<div class="page-status">
			<div style="display:inline; float:left;"><span>หมวดคำถามเกี่ยวกับ :</span><?=$a->topic_name;?></div>
			<!--<div class="content-nav">
				<ul>
					<li class="prev"><a href="#">ก่อนหน้า</a></li>
					<li class="next"><a href="#">ถัดไป</a></li>
				</ul>
			</div>-->
		</div>
		<table class="faq-tb">
			<tr><th>หัวข้อ</th><th>ดูแล้ว</th><th>วันที่อัพเดต</th></tr>
			<?php if($row_topic){
					foreach($row_topic as $rt){
						
						if($rt->active ==1){
							echo '<tr>
								<td><a href="faq-detail.php?id='.$rt->id_faq.'">'.$rt->subject.'</a><span>'.$rt->name_faq.'</span></td>
								<td>'.$rt->view_faq.'</td>
								<td>'.$rt->date_faq.'</td>
							</tr>';
						}
					}
				}			
			?>
		</table>
		<div class="page-status">
			<div class="content-nav">
				<ul>
					<li class="prev"><a href="#">ก่อนหน้า</a></li>
					<li class="next"><a href="#">ถัดไป</a></li>
				</ul>
			</div>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
<link rel="stylesheet" href="css/colorbox.css">
</body>
</html>
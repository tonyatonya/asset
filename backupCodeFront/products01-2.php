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
					foreach($ins_p as $rs_ins_con){
						$rs_ins_con->th_menu;
						$rs_ins_con->en_menu;
						$ins_img_con = $rs_ins_con->ins_img;
						$rs_ins_con->th_condition_type;
						$rs_ins_con->en_econdition_type;
						
						if($_SESSION["lang"]== "th"){
							$lang_menu=$_SESSION["lang"]."_menu";	
							$lang_condition=$_SESSION["lang"]."_condition_type";			
						} else if($_SESSION["lang"]== "en"){
							$lang_menu=$_SESSION["lang"]."_menu";	
							$lang_condition=$_SESSION["lang"]."_condition_type";
						}
							$l_menu=$rs_ins_con->$lang_menu;
							$l_condition=$rs_ins_con->$lang_condition;
					}
				}
				
			?>
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2><?=$l_menu?></h2>
		</div>
		<div class="product-banner">
			<img src="images/news/<?=$ins_img_con?>" alt="productsbanner01" width="630" height="200">
		</div>
		<div class="tab-menu">
			<ul>
				<li><?php echo '<a href="products01-1.php?id='.$rs_ins_con->id_insurance.'">รายละเอียด</a>';?></li>
				<li class="active"><?php echo '<a href="products01-2.php?id='.$rs_ins_con->id_insurance.'">เงื่อนไข</a>';?></li>
			</ul>
		</div>
		<div class="product-content">
		<ol class="rule-list">
			<?=$l_condition?>
		</ol>
			<!--<h3>รายละเอียดความคุ้มครองกรมธรรม์</h3>
			
				<li>รับประกันเฉพาะรถยนต์เก๋ง, กระบะใช้ส่วนบุคคล</li>
				<li>ไม่รับประกันรถยนต์กลุ่ม 1 รถยนต์นำเข้า รถยุโรป รถยนต์สปอร์ต รถยนต์ตกแต่งดัดแปลง</li>
				<li>ราคารถยนต์ขณะรับประกันภัยไม่ต่ำว่าทุนประกันภัย และ ทุนประกันภัยไม่ต่ำกว่า 80% ของราคารถยนต์ในปัจจุบัน</li>
				<li>รับประกันรถยนต์เก๋ง ไม่เกิน 10 ปี กระบะไม่เกิน 7ปี</li>
				<li>ไม่มีส่วนลดกลุ่ม ส่วลดประวัติดี และไม่มีการโอนส่วนลดประวัติดี</li>
			</ol>
			<h3>เงื่อนไขความคุ้มครอง</h3>
			<ol class="rule-list">
				<li>คุ้มครองรถยนต์สูญหาย และไฟไหม้ ภายในวงเงินตามตารางเบี้ย</li>
				<li>คุ้มครองความเสียหายต่อรถยนต์ อันมีสาเหตุมาจากการชนกับยานพาหนะทางบก และคู่กรณีอยู่ในที่เกิดเหตุ ภายในวงเงินตามตารางเบี้ย</li>
				<li>การประกันภัยนี้ไม่คุ้มครองความเสียหายต่อรถยนต์ ที่เกิดจากการพลิกคว่ำ หรือหักหลบสิ่งกีดขวาง หรือการเฉี่ยวชนกับวัตถุใดๆ ที่ไม่ใช่ยานพาหนะทางบก หรือจากการใช้รับจ้างสาธรณะ</li>
			</ol>-->
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
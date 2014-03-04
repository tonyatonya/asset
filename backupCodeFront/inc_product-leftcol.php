<?php
	@require_once('backoffice/init.php');
	$row_product 	= $db->result(DB_PREFIX.'insurance');
?>
<div class="category-menu">
	<div class="title"><h2>ผลิตภัณฑ์</h2></div>
	<ul>
	<?php
		if($row_product){
			foreach($row_product as $rs_pd){
			$rs_pd->icon_img;
			$rs_pd->th_menu;
			$rs_pd->en_menu;
			
			if($_SESSION["lang"]== "th"){
				$lang_product=$_SESSION["lang"]."_menu";			
			} else if($_SESSION["lang"]== "en"){
				$lang_product=$_SESSION["lang"]."_menu";
			}
				$rs_pd->$lang_product;
				
				
			echo '<li><a href="products01-1.php?id='.$rs_pd->id_insurance.'"><div class="ico"><img src="images/news/'.$rs_pd->icon_img.'"  width="46" height="46" /></div>'.$rs_pd->$lang_product.'</a></li>';
			}
		}
	?>
		<!--<li><a href="products01-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยรถยนต์ประเภท 1 พิเศษ</div></a></li>
		<li><a href="products02-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยรถยนต์ประเภท 3 รวมพรบ.</div></a></li>
		<li><a href="products03-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยรถยนต์ประเภท 3 พิเศษ</div></a></li>
		<li><a href="products04-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยรถยนต์ประเภท 2 พิเศษ</div></a></li>
		<li><a href="products05-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยผู้เล่นกอล์ฟ</div></a></li>
		<li><a href="products06-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยอุบัติเหตุส่วนบุคคล</div></a></li>
		<li><a href="products07-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยอุบัติเหตุการเดินทาง</div></a></li>
		<li><a href="products08-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยคนรักบ้าน</div></a></li>
		<li><a href="products09-1.php"><div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div><div>ประกันภัยเบ็ดเตล็ดคุ้มครองผู้ค้าอัญมณี</div></a></li>-->
		<li><a href="products-servicecenter.php"><div class="ico"><img src="images/ico/assetIcon21.png" alt="exampleicon" width="46" height="46" /></div><div>อู่ / ศูนย์บริการ</div></a></li>
	</ul>
</div>
<?php require('inc_calculatebanner.php'); ?>
<div class="left-banner">
			<a href="download.php">
				<img src="images/ebookbanner.jpg" alt="ebookbanner" width="299" height="110">
			</a>
		</div>
<div class="service-box">
			<!--<div class="service-title">ลิงค์หน่วยงานต่างๆ</div>--><?php require('inc_linkbanner.php'); ?>
			<div class="service-body">
				 
			</div>
		</div>
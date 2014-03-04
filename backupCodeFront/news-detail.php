<?php
	@require_once('backoffice/init.php');
	$row_news_d 	= $db->result(DB_PREFIX.'news, ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews and id_news='.$_GET['id']);
	//$row_type 	= $db->result(DB_PREFIX.'news, ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews and id_ref_cnews='.$_GET['id']);
	$view			= $db->update(DB_PREFIX.'news','view=view+1','id_news='.$_GET['id']);
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
		<?php require('inc_news-leftcol.php') ?>
	</section>
	<section class="right-col">
		<?php if($_SESSION["lang"] == "th") { ?>
			<div class="bread-nav">
				<ul>
					<li><a href="#">หน้าหลัก</a></li>
					<li><a href="#">ข่าวสารและกิจรรม</a></li>
					<li><a href="#">ข่าวสินทรัพย์</a></li>
				</ul>
			</div>
		<?php } else {?>
			<div class="bread-nav">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Information and Activity</a></li>
					<li><a href="#">Asset news</a></li>
				</ul>
			</div>
		<?php }?>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/ico/assetIcon10.png" alt="exampleicon" width="46" height="46" /></div>
			
			<?php 
				if($row_news_d){
				foreach($row_news_d as $rs_index){
					
					$rs_index->th_category;
					$rs_index->en_category;
					$rs_index->th_name ;
					$rs_index->en_name ;
					$img = $rs_index->img;
					$rs_index->th_detail_news;
					$rs_index->en_detail_news;
					$date_news = $rs_index->date_news;
					$date_ref = $rs_index->date_ref;
					$ref_by = $rs_index->ref_by;
					$view=$rs_index->view;
					$id = $rs_index->id_news;
					
					if($_SESSION["lang"]== "th"){
						$lang_category=$_SESSION["lang"]."_category";			
						$lang_name=$_SESSION["lang"]."_name";			
						$lang_detail_news=$_SESSION["lang"]."_detail_news";			
					} else if($_SESSION["lang"]== "en"){
						$lang_category=$_SESSION["lang"]."_category";
						$lang_name=$_SESSION["lang"]."_name";
						$lang_detail_news=$_SESSION["lang"]."_detail_news";
					}
						$l_category=$rs_index->$lang_category;
						$l_name=$rs_index->$lang_name;
						$l_detail_news=$rs_index->$lang_detail_news;
				}
			}
			?>
			<h2><?=$l_category?></h2>
			
		</div>
			<div class="news-heading"><?=$l_name;?></div>
			<div class="news-img-first">
				<img src="images/news/<?=$img?>" alt="newsimg" width="260" height="175">
			</div>
			<div class="news-content">
				<p>
				<?=$l_detail_news?>
				</p>
			</div>
			<hr>
			<div class="news-stat">
				<ul class="content-stat">
					<li>วันที่ : <?=$date_news?></li>
					<li>วันที่ตีพิมพ์ : <?=$date_ref?></li>
					<li>พิมพ์โดย : <?=$ref_by?></li>
					<li>หมวดหมู่ : <?=$l_category?></li>
					<li>จำนวนผู้ชม : <?=$view?></li>
				</ul>
			
			</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
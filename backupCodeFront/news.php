<?php 
	@require_once('backoffice/init.php'); 
	$row_news 		= $db->result(DB_PREFIX.'news,ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews AND active_news = 1 AND id_ref_cnews='.$_GET['id'],'rand()',1);
	$rw_news 		= $db->result(DB_PREFIX.'news,ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews AND active_news = 1 AND id_ref_cnews='.$_GET['id']);
	$row_news_type 	= $db->result(DB_PREFIX.'news,ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews AND active_news = 1 AND id_ref_cnews='.$_GET['id'],'rand()',1);

?>
<!DOCTYPE html>
<html lang="">
<head>
	<?php require('inc_header.php'); ?>
	<!--
<script type="text/javascript">
		$("#count").click() {
			alert ("HI");
			}
	</script>
-->
</head>
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
			
			<?php 
			if($row_news){
				foreach($row_news as $rs_index){
					
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
					$rs_index->view;
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
			
			if($row_news_type){
				foreach($row_news_type as $rs_type){
					$category_type = $rs_type->category;
					$name_type = $rs_type->name ;
					$img_type = $rs_type->img;
					$detail_news_type = $rs_type->detail_news;
					$date_news_type = $rs_type->date_news;
					$date_ref_type = $rs_type->date_ref;
					$ref_by_type = $rs_type->ref_by;
					$view=$rs_type->view;
					$idy = $rs_type->id_news;
				}
			}
			?>
			<div class="ico"><img src="images/ico/assetIcon28.png" alt="exampleicon" width="46" height="46" /></div>
			<h2><?=$l_category?></h2>
		</div>
		<div class="top-news">
			<div class="news-img">
				
					<img src="images/news/<?=$img?>" alt="newsimg" width="260" height="175">
				
			</div>
			<div class="news-detail">
				<div class="title"><a href="news-detail.php?id=<?=$id?>"><?=$l_name?></a></div>
				
				<p><?=$l_detail_news?></p>
				
				<ul class="content-stat">
					<li>view : <?=$view?></li>
					<li><?=$date_ref?></li>
				</ul>
			</div>
		</div>
		<div class="news-zone">
			<div class="title">
				<img src="images/news-icon.png" alt="news-icon" width="24" height="18">
				<span>ข่าวสารและกิจกรรม</span>
			</div>
			<div class="left">
				<div class="news-img"><a href="news-detail.php?id=<?=$idy?>"><img src="images/news/<?=$img_type?>" alt="newsimg" width="211" height="155"></a></div>
					<div class="news-title"><?=$name_type?></div>
					<div class="news-lead"><?=$detail_news_type?></div>
			</div>
			<div class="right">
				<ul class="arrow-bullet">
				<?php
					if($rw_news){
						foreach($rw_news as $r_news){
							$r_news->th_name;
							$r_news->en_name;
							
							if($_SESSION["lang"]== "th"){
								$llang_name=$_SESSION["lang"]."_name";			
							} else if($_SESSION["lang"]== "en"){
								$llang_name=$_SESSION["lang"]."_name";
							}
								$rs_index->$llang_name;
						
							
							echo '<li><a href="news-detail.php?id='.$r_news->id_news.'" id="count">'.$r_news->$llang_name.'</a></li>';
						}
					}
				?>
				</ul>
			</div>
		</div>
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
</body>
</html>
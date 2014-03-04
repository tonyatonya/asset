<?php 
	@require_once('backoffice/init.php'); 
	$youtube 	= $db->result(DB_PREFIX.'youtube');
	//$festival 	= $db->result(DB_PREFIX.'festival');
	$row_rand 	= $db->result(DB_PREFIX.'news,ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews','rand()',5);
	$rw_news 	= $db->result(DB_PREFIX.'news,ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews','rand()',1);
	$topic	 	= $db->result(DB_PREFIX.'news,ck_cate_news','ck_news.id_ref_cnews=ck_cate_news.id_cnews','rand()',8);
?>
<!DOCTYPE html>
<html lang="">
<head>
	<?php require('inc_header.php'); ?>
	<script type="text/javascript">
		//<![CDATA[
		/* <!-- show Lightbox Image Details instantly on page load --> */
		$(document).ready(function()
		{
		$('#popup').trigger('click');
		});
		//]]>
	</script>
</head>
<body>
<?php 
	/*if($festival){
		foreach($festival as $f){
			$f_img=$f->festival_img;
		}
	}*/
?>
<?php require('inc_mainmenu.php') ?>
<div class="wrapper">
<!--<a rel="lightbox" href="images/news/<?=$f_img?>" id="popup" width="1280" height="720"></a>-->
<?php require('inc_mainslide.php');?>
<div class="content">
	<section class="left-col">
		<?php require('inc_calculatebanner.php'); ?>
		<div class="atime">
			<div class="atime-title">
				<img src="images/atime.png" alt="atime" width="291" height="177">
				<center>
				<?php 
				
				if($youtube){
						foreach($youtube as $y){
							$url=$y->url;
						}
					}
				?>
					<iframe width="265" height="200" src="<?=$url?>" frameborder="0" allowfullscreen></iframe>
				</center>
			</div>
			<div class="atime-body">
				
			</div>
		</div>
		<div class="left-banner">
			<a href="download.php">
				<img src="images/ebookbanner.jpg" alt="ebookbanner" width="299" height="110">
			</a>
		</div>
		<?php require('inc_linkbanner.php'); ?>
	</section>
	<section class="right-col">
		<hr>
		<div class="news-slider">
			<div class="title">
				<img src="images/new-service.png" alt="new-service" width="27" height="29">
				<span>บริการใหม่ล่าสุด</span>
			</div>
			<div class="news-slide">
				<div class="leftWhite"></div>
				<div class="nav-left"><a href="#"><span>left</span></a></div>
				<div class="nav-right"><a href="#"><span>right</span></a></div>
				<div class="slide-fade"></div>
				<div class="frame">
					<ul>
				<?php 
					if($row_rand){
						foreach($row_rand as $rr){
							$rr->th_category;
							$rr->en_category;
							$rr->th_name ;
							$rr->en_name ;
							$rr->img;
							$rr->th_detail_news;
							$rr->en_detail_news;
							$date_news = $rr->date_news;
							$date_ref = $rr->date_ref;
							$ref_by = $rr->ref_by;
							$rr->view;
							$id = $rr->id_news;
					
							if($_SESSION["lang"]== "th"){
								$in_lang_category=$_SESSION["lang"]."_category";			
								$in_lang_name=$_SESSION["lang"]."_name";			
								$in_lang_detail_news=$_SESSION["lang"]."_detail_news";			
								} else if($_SESSION["lang"]== "en"){
									$in_lang_category=$_SESSION["lang"]."_category";
									$in_lang_name=$_SESSION["lang"]."_name";
									$in_lang_detail_news=$_SESSION["lang"]."_detail_news";
								}
									$in_category=$rr->$in_lang_category;
									$in_name=$rr->$in_lang_name;
									$in_detail_news=$rr->$in_lang_detail_news;
						
						
							echo 							
									'<li>
										<a href="news-detail.php?id='.$rr->id_news.'"><div class="news-img"><img src="images/news/'.$rr->img.'" alt="sampleNewsServiceImg" width="211" height="155"></div><div class="news-title">'.$rr->$in_lang_name.'</div><div class="news-title">'.$rr->$in_lang_name.'</div></a>
									</li>';
									
						}
					}
				?>
				</ul>
				</div>
				<!--<div class="frame">
					<ul>
						<li>
							<a href="#">
								<div class="news-img"><img src="images/sampleNewsServiceImg.jpg" alt="sampleNewsServiceImg" width="211" height="155"></div>
								<div class="news-title">แนะนำประกันภัยรถยนต์รูปแบบใหม่</div>
								<div class="news-lead">สินทรัพย์ประกันภัย ขอแนะนำประกันภัยรถยนต์
		รูปแบบใหม่ ประกันภัย 2 บวก</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="news-img"><img src="images/sampleNewsServiceImg.jpg" alt="sampleNewsServiceImg" width="211" height="155"></div>
								<div class="news-title">แนะนำประกันภัยรถยนต์รูปแบบใหม่</div>
								<div class="news-lead">สินทรัพย์ประกันภัย ขอแนะนำประกันภัยรถยนต์
		รูปแบบใหม่ ประกันภัย 2 บวก</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="news-img"><img src="images/sampleNewsServiceImg.jpg" alt="sampleNewsServiceImg" width="211" height="155"></div>
								<div class="news-title">แนะนำประกันภัยรถยนต์รูปแบบใหม่</div>
								<div class="news-lead">สินทรัพย์ประกันภัย ขอแนะนำประกันภัยรถยนต์
		รูปแบบใหม่ ประกันภัย 2 บวก</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="news-img"><img src="images/sampleNewsServiceImg.jpg" alt="sampleNewsServiceImg" width="211" height="155"></div>
								<div class="news-title">แนะนำประกันภัยรถยนต์รูปแบบใหม่</div>
								<div class="news-lead">สินทรัพย์ประกันภัย ขอแนะนำประกันภัยรถยนต์
		รูปแบบใหม่ ประกันภัย 2 บวก</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="news-img"><img src="images/sampleNewsServiceImg.jpg" alt="sampleNewsServiceImg" width="211" height="155"></div>
								<div class="news-title">แนะนำประกันภัยรถยนต์รูปแบบใหม่</div>
								<div class="news-lead">สินทรัพย์ประกันภัย ขอแนะนำประกันภัยรถยนต์
		รูปแบบใหม่ ประกันภัย 2 บวก</div>
							</a>
						</li>
					</ul>
				</div>-->
				<script type="text/javascript">
					$(document).ready(function(){
						var newsCount = $(".frame ul li").length;
						var childWidth= $(".frame ul li").width() + 10;
						var slideTrain = $(".frame");
						var maxtrain = newsCount -2;
						var trainCount = 0;
						var newsSpeed = 1000;
						$(".frame").css({
							width : childWidth * newsCount
						})
						$(".nav-left a").click(function(e){
							
							if(trainCount == 0 || trainCount!= maxtrain){
								trainCount++; 
								$(slideTrain).animate({
									left : "-=" + childWidth
								},newsSpeed)
							}
							e.preventDefault();
						})
						$(".nav-right a").click(function(e){
							if(trainCount != 0){
								if(trainCount > 0){
									trainCount--;
								}else{
									trainCount++;
								}
								$(slideTrain).animate({
									left : "+=" + childWidth
								},newsSpeed)
							}
							e.preventDefault();
						})
					});
				</script>
			</div>
		</div>
		<div class="news-zone">
			<div class="title">
				<img src="images/news-icon.png" alt="news-icon" width="24" height="18">
				<span>ข่าวสารและกิจกรรม</span>
			</div>
			<div class="left">
			<?php
					if($rw_news){
						foreach($rw_news as $r_news){
							/*$r_news->th_category;
							$r_news->en_category;
							$r_news->th_name ;
							$r_news->en_name ;
							$r_news->img;
							$r_news->th_detail_news;
							$r_news->en_detail_news;
							$date_news = $r_news->date_news;
							$date_ref = $r_news->date_ref;
							$ref_by = $r_news->ref_by;
							$r_news->view;
							$id = $r_news->id_news;*/
							
							
							if($_SESSION["lang"]== "th"){
								$llang_name=$_SESSION["lang"]."_name";			
							} else if($_SESSION["lang"]== "en"){
								$llang_name=$_SESSION["lang"]."_name";
							}
								$r_news->$llang_name;
								
								echo '<a href="news-detail.php?id='.$r_news->id_news.'">
										<div class="news-img"><img src="images/news/'.$r_news->img.'" alt="sampleNewsServiceImg" width="211" height="155"></div>
										<div class="news-title">'.$rs_index->$llang_name.'</div>
										<div class="news-lead" style="word-wrap:break-word;">'.substr($r_news->th_detail_news,0,300).'</div>
									</a>';
						}
					}
			?>
				
			</div>
			<div class="right">
			<?php
					if($topic){
						foreach($topic as $t){
							$t->th_name;
							$t->en_name;
							$id = $t->id_news;
						
							echo '<ul class="arrow-bullet">
									<li><a href="news-detail.php?id='.$t->id_news.'">'.$t->th_name.'</a></li>
								</ul>';
						}
					}
			?>
				<!--<ul class="arrow-bullet">
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
				</ul>-->
			</div>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
<!-- live Chat -->
<link type="text/css" rel="stylesheet" href="css/chatbox.css" media="screen, projection"/>
<div class="livechat">
	<div class="label normal">
		<a href="#"><span>open</span></a>
	</div>
	<div class="livechat-body">
		<div class="conversation-box">
			<div class="close-btn"><a href="#"><img src="images/closebtn.jpg" alt="closebtn" width="14" height="14"></a></div>
			<div class="title">message</div>
			<textarea></textarea>
		</div>
		<div class="comment-box">
			<div class="title">your message</div>
			<script type="text/javascript">
var __lc = {};
__lc.license = 3958591;

(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
					<!--Start of Zopim Live Chat Script-->
<!--<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1tk813UdEE8YUZPzGrUmaUPFPFgpeydI';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>-->
<!--End of Zopim Live Chat Script-->
		</div>

	</div>
	<div class="send-btn">
		<a href="#"><img src="images/sendbtn.png" alt="sendbtn" width="67" height="24"></a>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	var chatWidth = $(".livechat").width();
	$(".normal a").click(function(e){
		$(".livechat").animate({
			right : 20 
		})
		e.preventDefault();
	}).parent().removeClass(".normal").addClass("open");
	$(".livechat .close-btn").click(function(e){
		$(".livechat").animate({
			right: -295
		}).parent().parent().parent().removeClass(".open").addClass(".normal");
		e.preventDefault();
	})
})
</script>
<!-- end Live Chat -->
</body>
</html>
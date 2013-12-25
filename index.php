<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<div class="wrapper">
<?php require('inc_mainslide.php');?>
<!-- test SVN -->
<div class="content">
	<section class="left-col">
		<?php require('inc_calculatebanner.php'); ?>
		<div class="atime">
			<div class="atime-title">
				<img src="images/atime.png" alt="atime" width="291" height="177">
			</div>
			<div class="atime-body">
				
			</div>
		</div>
		<div class="left-banner">
			<a href="#">
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
				</div>
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
				<a href="#">
					<div class="news-img"><img src="images/sampleNewsServiceImg.jpg" alt="sampleNewsServiceImg" width="211" height="155"></div>
					<div class="news-title">แนะนำประกันภัยรถยนต์รูปแบบใหม่</div>
					<div class="news-lead">สินทรัพย์ประกันภัย ขอแนะนำประกันภัยรถยนต์
รูปแบบใหม่ ประกันภัย 2 บวก</div>
				</a>
			</div>
			<div class="right">
				<ul class="arrow-bullet">
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
					<li><a href="#">news title link</a></li>
				</ul>
			</div>
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
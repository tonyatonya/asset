<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<div class="wrapper otherpage">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_news-leftcol.php') ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ข่าวสารและกิจรรม</a></li>
				<li><a href="#">ข่าวสินทรัพย์</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ข่าวสินทรัพย์</h2>
		</div>
		<div class="top-news">
			<div class="news-img"><img src="images/newsimg.jpg" alt="newsimg" width="260" height="175"></div>
			<div class="news-detail">
				<div class="title">สินทรัพย์รักษ์โลก “Assets Loves Earth”</div>
				<p>คุณบังอร มี้เจริญ กรรมการผู้จัดการ บมจ. สินทรัพย์ประกันภัย นำทีมพนักงาน จัดโครงการ สินทรัพย์รักษ์โลก Assets Loves Earth" ปลูกปะการัง ในเขตอนุรักษ์</p>
				<ul class="content-stat">
					<li>999 viewed</li>
					<li>2/7/2556</li>
				</ul>
			</div>
		</div>
		<div class="news-zone">
			<div class="title">
				<img src="images/news-icon.png" alt="news-icon" width="24" height="18">
				<span>ข่าวสารและกิจกรรม</span>
			</div>
			<div class="left">
				<div class="news-img"></div>
					<div class="news-title">แนะนำประกันภัยรถยนต์รูปแบบใหม่</div>
					<div class="news-lead">สินทรัพย์ประกันภัย ขอแนะนำประกันภัยรถยนต์
รูปแบบใหม่ ประกันภัย 2 บวก</div>
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
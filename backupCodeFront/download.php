<?php 
	//require('init.php'); 
	@require_once('backoffice/init.php');
	$ebook = $db->result(DB_PREFIX.'ebook');

?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<style>
.downloadList >  li{
	list-style: none;
	height: auto;
	border: 1px solid #c4c4c4;
	margin-top: 10px;
	width: 290px;
	padding: 5px;
	border-radius: 5px;
	float: left;
	margin: 5px;
	overflow: hidden;
}
.downloadList >  li:after{
	content: "";
	clear: both;
	display: block;
}
.downloadList .img,.downloadList .text{
	display: inline-block;
	float: left;
	
}
.downloadList .text {
	margin-left: 10px;
}
.downloadList .text li{
	list-style: none;
	color: #c4c4c4;
}
.downloadList .text .title{
	color: #ca0000;
	font-weight: bold;
}
</style>
<body>
<?php require('inc_mainmenu.php') ?>
<div class="wrapper otherpage">
<div class="redbar"></div>
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
			<a href="download.php">
				<img src="images/ebookbanner.jpg" alt="ebookbanner" width="299" height="110">
			</a>
		</div>
		<?php require('inc_linkbanner.php'); ?>
	</section>
	<section class="right-col">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">ดาว์นโหลดวารสาร</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ดาว์นโหลดวารสาร</h2>
		</div>
		<ul class="downloadList">
			<?php
				if($ebook){
					foreach($ebook as $e){
						$e->book_name;
						$e->book_img;
						$e->book_url;
						$e->book_date;
					
					echo '<li>
				<div class="img"><img src="images/news/'.$e->book_img.'" width="120" height="120"></div>
				<div class="text">
					<div class="title">'.$e->book_name.'</div>
					<ul>
						<li>วันที่อัพโหลด :'.$e->book_date.'</li>
						<form method="get" action="images/file/'.$e->book_url.'">
						<li><input type="submit" value="download" ></li>
						</form>
					</ul>
				</div>
			</li>';
					}
				}
				
			?>
		
			
			<!--<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="img"><img src="http://placehold.it/120x120"></div>
				<div class="text">
					<div class="title">ชื่อไฟล์</div>
					<ul>
						<li>วันที่อัพโหลด : 1/1/2557</li>
						<li><input type="submit" value="download"></li>
					</ul>
				</div>
			</li>-->
		</ul>
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
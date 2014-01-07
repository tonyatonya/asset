<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
<div class="wrapper otherpage contact">
<div class="redbar"></div>
<div class="content">
	<section class="left-col">
		<?php require('inc_calculate-leftcol.php') ?>
	</section>
	<section class="right-col aboutus">
		<div class="bread-nav">
			<ul>
				<li><a href="#">หน้าหลัก</a></li>
				<li><a href="#">คำนวณเบี้ยประกัน</a></li>
				<li>ประกันภัยประเภท 3 รวม พรบ.</li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>คำนวณเบี้ยประกัน</h2>		
		</div>
		<div class="clear" style="height:20px;"></div>
		<h3>ประกันภัยรถยนต์ประเภท 3 รวม พรบ.</h3>
		<div class="result-box">
			<div class="title">ผลการคำนวณเบี้ย</div>
			<table class="cal-tb">
			<tr>
				<td>ประเภทความคุ้มครอง</td>
				<td>
					Asset1
				</td>
			</tr>
			<tr>
				<td>ยี่ห้อรถ</td>
				<td>
					Toyota
				</td>
			</tr>
			<tr>
				<td>รุ่นรถ</td>
				<td>
					Vios
				</td>
			</tr>
			<tr>
				<td>ปีที่จดทะเบียน</td>
				<td>
					2011
				</td>
			</tr>
			<tr>
				<td>ประเภทรถ</td>
				<td>
					รถยนต์นั่งส่วนบุคคลไม่เกิน 7 ที่นั่ง
				</td>
			</tr>
			<tr>
				<td>เบี้ยประกันภัย</td>
				<td>
					2008 บาท *
				</td>
			</tr>
		</table>
		</div>
		<div class="form-nav">
			<table>
				<tr>
					<td>ท่านสนใจซื้อประกันหรือไม่ ?</td>
					<td>
						<ul>
							<li><div class="asset-btn">
							<a href="#">
							<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
							<div class="btn-body">สนใจ</div>
							<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
							</a>
						</div></li>
							<li><div class="asset-btn">
							<a href="#">
							<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
							<div class="btn-body">ไม่สนใจ</div>
							<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
							</a>
						</div></li>
							<li><div class="asset-btn">
							<a href="#">
							<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
							<div class="btn-body">ต้องการรายละเอียดเพิ่มเติม</div>
							<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
							</a>
						</div></li>
						</ul>
					</td>
				</tr>
			</table>
		</div>	
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
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
		<table class="cal-tb">
			<tr>
				<td>เลือกประเภทความคุ้มครอง</td>
				<td>
					<div class="select-holder">
				 		<select>
				 			<option>ตัวเลือก</option>
				 		</select>		
				 	</div>
				</td>
			</tr>
			<tr>
				<td>เลือกยี่ห้อรถ</td>
				<td>
					<div class="select-holder">
				 		<select>
				 			<option>ตัวเลือก</option>
				 		</select>		
				 	</div>
				</td>
			</tr>
			<tr>
				<td>เลือกรุ่นรถ</td>
				<td>
					<div class="select-holder">
				 		<select>
				 			<option>ตัวเลือก</option>
				 		</select>		
				 	</div>
				</td>
			</tr>
			<tr>
				<td>เลือกปีที่จดทะเบียน</td>
				<td>
					<div class="select-holder">
				 		<select>
				 			<option>ตัวเลือก</option>
				 		</select>		
				 	</div>
				</td>
			</tr>
			<tr>
				<td>เลือกประเภทรถ</td>
				<td>
					<div class="select-holder">
				 		<select>
				 			<option>ตัวเลือก</option>
				 		</select>		
				 	</div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><div class="asset-btn">
						<a href="#">
						<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
						<div class="btn-body">คำนวณ</div>
						<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
					</a>
					</div></td>
			</tr>
		</table>
			
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
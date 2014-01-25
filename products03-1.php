<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="">
<head><?php require('inc_header.php'); ?></head>
<body>
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
				<li><a href="#">ประกันภัยรถยนต์ประเภท 3 พิเศษ</a></li>
			</ul>
		</div>
		<hr>
		<div class="product-name">
			<div class="ico"><img src="images/exampleicon.png" alt="exampleicon" width="46" height="46" /></div>
			<h2>ประกันภัยรถยนต์ประเภท 3 พิเศษ</h2>
		</div>
		<div class="product-banner">
			<img src="images/productsbanner/productsbanner04.jpg" alt="productsbanner04" width="630" height="200">
		</div>
		<div class="tab-menu">
			<ul>
				<li class="active"><a href="products03-1.php">รายละเอียด</a></li>
				<li><a href="products03-2.php">เงื่อนไข</a></li>
			</ul>
		</div>
		<div class="product-content">
			<h3>รายละเอียดความคุ้มครองกรมธรรม์</h3>
			<table class="tb-pro">
				<tr><th></th><th class="b">Plan A</th><th class="b">Plan B</th></tr>
				<tr><th class="a">ความรับผิดต่อบุคคลภายนอก</th><th class="a"></th><th class="a"></th></tr>
				<tr>
					<td style="text-align:left;">ความเสียหายต่อ ชีวิตร่างกาย หรืออนามัย ต่อคน</td>
					<td style="text-align:right;">300,000</td>
					<td style="text-align:right;">500,000</td>
				</tr>
				<tr>
					<td style="text-align:left;">ความเสียหายต่อ ชีวิตร่างกายหรืออนามัย ต่อครั้ง</td>
					<td style="text-align:right;">10,000,000</td>
					<td style="text-align:right;">10,000,000</td>
				</tr>
				<tr>
					<td style="text-align:left;">ความเสียหายต่อ ทรัพย์สิน ต่อครั้ง</td>
					<td style="text-align:right;">1,000,000</td>
					<td style="text-align:right;">1,000,000</td>
				</tr>
				<tr><th class="a">รถยนต์เสียหาย สูญหาย ไฟไหม้</th><th class="a"></th><th class="a"></th></tr>
				<tr>
					<td style="text-align:left;">ความเสียหายต่อรถยนต์ที่เอาประกัน</td>
					<td style="text-align:right;">150,000</td>
					<td style="text-align:right;">150,000</td>
				</tr>
				<tr>
					<td style="text-align:left;">รถยนต์สูญหาย ไฟไหม้</td>
					<td style="text-align:right;">ไม่คุ้มครอง</td>
					<td style="text-align:right;">ไม่คุ้มครอง</td>
				</tr>
				<tr>
					<td style="text-align:left;">อุบัติเหตุส่วนบุคคลสำหรับผู้ขับขี่ และผู้โดยสาร</td>
					<td style="text-align:right;">50,000</td>
					<td style="text-align:right;">50,000</td>
				</tr>
				<tr>
					<td style="text-align:left;">(เก๋งรวม 5 คน กระบะรวม 4 คน)</td>
					<td style="text-align:right;"></td>
					<td style="text-align:right;"></td>
				</tr>
				<tr>
					<td style="text-align:left;">ค่ารักษาพยาบาล</td>
					<td style="text-align:right;">50,000</td>
					<td style="text-align:right;">50,000</td>
				</tr>
				<tr>
					<th class="a">ความเสียหายส่วนแรก (กรณีฝ่ายผิด)</th>
					<th class="a" style="text-align:right;">ฟรี</th>
					<th class="a" style="text-align:right;">ฟรี</th>
				</tr>
				<tr>
					<td style="text-align:left;">ประกันตัวผู้ขับขี่</td>
					<td style="text-align:right;">300,000</td>
					<td style="text-align:right;">300,000</td>
				</tr>
				
				<tr>
					<td class="sum" style="text-align:left;">เบี้ยประกันรวมภาษีอากร (ไม่รวมเบี้ย พ.ร.บ.)</td>
					<td class="sum" style="text-align:right;">6,636</td>
					<td class="sum" style="text-align:right;">7,200</td>
				</tr>
				
			</table>
			
		</div>
	</section>
</div>
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>
<div class="wrapper">
	<header>
	<div class="lang-sw">
	<?php
		if(!empty($_GET['id'])){
			$add="?id=".$_GET['id']."&";
		}else {
			$add="?";
		}
	?>
	<?php
		if($_SESSION["lang"] == "th"){
	?>
			<ul>
				<li class="th"><a href="<?=$_SERVER["PHP_SELF"]?><?=$add?>lang=en">EN</a></li>
			</ul>
	<?php }else {?>
			<ul>
				<li class="en"><a href="<?=$_SERVER["PHP_SELF"]?><?=$add?>lang=th">TH</a></li>
			</ul>
	<?php }?>
			
		</div>
		<div class="clear" style="height:21px;"></div>
		<div class="mainlogo"><a href="index.php"><h1>สินทรัพย์ประกันภัย</h1></a></div>
		<?php
			if(!isset($_SESSION['EMAIL'])){
		?>
		<form id="myform" method="post" action="chk_login.php">
			<div class="member-form">
				<div class="hotline"><img src="images/hotline.jpg" alt="hotline" width="162" height="64" /></div>
				<div class="form">
					<div class="input-holder round"><input type="text" placeholder="email" name="email"></div>
					<div class="input-holder round"><input type="password" placeholder="password" name="password"></div>
					<div class="asset-btn">
						<a href="#" onclick="document.getElementById('myform').submit();">
							<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
							<div class="btn-body">เข้าสู่ระบบ</div>
							<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
						</a>
					</div>
					<div class="reg">
						<a href="member.php"><img src="images/reigistor.jpg" alt="reigistor" width="92" height="16" /></a>
						<a href="member-lostpassword.php"><img src="images/forgotpassword.jpg" alt="forgotpassword" width="92" height="16" /></a>
					</div>
				</div>
			</div>
		</form>
		<?php
			} else {
		?>		
			<div class="member-form">
				<div class="hotline"><img src="images/hotline.jpg" alt="hotline" width="162" height="64" /></div>
				<div class="form">	
		
		<?php
			echo '<div class="btn-body">';
			echo 'Welcome back : '.$_SESSION['EMAIL'].' | <a href="member-edit.php">Edit Profile</a>  | <a  href="logout.php">Logout</a>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			}
		?>
	
		<?php

			
			if($_SESSION["lang"] == "") { 
				$_SESSION["lang"] = "th";
			
		?>
		<nav class="top-nav">
			<ul>
				<li class="home"><a href="index.php"><img src="images/homeico.png" alt="homeico" width="23" height="25" /></a></li>
				<li class="mainmenu"><a href="#">เกี่ยวกับเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="aboutus-home.php">ประวัติสินทรัพย์ประกันภัย</a></li>
							<li><a href="aboutus-vision.php">วิสัยทัศน์ และพันธกิจ</a></li>
							<li><a href="aboutus-board.php">คณะกรรมการบริษัท</a></li>
							<li><a href="aboutus-companyboard.php">คณะผู้บริหาร</a></li>
							<li><a href="#">นโยบายบริษัท</a></li>
							<li><a href="aboutus-ISO.php">ISO : 9001:2008</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="products01-1.php?id=1">ผลิตภัณฑ์และบริการ</a>
					<div class="submenu">
					<ul>	
					<?php
						if($row_menu){
							foreach($row_menu as $rs_m){
							$rs_m->th_menu;
							
							echo '<li><a href="products01-1.php?id='.$rs_m->id_insurance.'">'.$rs_m->th_menu.'</a></li>';
							}
						}
					?>
					</ul>
					</div>
				</li><!--products.php-->
				<li class="mainmenu"><a href="#">ข้อมูลนักลงทุน</a>
					<div class="submenu">
						<ul>
							<li><a href="report01.php">รายงานประจำปี</a></li>
							<li><a href="report02.php">ฐานะทางการเงินและผลการดำเนินงาน</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="news.php?id=1">ข่าวสารและกิจกรรม</a></li>
				<li class="mainmenu"><a href="#">ร่วมงานกับเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="career-list.php">ตำแหน่งงานว่าง</a></li>
							<li><a href="career-form.php">สมัครงานออนไลน์</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="#">ติดต่อเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="contactus-head.php">ที่อยู่และการติดต่อ</a></li>
							<li><a href="complain.php">ข้อเสนอแนะ</a></li>
							<li><a href="faq.php?id=1">FAQ</a></li>
						</ul>
					</div>
				</li>
			</ul>
		
			<div class="input-holder round">
				<input  type="text" placeholder="search">
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$(".mainmenu").hoverIntent(function(){
					if($(this).find(".submenu").length>0){
						$(this).addClass("hover");
						$(this).find(".submenu").slideToggle();
						}
					},function(){
						var object =$(this);
						setTimeout(function(){
							$(object).find(".submenu").slideUp();
							$(object).removeClass("hover");
						},200);
					});
				})
							</script>
		</nav>
		<?php }  else if($_SESSION["lang"] == "en"){ ?>
		<nav class="top-nav">
			<ul>
				<li class="home"><a href="index.php"><img src="images/homeico.png" alt="homeico" width="23" height="25" /></a></li>
				<li class="mainmenu"><a href="#">About us</a>
					<div class="submenu">
						<ul>
							<li><a href="aboutus-home.php">ประวัติสินทรัพย์ประกันภัย</a></li>
							<li><a href="aboutus-vision.php">วิสัยทัศน์ และพันธกิจ</a></li>
							<li><a href="aboutus-board2.php">คณะกรรมการบริษัท</a></li>
							<li><a href="aboutus-board.php">คณะผู้บริหาร</a></li>
							<li><a href="#">นโยบายบริษัท</a></li>
							<li><a href="aboutus-ISO.php">ISO : 9001:2008</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="products01-1.php?id=1">Product and Service</a>
				<div class="submenu">
					<ul>	
					<?php
						if($row_menu){
							foreach($row_menu as $rs_m){
							$en=$rs_m->en_menu;
							
							echo '<li><a href="products01-1.php?id='.$rs_m->id_insurance.'">'.$rs_m->en_menu.'</a></li>';
							}
						}
					?>
					</ul>
					</div>
				</li><!--products.php-->	
				<li class="mainmenu"><a href="#">Investor</a>
					<div class="submenu">
						<ul>
							<li><a href="report01.php">รายงานประจำปี</a></li>
							<li><a href="report02.php">ฐานะทางการเงินและผลการดำเนินงาน</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="news.php?id=1">Information and Activity</a></li>
				<li class="mainmenu"><a href="#">Join us</a>
					<div class="submenu">
						<ul>
							<li><a href="career-list.php">ตำแหน่งงานว่าง</a></li>
							<li><a href="career-form.php">สมัครงานออนไลน์</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="#">Contact</a>
					<div class="submenu">
						<ul>
							<li><a href="contactus-head.php">ที่อยู่และการติดต่อ</a></li>
							<li><a href="complain.php">ข้อเสนอแนะ</a></li>
							<li><a href="faq.php?id=1">FAQ</a></li>
						</ul>
					</div>
				</li>
			</ul>
		
			<div class="input-holder round">
				<input  type="text" placeholder="search">
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$(".mainmenu").hoverIntent(function(){
					if($(this).find(".submenu").length>0){
						$(this).addClass("hover");
						$(this).find(".submenu").slideToggle();
						}
					},function(){
						var object =$(this);
						setTimeout(function(){
							$(object).find(".submenu").slideUp();
							$(object).removeClass("hover");
						},200);
					});
				})
			</script>
		</nav>
		<?php } else if($_SESSION["lang"] == "th"){ ?>
		<nav class="top-nav">
			<ul>
				<li class="home"><a href="index.php"><img src="images/homeico.png" alt="homeico" width="23" height="25" /></a></li>
				<li class="mainmenu"><a href="#">เกี่ยวกับเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="aboutus-home.php">ประวัติสินทรัพย์ประกันภัย</a></li>
							<li><a href="aboutus-vision.php">วิสัยทัศน์ และพันธกิจ</a></li>
							<li><a href="aboutus-board.php">คณะกรรมการบริษัท</a></li>
							<li><a href="aboutus-companyboard.php">คณะผู้บริหาร</a></li>
							<li><a href="#">นโยบายบริษัท</a></li>
							<li><a href="aboutus-ISO.php">ISO : 9001:2008</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="products01-1.php?id=1">ผลิตภัณฑ์และบริการ</a>
					<div class="submenu">
					<ul>	
					<?php
						if($row_menu){
							foreach($row_menu as $rs_m){
							$rs_m->th_menu;
							
							echo '<li><a href="products01-1.php?id='.$rs_m->id_insurance.'">'.$rs_m->th_menu.'</a></li>';
							}
						}
					?>
					</ul>
					</div>
				</li><!--products.php-->
				<li class="mainmenu"><a href="#">ข้อมูลนักลงทุน</a>
					<div class="submenu">
						<ul>
							<li><a href="report01.php">รายงานประจำปี</a></li>
							<li><a href="report02.php">ฐานะทางการเงินและผลการดำเนินงาน</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="news.php?id=1">ข่าวสารและกิจกรรม</a></li>
				<li class="mainmenu"><a href="#">ร่วมงานกับเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="career-list.php">ตำแหน่งงานว่าง</a></li>
							<li><a href="career-form.php">สมัครงานออนไลน์</a></li>
						</ul>
					</div>
				</li>
				<li class="mainmenu"><a href="#">ติดต่อเรา</a>
					<div class="submenu">
						<ul>
							<li><a href="contactus-head.php">ที่อยู่และการติดต่อ</a></li>
							<li><a href="complain.php">ข้อเสนอแนะ</a></li>
							<li><a href="faq.php?id=1">FAQ</a></li>
						</ul>
					</div>
				</li>
			</ul>
		
			<div class="input-holder round">
				<input  type="text" placeholder="search">
			</div>

<script type="text/javascript">
				$(document).ready(function(){
					$(".mainmenu").hoverIntent(function(){
					if($(this).find(".submenu").length>0){
						$(this).addClass("hover");
						$(this).find(".submenu").slideToggle();
						}
					},function(){
						var object =$(this);
						setTimeout(function(){
							$(object).find(".submenu").slideUp();
							$(object).removeClass("hover");
						},200);
					});
				})
							</script>

				<!--
<script type="text/javascript">
					$(document).ready(function(){
						
						$(".mainmenu").hover(
							function(){
					            $(".submenu",this).stop(true,true).slideDown();	
							},
							function(){
								
								$(".submenu",this).stop(true,true).slideUp();
							}
						);
					})
				</script>
-->
		</nav>
		<?php } ?>
		
	</header>
	</div> 
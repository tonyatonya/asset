<div class="main-slide sliderkit">
	<div class="top-bar"></div>
	<div class="hotline-bar"></div>
	<div class="sliderkit-panels">
		<div class="sliderkit-panel">
			<img src="images/mainbanner.jpg" alt="mainbanner" width="960" height="300" />
		</div>
		<div class="sliderkit-panel">
			<img src="images/mainbanner.jpg" alt="mainbanner" width="960" height="300" />
		</div>
		<div class="sliderkit-panel">
			<img src="images/mainbanner.jpg" alt="mainbanner" width="960" height="300" />
		</div>
	</div>
</div>
<div>
	<img src="images/mainbannershadow.jpg" alt="mainbannershadow" width="962" height="44" />
</div>
		<!-- jQuery Plugin scripts -->
		<script type="text/javascript" src="script/external/jquery.easing.1.3.min.js"></script>
		<script type="text/javascript" src="script/external/jquery.mousewheel.min.js"></script>
		
		<!-- Slider Kit scripts -->
		<script type="text/javascript" src="script/sliderkit/jquery.sliderkit.1.9.2.pack.js"></script>

		<!-- Slider Kit launch -->
		<script type="text/javascript">
			$(window).load(function(){ //$(window).load() must be used instead of $(document).ready() because of Webkit compatibility				
				$(".main-slide").sliderkit({
					auto:true,
					autospeed:5000,
					//panelbtnshover:true,
					circular:true,
					fastchange:false,
					panelfx:"sliding",
					panelfxspeed:1000,
					panelfxeasing:"easeOutExpo"
				});
			});	
		</script>
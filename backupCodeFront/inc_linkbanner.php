<?php 
	@require_once('backoffice/init.php'); 
	$lin = $db->result(DB_PREFIX.'link_other');
?>
	<div class="service-box">
		<div class="service-title">ลิงค์หน่วยงานต่างๆ</div>	
			<div class="service-body">
				<?php if($lin){
						foreach($lin as $li){
							$li->link_name;
							$li->url_link;
							
							echo '<center>'.$li->url_link.'<br></center>';
						}
					}
				?>
			</div>
	</div>
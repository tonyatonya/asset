<?php
	@require_once('backoffice/init.php');
	//$row_faq 	= $db->result(DB_PREFIX.'faq_plus, ck_topic_faq','ck_faq_plus.id_faq = ck_topic_faq.id_topic AND id_faq='.$_GET['id']);
	$view		= $db->update(DB_PREFIX.'faq_plus','view_faq=view_faq+1','id_faq='.$_GET['id']);
?><!--
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title></title>
	<meta name="description" content="" />
  	<meta name="keywords" content="" />
	<meta name="robots" content="" />
</head>
<body>
-->
<?php 
		/*if($row_faq){
			foreach($row_faq as $rf){
						$name_faq	=$rf->name_faq;
						$topic_name	=$rf->topic_name;
						$email_faq	=$rf->email_faq;
						$tel_faq	=$rf->tel_faq ;
						$subject	=$rf->subject ;
						$detail_faq	=$rf->detail_faq;
						$detail_faq_edit	=$rf->detail_faq_edit;
						$answer_detail		=$rf->answer_detail;
						$view_faq	=$rf->view_faq;
						$date_faq	=$rf->date_faq;
						$answer		=$rf->answer;
						$active		=$rf->active;
						$ref_ans	=$rf->ref_ans;
						$date_ans	=$rf->date_ans;
					}
			}*/
			
			$a = $db->record(DB_PREFIX.'faq_plus','id_faq = '.$_GET['id']);
			if(!empty($a)){
				$b = $db->record(DB_PREFIX.'topic_faq','id_topic = '.$a->ref_topic_faq);
?>
<div class="faq-body">
	<div class="section quiz-topinfo">	
		<div class="quiz-mode">
			<span>หมวดคำถาม :</span> 
			<?php echo $topic_name?>
		</div>
		<div class="quiz-form">
			<span>คำถามจาก :</span> <?=$name_faq?>
		</div>
	</div>
	<div class="section question-section">
		<div class="section-info">
			<div class="section-title">คำถาม : </div>
			<div class="section-date">
			<?php
				if($a->active_detail == 0){
					echo $a->detail_faq;
				} else {
					echo $a->detail_faq_edit;
				}
			?></div>
			<div class="section-content">
				<p><?=$subject?></p>
			</div>
		</div>
		<div class="section-content"></div>
	</div>
	<div class="section answer-section">
		<div class="section-title">รายละเอียด :</div>
		<div class="section-content">
			<p>
				<?=$detail_faq?>
			</p>
		</div>
	</div>
	<div class="section quiz-meta">
		<div class="section-title">คำตอบจากสินทรัพย์ประกันภัย :<span style="color:#959595;">โดยแผนกลูกค้าสัมพันธ์</span></div>
		<div class="section-content"><?=$answer?></div>
		<div class="section-bottom-info">
		ตอบเมื่อ<?=$date_ans?>บันทึกข้อมูลโดย <?=$ref_ans?>
		</div>
	</div>
	<div class="clear" style="height:20px;"></div>
	<div class="asset-btn">
					<a  onclick="parent.$.colorbox.close(); return false;" href="#">
					
						<div class="btn-left"><img src="images/btn-leftbg.png" alt="btn-leftbg" width="7" height="26" /></div>
						<div class="btn-body">ปิดหน้าต่าง</div>
						<div class="btn-right"><img src="images/btn-rightbg.png" alt="btn-rightbg" width="7" height="26" /></div>
					</a>
	</div>
</div>
<?php
			}
	?>

<!--
</body>
</html>
-->
<style>
.faq-body{
	max-width: 600px;
	min-width: 320px;
	margin-left: auto;
	margin-right: auto;
	overflow: hidden;
}
.faq-body .section{
	width: 95%;
	margin-left: auto;
	margin-right: auto;
	border-radius: 10px;
	overflow: hidden;
	position: relative;
}
.quiz-topinfo{
	display: block;
	clear: both;
	margin-top: 10px;
	padding: 5px;
	background-color: white;
}
.quiz-topinfo .div{
	display: inline;
}
.quiz-mode{
	display: inline;
	float: left;
	/* width: 60%; */
}
.quiz-form{
	width: 30%;
	display: inline;
	float: right;
}
.question-section{
	background-color: #ff9999;
	padding: 5px;
}
.quiz-mode span, .quiz-form span{
	color: #b40000;
}
.section-title{
	width: 80%;
	height: auto;
	display: inline;
	float: left;
	margin-top: 5px;
}
.section-date{
	width: 10%;
	height: auto;
	color: white;
	display: inline;
	float: right;
	margin-top: 5px;
}
.section-content{
	display: block;
	clear:both;
	margin-top: 5px;
	margin-bottom: 5px;
}
.section-title,.section-content,.section-bottom-info{
	margin-left: 20px;
}
.section-bottom-info{
	color:#959595;
}
.answer-section{
	background-color: #e1e1e1;
	padding: 5px;
	margin-top: 10px;
}
.quiz-meta{
	background-color: #f5f5f5;
	padding: 5px;
	margin-top: 10px;
}
.asset-btn{
	margin-left:45%;
	margin-bottom: 30px;
}
#cboxClose{
	display: none;
}
</style>
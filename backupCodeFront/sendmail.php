<?php
include("../mimemail.inc.php");

//if($_POST["email"]){
	  
   echo $tName=$_POST["name"];
  // $tCompany=$_POST["tCompany"];
   $tEmail=$_POST["email"];
   //$tWebsite=$_POST["tWebsite"];
   //$tMessage=$_POST["tMessage"];
   
  // $mess=$tWebsite."<br/>".$tMessage;
 
 $mail = new MIMEMAIL("HTML"); // ส่งแบบ HTML
 $mail->senderName = $tName; // ชื่อผู้ส่ง
 $mail->senderMail = $tEmail; // อีเมลล์ผู้ส่ง
 //$mail->bcc = "bcc@email"; // ส่งแบบ bind carbon copy
 $mail->subject = "ส่งข้อความถึงเรา"; // หัวข้ออีเมลล์
 $mail->body = "testtt";   // ข้อความ หรือ HTML ก็ได้
 //$mail->attachment[] = "path_to_file1/filename1"; // ระบุตำแหน่งไฟล์ที่จะแนบ
 $mail->create();
// $mail->send("contact@shomegarden.com"); // เมลล์ผู้รับ
$mail->send("mnw_ch007@hotmail.com"); // เมลล์ผู้รับ

   
  // }
?>
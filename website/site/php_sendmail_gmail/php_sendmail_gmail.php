<html>
<head>
<title>ShotDev.Com Tutorial</title>
</head>
<body>
<?php
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "dislayatul@gmail.com"; // GMAIL username
	$mail->Password = "93901020"; // GMAIL password
	$mail->From = "atuldislay@gmail.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "rentinfo";  // set from Namesite
	$mail->Subject = "RentInfo  sending mail."; 
	$mail->Body = "My Body & <b>My Description hello its kfjldskf</b>";

	$mail->AddAddress("atuldislay@gmail.com", "kfjdklfjdlkfjdklfj"); // to Address

	

	//$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	$mail->Send(); 
	
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->
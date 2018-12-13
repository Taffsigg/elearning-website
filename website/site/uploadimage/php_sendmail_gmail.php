<?php 
session_start();
?>


<html>
<head>
<title>ShotDev.Com Tutorial</title>
</head>
<body>
<?php

   echo $usrmail=$_SESSION[email];
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
	$mail->From ="$usrmail"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@shotdev.com"; // Reply
	$mail->FromName = "Acadmic Execellence";  // set from Namesite
	$mail->Subject = "Registration Successfull."; 
	$mail->Body = " <b>your user name and password are</b>";

	$mail->AddAddress($usrmail); // to Address

	

	//$mail->AddCC("member@shotdev.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@shotdev.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	$mail->Send(); 
	
?>
</body>
</html>
<!--- This file download from www.shotdev.com -->
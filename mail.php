<?php 
	include("\phpmailer\src\PHPMailer.php");

	$mail=new PHPMailer();
	$mail->isSMP();
	$mail->SMTPAuth= true;
	$mail->SMTPSecure='ssl';

	$mail->Host = 'smtp@gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username="munindrapator27@gmail.com";
	$mail->Password = 'munindra@123';
	$mail->SetFrom('no-reply@code.org');
	$mail->Subject = "hello world";
	$mail->Body = 'A test email';
	$mail->AddAddress("@mail");

	$mail->Send();
?>
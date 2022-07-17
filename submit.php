<?php
include('database.inc.php');
$msg="";
if(true){
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="180108.cse@student.just.edu.bd";
	$mail->Password="testp@ss1";
	$mail->SetFrom("180108.cse@student.just.edu.bd");
	$mail->FromName = 'CMS.JUST';
	$mail->addAddress("sujoncep@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject = 'New Appointment';

	$message_body = '
			<p>New Appointment Has been taken please check your dashbord</p>
			<p>Sincerely,</p>
			<p>CMS.JUST</p>
			';
			$mail->Body = $message_body;
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}
?>
<?php
function sendmail($tieude, $noidung, $mTo)
{
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer(true);
	$mail->CharSet= "utf-8";
	// $mail->SMTPDebug = 3;                            
	$mail->isSMTP();                                        
	$mail->Host = 'smtp.gmail.com;';                      
	$mail->SMTPAuth = true;                                 
	$mail->Username = 'vutiendung430@gmail.com';               
	$mail->Password = 'vutiendung300420';                     
	$mail->SMTPSecure = 'tls';                            
	$mail->Port = 587;                                    
	$mail->setFrom('vutiendung430@gmail.com','Vũ Tiến Dũng');
	$mail->addAddress($mTo);                  
	$mail->addReplyTo('vutiendung430@gmail.com', 'Thư cảm ơn');
	$mail->addBCC('vutiendung430@gmail.com');                      
	$mail->isHTML(true);                                  
	$mail->Subject = $tieude;
	$mail->Body  = $noidung;
	if(!$mail->Send()) {
        return 0;
    } else {
        return 1;
    }
}
  <?php

  	ob_start();

		require 'mail/class.phpmailer.php';
		require 'mail/PHPMailerAutoload.php';

		$mail            	= new PHPMailer();

		$mail->SMTPDebug 	= 0;                               // Enable verbose debug output
		 
		$mail->isSMTP();    
		                                 		// Set mailer to use SMTP
		$mail->Host      	= "tls://smtp.gmail.com:587";  // Specify main and backup SMTP servers
		$mail->SMTPAuth  	= true;                               // Enable SMTP authentication
		$mail->Username  	= 'rx.portal@gmail.com';                 // SMTP username
		$mail->Password = '21482149';                           // SMTP password
		$mail->Port = 587;                                    // TCP port to connect to
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->setFrom('rx.portal@gmail.com', 'rxportal');
		$mail->addAddress('ple_lek69@hotmail.com', 'Natruja');     // Add a recipient
		 
		 
		$mail->isHTML(true);  
		$mail->Subject = 'Here is the subject';                                // Set email format to HTML
		include('process.php');
		$page = ob_get_contents() ; 
		$mail->Body    = $page;
		ob_end_clean();

		// $body = file_get_contents("process.php");
		// $body .= eregi_replace("[\]",'',$body);
		 
		 
		$mail->AltBody = "This is the plain text version of the email content";
		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		}  
	 ?>  
  <?php
require 'mail/class.phpmailer.php';
require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->SMTPDebug = 4;                               // Enable verbose debug output
 
$mail->isSMTP();    
                                 		// Set mailer to use SMTP
$mail->Host = "tls://smtp.gmail.com:587";  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rx.portal@gmail.com';                 // SMTP username
$mail->Password = '21482149';                           // SMTP password
$mail->Port = 587;                                    // TCP port to connect to
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->setFrom('rx.portal@gmail.com', 'rxportal');
$mail->addAddress('natruja.k@jasmine.com', 'Natruja');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}  
 ?>  
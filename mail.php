<?php
$to='tanimamandal16@gmail.com';
$subject='Testing sendmail.exe';
$message='test message';
$headers  = 'From: purposeproject96@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>
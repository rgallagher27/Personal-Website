<?php
#YOUR E-MAIL
define('TO', 'ross_gallagher@rossgallagher.co.uk');
header('Content-Type: text/html; charset=utf-8');
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
##E-MAIL SUBJECT
define('SUBJECT', 'You have a new mail from your site!');
function sendEmail($to, $from, $subj, $body)
{
	$date = date( 'r' );
	$phpversion = phpversion();
	$boundary = md5( time() );
	$headers = "From: $from\n"."Date: $date\n"."Content-Type: text/html; charset=\"UTF-8\"\n";
	mail(trim($to), trim($subj), $body, $headers );
}
sendEmail(TO, trim($_POST['email']), SUBJECT, 'E-Mail from: '.$_POST['email'].' Message: '.nl2br($_POST['message']));
}
?>
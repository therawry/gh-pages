<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_url = $_POST['cf_url'];
$field_message = $_POST['cf_message'];

$mail_to = 'info@therawrycreative.com';
$subject = 'Message from a site visitor - theRawry.com: '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Website: '.$field_url."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to info@therawrycreative.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>
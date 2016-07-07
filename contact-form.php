<?php

$to      = "your-email@your-domain.com";
$subject = "New Contact Form Submission";
$message = trim(stripslashes($_POST['Message']));
$from    = trim(stripslashes($_POST['Email']));
$name    = trim(stripslashes($_POST['Name']));

$validationOK = true;

if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.htm\">";
  exit;
}

$body  = "";
$body .= "Name: "    . $name    . "\n";
$body .= "Email: "   . $from    . "\n";
$body .= "Message: " . $message . "\n";

$success = mail($to, $subject, $body, "From: <$from>");

if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.php\">";
} else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

?>

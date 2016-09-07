<?php
$from = "post@bigwwwave.com";
$to = "post@bigwwwave.com";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body .="Email: ";
$body .=$email;
$body .="\n";
$body .="Phone: ";
$body .=$phone;
$body .="\n";
$body .="Message: ";
$body .=$message;
$body .="\n";


$go = mail($to, $subject, $body, "From:<$from>");

if($go) {
    print("Da er meldingen sendt. Vi vil ta kontakt så fort som mulig!");
}
else{
    print("Unable to send!!");
}

?>
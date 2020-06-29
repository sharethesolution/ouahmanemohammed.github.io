<?php $name = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message'];
$formcontent="From: $name $lname \n Message: $message";
$recipient = "mohamedouahmane020@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
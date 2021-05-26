<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "saranbrl35@gmail.com";
$subject = "Contact form";
$txt ="Name = ". $name . "\r\n ""\r\n Message =" . $message;
$headers = "From: $email" . "\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
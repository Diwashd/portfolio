
<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "diwashdhital51@gmail.com";
$subject1 = $_POST['subject'];
$subject ="Enquiry from  www.diwashdhital.com.np";
$txt ="you have recieved a mail from". "r\n Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "r\n Subject =" . $subject1 ;
$headers = "From: ".$name . "\r\n ". " CC: diwashs648@gmail.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:portfolio.html");
?>
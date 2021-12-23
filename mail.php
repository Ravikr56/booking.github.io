<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['mobile'];

$to = "legendryaen76@mail.com";
$subject = "Mail From Booking form";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message. "\r\n Phone = ". $number;

$headers = "From: noreply@travel2trip.in" . "\r\n" .
"CC: captainmicky76@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
// redirect
header("Location:thankyou.html");
?>

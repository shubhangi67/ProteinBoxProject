<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];

$to = "dhealthcode@gmail.com";

$subject = "Mail From Website Protein Box";
$txt ="Name = ". $name . "\r\n  Email = " . $email ." number = " . $number . "\r\n Message =" . $message;
$headers = "From:protein-box.com" . "\r\n" .
"CC: utpalghosh30@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>

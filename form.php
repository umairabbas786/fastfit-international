<?php include "connection.php"; ?>
<?php
session_start();
if(isset($_POST['submit'])){
$to = "umairabbass786@gmail.com";
$name = $_POST['name'];
$subject = $_POST['subject'];
$from = $_POST['email'];
$txt = $_POST['message'];
$msg = "Name = $name\r\n" . "Sender = $from\r\n" . "Message = $txt\r\n";
$headers = "From: devilsadvocate070@gmail.com";

if(mail($to,$subject,$msg,$headers)){
    echo "success";
    $_SESSION['msg']="Feedback Submitted SuccessFully.";
}
else{
  $_SESSION['msg']="Error Submitting Feedback form.";
}
}
?>
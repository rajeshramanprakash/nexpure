<?php
if(isset($_POST['name']))
{
$name=$_POST['name'];
$email=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$formcontent="From: $name  \n Phone : $phone \n Email : $email   \n  Message: $message";
$recipient = "info@nexpuresystems.com";
$subject = "Enquiry from Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo"<script>alert('We will contact you as soon as possible')</script>";
echo"<script>window.location.href='index.html'</script>";
}
else
{
    echo"<script>alert('Please Try Again !!!')</script>";
echo"<script>window.location.href='contact.html'</script>";
}
?>
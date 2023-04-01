<?php
ob_start();
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);


$to = 'appblendersofficial@gmail.com';
$subject = "Inquiry";

$message = "
<html>
<head>
<style>
table, th, td {
  border: 2px solid black;
}
</style>
<title>New inquiry From Madhuli Industry </title>
</head>
<body>
<p>Inquiry Details</p>
<table style='width:100%'>
<tr>
  <td><b>Name:</b></td>
  <td>".$_POST['dzName']."</td>
</tr>
<tr>
  <td><b>Phone Number:</b></td>
  <td>".$_POST['dzOther[Phone]']."</td>
</tr>
<tr>
  <td><b>Email:</b></td>
  <td>".$_POST['dzEmail']."</td>
</tr>
<tr>
  <td><b>Message:</b></td>
  <td>".$_POST['dzMessage']."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:sales@shreeshaktipulley.com' . "\r\n";
$headers .= 'Cc: flowideinds@gmail.com' . "\r\n";
$headers .= 'Bcc: yashladani9@gmail.com' . "\r\n";
mail($to,$subject,$message,$headers);
ob_end_flush();
header("Location:thankyou.html"); exit;
?>

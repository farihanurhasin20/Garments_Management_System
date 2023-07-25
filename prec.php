<?php
require 'connection.php';
echo "date: " .date("d/m/Y");
       $date=date("d/m/Y");
       $sqli="SELECT * FROM clients where Client_Name=(SELECT Buyer_Name FROM new_order WHERE Shipment_Date='$date')";

       $result=$conn->query($sqli);
       $row=$result->fetch_assoc();


require_once('PHPMailer/PHPMailerAutoload.php');
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure='ssl';
$mail->Host ='smtp.gmail.com';
$mail->Port ='465';
$mail->isHTML();
$mail->Username='karimvaibest@gmail.com';
$mail->Password= 'karimvai570';
$mail->SetFrom('tasnin.siam@gmail.com');
$mail->Subject='Hello World';
$mail->Body ='hoye Gecche';
$mail->AddAddress('tasnin.siam@gmail.com');
$mail->Send();
 ?>

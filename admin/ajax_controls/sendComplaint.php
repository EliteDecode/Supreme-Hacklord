<?php

include('../includes/database/db_controllers.php');
include('../includes/phpmailer/sendmail.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$type = $_POST['type'];
$blockchain_type = $_POST['blockchain_type'];
$wallet = $_POST['wallet'];
$website = $_POST['website'];

$message = $_POST['message'];
$description = $_POST['description'];
$amount = $_POST['amount'];

$subject = 'Complaint Form';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo 'invalid email format';
} else {

  $message = "
  <div style='display: block; margin: 5px auto; width: 90%; font-family: arial; color: #223b45; : center;'>
    <img src='' />
    <div style='background: #fafafa; border-radius: 5px; margin: 10px 0; padding: 20px;'>
      <h3 style='font-family: arial; font-weight: 300'>Hi Norwegian Multinational,</h3>
      <p style='font-weight: 100;'>$message</p>
      
      <p style='font-weight: 100; font-size: 15px'>from: $firstname $lastname</p>
      <p style='font-weight: 100; font-size: 15px'>Phone: $phone</p>
      <p style='font-weight: 100; font-size: 15px'>Email: $email</p>
      <p style='font-weight: 100; font-size: 15px'>Type: $type</p>
      <p style='font-weight: 100; font-size: 15px'>Blockchain Type: $blockchain_type</p>
      <p style='font-weight: 100; font-size: 15px'>Wallet: $wallet</p>
      <p style='font-weight: 100; font-size: 15px'>Website: $website</p>
      <p style='font-weight: 100; font-size: 15px'>Description: $description</p>
      <p style='font-weight: 100; font-size: 15px'>Amount: $amount</p>
    </div>
    <h4 style='font-family: arial; font-weight: 100; text-align:center; font-size: 12px; '>Copyright &copy; <a href='https://www.norwegianmultinaltional.com' target='_blank'>Norwegian Multinational.</a> All rights reserved.</h4>
  </div>";
  $mailer = new SendMail();
  $sent = $mailer->send_mail($email, $subject, $message);
  
  if ($sent) {
      echo "success";
  }
}
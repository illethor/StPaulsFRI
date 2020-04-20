<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pnumber = $_POST['pnumber'];
  $email = $_POST['email'];

  $email_from = 'davidmongrain221@gmail.com';
  $email_subject = "New Form submission";
  $email_body = "You have received a new form submission.\n";

  $to = "davidmongrain221@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);


?>
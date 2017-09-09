<?php
  $name = $_POST['form_name'];
  $email = $_POST['form_email'];
  $message = $_POST['form_msg'];

  $to = "bubgirl17@gmail.com";
  $subject = "RIA Emails";
  $body = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$message;
  $headers = "From: " . $email;

	echo '<script> alert("your message has been successfully sent") </script>';

  //send email
  mail($to, $subject, $body, $headers);
?>

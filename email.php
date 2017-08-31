<?php

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $body = $_REQUEST['body'];

  $to = "hiro@mrhiro.com"; //recipient

  $subject = "RIA Emails"; //subject
  $header = "From: ". $name . " <" . $email . ">\r\n";

  if (mail($to, $subject, $body, $header)){
    include'thanks.php';
  } else {
    echo 'Error: something went wrong.';
  }

?>

<?php
if($_POST){
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $message = $_POST['form_msg'];

    console.log($_POST);

//send email
    mail("landon@thecallfamily.com", "From: " ,$email, $message);
    echo $_POST;
}
?>

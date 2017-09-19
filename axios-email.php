  <?php 
$_REQUEST = json_decode(file_get_contents('php://input'), true);

  $name = $_REQUEST['form_names'];
  $email = $_REQUEST['form_emails'];
  $msg = $_REQUEST['form_msgs'];
	echo $name;

  $to = "bubgirl17@gmail.com"; //recipient 

  $subject = "Axios Emails"; //subject 
  $header = "From: ". $name . " <" . $email . ">\r\n";


  if (mail($to, $subject, $msg, $header)){
	  
	 
  
  } else {
    echo 'Error: something went wrong.';
  }

?>



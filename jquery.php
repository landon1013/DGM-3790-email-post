<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery email-post</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">


</head>
  <body>
  <nav>
  	<ul>
  		<li>
  			<a href="index.html">html</a>
  		</li>
  		<li class="active">
  			<a href="jquery.php" >jQuery</a>
  		</li>
  	</ul>
  </nav>
  <main>
  	<section>
  		<form enctype="multipart/form-data" id="frmemail" onSubmit="alert('Thank you for filling out our response form')">
  			<fieldset class="margin-b">
  				<legend>Contact Me</legend>
  				<label for="form_name">Name:<input name="form_name" type="text" value="" required autofocus ></label>
  				<label for="form_email">Email:<input name="form_email" type="email" value=""></label>
  				<label for="form_msg">Message:<textarea name="form_msg" rows="5"></textarea></label>
  			</fieldset>
  			<input type="submit" name="submit" id="submit" value="Submit">
  		</form>
  	</section>
  	

  </main>

  <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="main.js"></script>
  </body>
</html>

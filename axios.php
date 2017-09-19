<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Axios -- Krista Bice</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
    <nav>
 	<ul>

			<a href="index.html"><li>html</li></a>


			<a href="jquery.php"><li >jQuery</li></a>
			<a href="axios.php"><li class="active">Axios</li></a>

	</ul>
  </nav>
  
<body>
  <div class="container">
    <fieldset>
    <legend>Axios</legend>
    <form  method="POST" id="axiosForm" enctype="multipart/form-data">
     
		
	
		   
        <span>Name:</span><br><input name="form_name" class="form_name" id="form_name" type="text" value=""/> <br> 
        <span>Email</span><br><input name="form_email" class="form_email" id="form_email" type="email" value="" /><br>
       <span>Message:</span><br> <textarea name="form_msg" class="form_msg" id="form_msg" ></textarea><br>
        <input name="submit" class="submit" type="submit" value="submit" onclick="return foo()"/>
    </form>
      <div class="panel-body" id="postResult"></div>
    </fieldset>

<script> function foo(){
		
			
	var name = document.getElementById('form_name').value;	
	var email = document.getElementById('form_email').value;	
	var msg = document.getElementById('form_msg').value;	
		
		
    console.log("run function");    
   axios.post('axios-email.php', {
   form_names: name,
    form_emails: email,
	form_msgs: msg
	 
	
  })
 
  .then(function (response) { 
	    
	   
	   console.log('thank you');
	   
	   console.log(response);
	   window.location.href = 'thanks.php';

	
	//return  
  })
  .catch(function (error) {
	   
    console.log("function error");
    console.log(error);
  });//end of post function
		
		}//close funciton foo 

		



    
</script>
</div>
	<script src="axios.js" type="text/javascript"></script>
	   <script src="node_modules/axios/dist/axios.js"></script>
    <script src="node_modules/jquery/dist/jquery.js"></script>
</body>

<!--<script src="https://unpkg.com/axios/dist/axios.min.js"></script>-->
 
    
	
</html>

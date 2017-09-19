/*
function foo(){
		
		
		
	var name = document.getElementById('form_name').value;	
	var email = document.getElementById('form_email').value;	
	var msg = document.getElementById('form_msg').value;	
		
		
    console.log("run function");    
   axios.post('email-php.php', {
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
	 
	

		
		}//close funciton foo */// JavaScript Document
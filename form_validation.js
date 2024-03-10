
var nameError=document.getElementById("nameError");

var pwdError=document.getElementById("pwdError");

var emailError = document.getElementById("emailError");

var submitError = document.getElementById("submitError");

	function validateName()	
	{

	    var name = document.getElementById("name").value;
	     
	     if(name.length==0)
	     {
	    		 nameError.innerHTML='*Name is required';
	   		 nameError.style.color="red";
	   		 return false;
	     }
	     if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/))
	     {
		 	nameError.innerHTML = "write full name";
			nameError.style.color="red";
		 	return false;    
	     }
	      		 nameError.innerHTML ='<i class="fas fa-check-circle text-success "></i>';
			//nameError.style.color="green";
			return true;
	}

	function validatePwd()
	{
   		var password=document.getElementById("password").value;
  		 if(password.length==0)
 		 {
  			 pwdError.innerHTML="*password is required";
  			 pwdError.style.color="red";
  			 return false;
  		 }
   		if(!password.match(/^[A-Za-z]\w{7,14}$/))
    		{
       			pwdError.innerHTML="password between 7 to 14 characters,contains atleast one numeric digit ,underscore,first character must be 				a letter";
       			 pwdError.style.color="red";
      		        return false;
    		}
     			 pwdError.innerHTML='<i class="fas fa-check-circle text-success"></i>';
			 //pwdError.style.color="green";
			  return true;
			      
  	}
	function validateEmail()
	{
	     var email=document.getElementById("email").value;
	     if(email.length==0)
	     {
		emailError.innerHTML="*Email is required";
		emailError.style.color="red";
		return false;
	     }
	    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/))
	     {
		 emailError.innerHTML="Email Invalid";
		 emailError.style.color="red";
		 return false;
	      }
		emailError.innerHTML='<i class="fas fa-check-circle text-success"></i>';
		//emailError.style.color="green";
		return true;
		
	}
	function validateForm()
	{
    	 if(!validateName() ||!validatePwd()||!validateEmail())
	  {
		submitError.style.display="block";
		submitError.innerHTML="please fix error to submit";
		submitError.style.color="red";

		setTimeout(function(){submitError.style.display="none";},3000);
		return false;
	   }
}



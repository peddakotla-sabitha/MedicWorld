
var EmailError = document.getElementById("EmailError");

var PwdError=document.getElementById("PwdError");

var SubmitError = document.getElementById("SubmitError");

	function ValidateEmail()
	{
	     var email=document.getElementById("Email").value;
	     if(email.length==0)
	      {
		EmailError.innerHTML="*Email is required";
		EmailError.style.color="red";
		return false;
	      }
	    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/))
	     {
		 EmailError.innerHTML="Email Invalid";
		EmailError.style.color="red";
		return false;
	     }
		EmailError.innerHTML='<i class="fas fa-check-circle text-success "></i>';
		//EmailError.style.color="green";
		return true;
	  }

	function ValidatePwd()
	{
		   var password=document.getElementById("Password").value;
		   if(password.length==0)
		    {
			   PwdError.innerHTML="*password is required";
			   PwdError.style.color="red";
			   return false;
		    }
		   if(!password.match(/^[A-Za-z]\w{7,14}$/))
		    {
		       PwdError.innerHTML="password between 7 to 14 characters,contains atleast one numeric digit ,underscore,first character must be 				a letter";
			PwdError.style.color="red";
			return false;
		    }
		      PwdError.innerHTML='<i class="fas fa-check-circle text-success "></i>';
		     // PwdError.style.color="green";
		      return true;
	      
	   }
	function ValidateForm()
	{
     		if(!ValidatePwd()||!ValidateEmail())
		{
			SubmitError.style.display="block";
			SubmitError.innerHTML="wrong email or password entered";
			SubmitError.style.color="red";

			setTimeout(function(){SubmitError.style.display="none";},3000);
			return false;
		}
	}

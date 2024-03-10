<html>
	<head>

		<title>
			Account creation or sign in	
		</title>
<!--.......................css style--...........................-->

<link rel="stylesheet" href="formstyle.css">

<!--...............bootstrap cdn...............................-->
			<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous">	
			</script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 	rel="stylesheet"                                   integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-                          geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	</head>

<body>
<div class="bg_container">
 <img src='logo3.png' width="200px" height="100px" align="right">
 <form action="database_store.php" method="post">
     <div class="card  d-flex align-items-center  bg-dark text-light rounded place" style="width:540px;" >
        <h3 class="mt-2">Create an account</h3>
        <div class="form-text text-light">already have an account <a   href="login.php"  target="_self">sign in</a>
        </div>

         <div class="card-body ">
         
                <!--.........................................userName........................................................-->

            <input class="form-control mb-2 " type="text" placeholder="Full Name"   name="name" id="name" onkeyup="validateName()">
            <span id="nameError" class="form-text"></span>
            
                 <!--.........................................userPassword........................................................-->

           <input class="form-control mb-2 mt-2" type="password" placeholder="Password" name="password" id="password" onkeyup="validatePwd()">
            <span id="pwdError" class="form-text"></span>
               
                 <!--.........................................usereEmail........................................................-->

            <input class="form-control mb-2 mt-2" type="email" placeholder="abc@gmail.com" name="email" id="email" onkeyup="validateEmail()">
            <span id="emailError" class="form-text"></span><br>
	
                   <!--.........................................SubmitButton........................................................-->
               <button class="btn btn-primary mt-2 mb-2 w-100 " id="unique" onclick="return validateForm()">Create your account</button>
              <span id="submitError" class="form-text"></span>
             
                 <!--.........................................Sign in through google........................................................
                 <p>or sign in with:</p>
                                   <div class="d-flex justify-content-center text-center mt-2 pt-1 mb-3">
                                   
                                <button class="btn btn-success w-75"><a href="#!" class="text-white"><i class="fa-brands fa-google"></i></a> &nbsp;&nbsp; Google</button>
                                    </div> -->

          </div>
     </div>
  </form>
</div>                          
                <!--.........................................validating userdetails........................................................-->
                        
<script src='form_validation.js'></script>

  
</body>
</html>

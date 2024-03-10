<html>
	<head>

		<title>	
		Account creation or sign in
		</title>

<link rel="stylesheet" href="formstyle.css">

<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"                                   integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-                          geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	</head>

<body>

<div id="LOGIN" class="bg_container">

  <img src='logo3.png' width="200px" height="100px" align="right">
  <div class="container bottom-0 end-50">
    <form method="post" action="detailCheck.php">
       <div class="card w-50 bg-dark align-items-center rounded" style="width:440px;">

            <h3 class="text-light mt-3">Sign in</h3>

         <div class="card-body">

                         <!--.........................................usereEmail........................................................-->
          <input class="form-control mb-2 mt-2 border border-info" type="email" placeholder="abc@gmail.com" name="email" id="Email" onkeyup="ValidateEmail()">
            <span id="EmailError" class="form-text"></span>
                        <!--.........................................userPassword........................................................-->

          <input class="form-control mt-3 mb-2 border border-info" type="password" placeholder="password" name="password" id="Password" onkeyup="ValidatePwd()">
             <span id="PwdError" class="form-text"></span>

                          <!--.........................................Log in button........................................................-->

         <button class="btn btn-primary w-100 mb-3 mt-3" onclick="return ValidateForm()" type="submit">Log in</button>
         <span id="SubmitError" class="form-text"></span>
                              
                          <!--.........................................log in through google........................................................
            <p class="text-light">or log in in with:</p>
               <div class="d-flex justify-content-center text-center mt-2 pt-1 mb-3">
                 <button class="btn btn-success w-75"><a href="#!" class="text-white"><i class="fa-brands fa-google"></i></a> &nbsp;&nbsp; Google</button>
              </div> -->
                  
        </div>
     </div>
  </form>
 </div>
</div>
                  <!--...............................validatinguserdetails........................-->                                  
                                    <script src='login_validation.js'></script>"
                                    

       <!--  <button class="btn btn-primary w-100 mb-3 mt-3" onclick="return ValidateForm()" type="submit" "><a href="medicinepage.php" class="text-light">Log in</a></button>
         <span id="SubmitError" class="form-text"></span>-->

	</body>
</htmL>

  


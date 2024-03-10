<html>
	<title>	
		Contact Us
	</title>
<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"                                   integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-                          geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<body class="bg-dark text-white">

	<h2>Contact Medic World</h2><br><br>
		Due to the large amount of email we receive, Medic World is unable to reply to every email. Read through our FAQ page for answers to 			commonly asked questions. For specific inquiries about medications, we recommend posting to our support community.<br><br>

		The Medic World website is designed to facilitate the search for drug information, including drug interactions and pill images on U.S. 			pharmaceutical products. For additional information, we recommend consulting other Internet resources, institutional or retail 			pharmacies, university-based drug information centers, poison control centers, or healthcare professionals.<br><br>

		if you have any query contact us mobile number: 9347282616<br><br>
<div class="card w-50 mt-2">
 <form method = "post" action = "">
        Full Name:
        <input type="text"  name="name" placeholder="Enter your name" id="contact-name" onkeyup="validateName()" class="form-control w-75">
	<br/>
	<span id = "name-error"></span>
	
        

     
        Phone No.:
        <input type="tel" placeholder="123 456 7890" name="number" id="contact-phone" onkeyup="validatePhone()" class="form-control w-75">
	<br/>
        <span id = "phone-error"></span><br/>
	
      
      
        Email Id:
        <input type="email" placeholder="Enter Email" name="email" id="contact-email" onkeyup="validateEmail()" class="form-control w-75">
	<br/>
	<span id = "email-error"></span><br/>
	
      
     
        Your Message:
        <textarea rows="5" placeholder="Enter your query" id="contact-message" onkeyup="validateMessage()" class="form-control w-75"></textarea>
	<br/>
	<span id = "message-error"></span><br/>
	
<br/>
<br/>
     <button onclick="return validateForm()">Submit</button>
    <span id = "submit-error"></span>
  </form>
</div>
 
</body>
</html>

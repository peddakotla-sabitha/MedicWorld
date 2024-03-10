<html>
	<head>

		<title>
			Account creation or sign in
		</title>
<!--.......................css style--...........................-->

<link rel="stylesheet" href="formstyle.css">

<!--...............bootstrap cdn...............................-->
<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"                                   integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-                          geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	</head>
	<div class="container bg-dark text-white mt-4">
 		<img src='logo.png' width="200px" height="100px" align="right">
			<form action="pill_identifier1.php" method="post" enctype="multipart/form-data">
				<label class="form-label " for="customFile">
					Upload your profile
				</label>
				<input type="file" class="form-control w-50 " id="customFile" name="file"  />
				<div class="form-text text-white">
					only jpg,jpeg & png files are allowed,file size should be less than 500kb
				</div>
				<button class="btn btn-primary mt-2 bg-dark text-white" style="margin-left:500px;">
					Submit
				</button>
			</form>
	</div>

    </body>
</html>

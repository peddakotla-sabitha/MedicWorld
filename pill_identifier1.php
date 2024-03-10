<?php
session_start();

$target_dir="uploads/";

/*echo basename($_FILES["file"]["name"])."<br>";*/
$target_file=$target_dir.basename($_FILES["file"]["name"]);

/*echo $target_file;*/
$uploadok=1;

$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if($_FILES["file"]["size"]>500000)
	{
	     	/*echo "sorry file is too large";*/
		$uploadok=0;
	}
	if($imageFileType!="jpg"&&$imageFileType!="png"&&$imageFileType!="jpeg")
	{
		/*echo "sorry only jpg,jpeg & png files are allowed";*/
		$uploadok=0;
	}
	if($uploadok==0)
	{
			/*echo "sorry,your file was not uploaded";*/
	}
	else if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
	{
			/*echo "the file".basename($_FILES["file"]["name"])."has been uploaded";*/
	}
	else
	{
			/*echo "there was an error an uploading your file";*/
	}
 	echo "<br>"."<br>";

?>
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

<body style="background-color: black; text-align:center;">

	<img src="<?php echo 'uploads/'.$_FILES['file']['name'];?>"><br>

		<?php echo "<h2 style='color: white;'>".$_SESSION["name"]."</h2>";?>

	<a href="login.php" style="text-decoration: none;"><button class="btn btn-outline-light text-light bg-dark mt-2

 						mb-3 " align="right">LOG OUT</button></a>
</body>



<?php

$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
	if(!$conn)
	{
     		 die("connection falied:".mysqli_connect_error());
	}
  	         echo "connected";
$sql="CREATE DATABASE userDetails"; 
mysqli_query($conn,$sql);

?>

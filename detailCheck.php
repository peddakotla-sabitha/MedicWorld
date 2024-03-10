<?php
 $conn=mysqli_connect("localhost","root","","userDetails");
$email=$_POST['email'];
$password=$_POST['password'];


$login="select * from accountDetails where EmailId='$email' and Password='$password';";

$result=mysqli_query($conn,$login);

$resultcheck=mysqli_num_rows($result);


if($resultcheck!=1)
    {

        echo "<script  type='text/javascript'>window.location.href='login.php';
    		alert('wrong email id or password entered');
                </script>";
             
    }
else{
		echo" <script type='text/javascript'>window.location.href='medicinepage.php';
    
             		 </script>";
}















/* header("location:medicinepage.php");
$query="select EmailId from accountDetails;";
$query1="select Password from accountDetails;";
$query="select * from accountDetails where EmailId=$email;";
$s=mysqli_prepare($conn,$query);
mysqli_bind_param($s,"s",$email);
$e=mysqli_stmt_execute($s);
$f=mysqli_stmt_get_result($e);
echo $f;

$query1="select * from accountDetails where Password=$password;";
$s=mysqli_prepare($conn,$query);
mysqli_bind_param($s,"s",$email);
 
if(mysqli_stmt_execute($s))
{
           header("location:medicinepage.php");
}
else
{
	header("location:login.php");
}

if(mysqli_query($conn,$query) && mysqli_query($conn,$query1))
{
           header("location:medicinepage.php");
}
else
{
	header("location:login.php");
}
if(mysqli_query($conn,$query){
$result=mysqli_query($conn,$query);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
           echo $row['Password']."<br>";
     }
}
else{
    echo "not";
}*/
?>

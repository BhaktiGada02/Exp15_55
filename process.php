<?php
$servername="localhost";
$username="root";
$password="";
$database="cppl";
$con = mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['Submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$passd = $_POST['passd'];

$sql = "INSERT INTO `register` (fname,lname,gender,email,passd) VALUES ('$fname', '$lname', '$gender', '$email','$passd')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<script>alert('New record inserted successfully')</script>";
	echo "<script>window.open('register.php'),'_self')</script>";
}
else
{
	echo "Are you a genuine visitor?";
	
}
mysqli_close($con);
}
?>
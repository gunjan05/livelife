<?php
include("connection.php");
$firstname;
$lastname;
$mobile;
$password;
$sql;

if(isset($_POST['fname']))
{
$firstname = $_POST['fname'];
}

if(isset($_POST['lname']))
{
$lastname = $_POST['lname'];
}

if(isset($_POST['mobile']))
{
$mobile = $_POST['mobile'];
}

if(isset($_POST['psw']))
{
$password = $_POST['psw'];
}

if($_POST['save'] == "save")
{
$sql = "insert into users(firstname,lastname,mobile_number,password) values ('$firstname','$lastname',$mobile,'$password')";
}

$result=mysqli_query($conn,$sql);

if( $result == true)
{
	echo "Registered Successfully";
}
else
{
	echo "Record not saved";
}
mysqli_close($conn);
?>
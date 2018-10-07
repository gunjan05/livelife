<?php include("connection.php");
$name;
$mobile;
$message;
$email;
$sql;

if(isset($_POST['name']))
{
$name = $_POST['name'];
}

if(isset($_POST['mobile']))
{
$mobile = $_POST['mobile'];
}

if(isset($_POST['email']))
{
$email = $_POST['email'];
}

if(isset($_POST['message']))
{
$message = $_POST['message'];
}
echo $_POST['save'];
if($_POST['save'] == "save")
{
$sql = "insert into contact(name,email,mobile,message) values ('$name','$email',$mobile,'$message')";
}

$result=mysqli_query($conn,$sql);

if( $result == true)
{
	header('Location:index.php');
}
else
{
	echo "Error";
}
mysqli_close($conn);
?>
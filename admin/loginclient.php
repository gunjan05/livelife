<?php
include("connection.php");
session_start();
$sql;
$username;
$psw;
$username=trim(strip_tags($_POST['username']));
$psw=trim(strip_tags($_POST['pass']));

include_once './classes/Crud.php';
$crud=new crud();
	$query1 = "select * from admin where username='$username' and password='$psw'";

	$result1 = $crud->getData($query1);

if (count($result1) > 0) {
      $_SESSION['cilentlog'] = $result1[0];
?>
<script language="javascript">
    window.location.href = "homead.html";
</script>
<?php
   
}
 else
{
?>
<script language="javascript">
	alert('Please enter correct username and password');
    window.location.href = "adminlogin.html";
</script>
	
<?php	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>signup page</title>
</head>

<body>
<?php


if(isset($_POST['submit'])){
	$fullname=$_POST['fullname'];
	echo "name:".$fullname."<br/>";
	$address=$_POST['address'];
	echo "address:".$address."<br/>";
	$gender=$_POST['gender'];
	echo "gender:".$gender."<br/>";
	$email=$_POST['email'];
	echo "email:".$email."<br/>";
	
	$Username=$_POST['username'];
	echo "username:".$Username."<br/>";
	
	$Password=$_POST['password'];
	echo "Password:".$Password."<br/>";

	$Cpassword=$_POST['cpassword'];
	echo "Confirm-Password:".$Cpassword;
}
?>
	   
  

</body>
</html>





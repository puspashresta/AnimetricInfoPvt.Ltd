
<!DOCTYPE html>
<html>
<!--<link href="login.css" rel="stylesheet" type="text/css" />-->
<head>
	<title>login page</title>
</head>

<body>
<?php
//include 'connection.php';

if(isset($_POST['submit'])){
	$Username=$_POST['username'];
	echo "Username:".$Username."<br/>";

	$Password=$_POST['password'];
	echo "Password:".$Password;
}
?>
	   
  

</body>
</html>




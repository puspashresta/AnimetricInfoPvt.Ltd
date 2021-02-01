<!DOCTYPE html>
<html>
<link href="signup.css" rel="stylesheet" type="text/css" />
<head>
	<title> Sign up page</title>
		 
	
	
</head>
<body>
	
	<form method="POST" action="connection.php">
		<div class="container">
			<center> <h1><u> Sign-up Form </u></h1> </center> 
			<label>Full Name:</label><br/>
			<input type="text" placeholder="Enter your name" name="fullname" required><br>
			<label>Address:</label><br/>
			<input type="text" placeholder="Enter Address" name="address" required><br> 
			<label>Gender:</label>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<br/>
			 <label>Email:</label><br/>
			<input type="text" placeholder="Enter your email" name="email" required><br>
			<label>Username:</label><br/>
			<input type="text" placeholder="Enter Username" name="username" required><br> 
			<label>Password:</label><br/>
			<input type="password" placeholder="Enter Password" name="password" required><br>
			<label>Confirm Password:</label><br/>
			<input type="password" placeholder="Enter Password" name="cpassword" required><br>
			<button type="submit" name="submit">Sign up</button>  
			<button type="button" class="cancelbtn"> Cancel</button> 
			<button type="button"><a href="loginpage.html">Registerd User</a></button>
		</div>	
	</form>
</body>
</html>

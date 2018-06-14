<!doctype html>
<html>
	
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<title>School To Do's</title>
</head>

<body>
	<!-- Navigation -->
	<nav class="w3-bar w3-orange">
		<a href="#home" class="w3-button w3-bar-item" style="font-weight: bold; font-size: larger">School To Do's</a>
	</nav>
	
	<center>
		<br><br>
		<h1 style="font-weight: bold; margin: 0px 0px 0px 50px">Log In</h1>
		<br><br>
		<form id="login" style="font-size: larger">
			Username: <input type="text" id="user" name="user"><br><br>
			Password: <input type="password" id="pass" name="pass"><br><br>
			<!-- <input type="submit" id="login" name="login" value="Log In" style="margin: 0px 0px 0px 75px"> -->
			<input type="button" value="Log In" style="margin: 0px 0px 0px 75px" onClick="window.location.href='task.html'">
		</form>
		<br><br><br>
		<p style="font-size: small">
			Forgot your password?
			<input type="button" id="forgot" name="forgot" value="Reset Password" onClick="window.location.href='reset.html'"><br><br>
			Not a member yet? <input type="button" id="regist" name="regist" value="Register Now" onClick="window.location.href='registration.html'">
		</p>
	</center>
	
	<!-- Footer -->
	<footer>
		<hr />
		<p style="font-size: xx-small; padding-left: 50px" >&copy; 2018 - Megan Halley (Rasmussen College)</p>
	</footer>
</body>
	
</html>

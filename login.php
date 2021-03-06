<?php
if (isset($_SESSION["email"]) && isset($_SESSION["password"])){
	session_start();
	if (($_SESSION["email"] == $_POST["login_email"]) && ($_SESSION["password"] == $_POST["login_password"])){
		$user = $_SESSION["name"];
		echo "Welcome ". $user. "!!";

	}
}
// echo $_SESSION["email"];
// echo $_POST["login_email"];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login Page</title>
 </head>
 <body>
 	<form action="login.php" method="POST">
 		<label for="login_email">Email</label>
 		<input type="email" name="login_email">
 		<br>
 		<label for="login_password">Password</label>
 		<input type="password" name="login_password">
 		<br>
 		<input type="submit" value="Login">
 		 <p><a href="registeration.php"> Register Here</a></p>

 	</form>
 </body>
 </html>


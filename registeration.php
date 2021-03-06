

<?php 

if (isset($_POST["fname"]) && isset($_POST["email"]) && isset($_POST["email"]) && isset($_POST["password"])) {
	session_start();
	$_SESSION["name"] = $_POST["fname"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["phone"] = $_POST["phone"];
	$_SESSION["password"] = $_POST["password"];
}



?>



<!DOCTYPE html>
<html>
<head>
	<title>Registeration Page</title>
</head>
<body>

	<form action="registeration.php" method="POST">
		<label for="fname">Full Name</label>
		<input type="text" name="fname">
		<br>
		<label for="email">Email</label>
		<input type="email" name="email">
		<br>
		<label for="phone">Phone</label>
		<input type="number" name="phone">
		<br>
		<label for="password">Password</label>
		<input type="password" name="password">
		<input type="submit" >
	</form>

</body>
</html>






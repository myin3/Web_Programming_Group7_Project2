
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="jeopardystyle.css">
	<title>Sign Up</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 
		session_start()
	?>


	<main>
		<h1>Sign up for free!</h1>

		<form action="login.php" method="post">
			<strong><label class="left" for="Username">Username:</label></strong>
			<input type="text" name="Username" size="16" placeholder="Username">
			<br/>
			<strong><label class="left" for="Password">Password:</label></strong>
			<input type="password" name="Password" size="16" placeholder="Password">
			<br/><br/>
			<input type="submit" name="signup" value="Sign Up">
		</form>
	</main>
</body>
</html>
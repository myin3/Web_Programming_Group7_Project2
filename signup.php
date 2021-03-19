<?php
	session_save_path("./");
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="jeopardystyle.css">
	<title>Sign Up</title>
	<meta charset="utf-8">
</head>
<body>



	<main>
		<h1>Sign up for free!</h1>
			<?php 		

				$usernameErr = $passwordErr = "";
			    $Username = $Password = "";
				if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
					if($_POST['Username'] == "") {
						$usernameErr = "Username is required";
					}
					if($_POST['Password'] == "") {
						$passwordErr = "Password is required";
					}
				}
				
			?>

		<form method="post" name="Signup">
			<strong><label class="left" for="Username">Username:</label></strong>
			<input type="text" name="Username" size="16" placeholder="Username">
			<span class="error"><?php echo $usernameErr;?></span>
			<br/>
			<strong><label class="left" for="Password">Password:</label></strong>
			<input type="password" name="Password" size="16" placeholder="Password">
			<span class="error"><?php echo $passwordErr;?></span>
			<br/><br/>
			<input type="submit" name="signup" value="Sign Up">
		</form>

		<br>
		<a href="leader.php">Check out the High Scores here!</a>
		<?php 
		
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$_SESSION['Username'] = $_POST['Username'];
					$_SESSION['Password'] = $_POST['Password'];
					if(!$_POST['Username'] == "" && !$_POST['Password'] == "") {
						// echo("Account created successfully");
						// if (isset($_POST['login'])) { 
							header('Location: login.php');
							exit();
						// }			
						
					}
				}
		?>
	
		
	</main>
	
</body>
</html>
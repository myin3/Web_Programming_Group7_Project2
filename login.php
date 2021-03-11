<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="jeopardystyle.css">
	<title>Login Page</title>
	<meta charset="utf-8">
</head>
<body>

<?php

	session_start();


	if(isset($_POST["submit"])){


		$_SESSION['Username'] = isset($_POST['Username']) ? $_POST["Username"] : '';
		$_SESSION['Password'] = isset($_POST['Password']) ? $_POST['Password'] : '';

		if (isset($_SESSION['Username']) && isset($_SESSION['Password'])){
			$_SESSION['Points'] = 0;
			header("location: jeopardyMain.php");
			exit;
		} else {
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}

	}

?>

<form method="post" name="Login">
    <?php 
	    if(isset($msg)){
			echo $msg;
		} 
	?>
    <h1>Login</h1>
    <label class="left" for="Username">Username</label>
    <input name="Username" type="text"/>
    <br/>
    <label class="left" for="Password">Password</label>
    <input name="Password" type="password"/>
    <br/>
    <br/>
    <input name="submit" type="submit" value="Login"/>
    <br/><br/>
    <a href="signup.php" class="signup">Sign Up Here!</a>
</form>
</body>
</html>
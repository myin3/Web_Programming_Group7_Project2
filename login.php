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
	echo("Account created successfully");
	$Username= $_SESSION['Username'];
	$Password= $_SESSION['Password'];
	$usernameErr = $passwordErr = "";
	$loginUser = $loginPass = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if($_POST['loginUser'] != $Username) {
			$usernameErr = "Username is incorrect";
		}
		if($_POST['loginPass'] != $Password) {
			$passwordErr = "Password is incorrect";
			}
	}		
?>

<form method="post" name="Login">
    <h1>Login</h1>
    <label class="left" for="Username">Username</label>
    <input name="loginUser" type="text"/>
	<span class="error"><?php echo $usernameErr;?></span>
    <br/>
    <label class="left" for="Password">Password</label>
    <input name="loginPass" type="password"/>
	<span class="error"><?php echo $passwordErr;?></span>
    <br/>
    <br/>
    <input name="submit" type="submit" value="Login"/>
    <br/><br/>
    <a href="signup.php" class="signup">Sign Up Here!</a>
	
	<?php 
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if($_POST['loginUser']==$Username && $_POST['loginPass']==$Password ) {
					header('Location: jeopardyMain.php');
					exit();
				}
			}			
		?>
</form>
</body>
</html>
<?php
	session_save_path("./");
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="jeopardystyle.css">
	<title>Result Page</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Game Over!</h1>

	<h2>You Scored <?php echo $_SESSION['Points']; ?> Points</h2>


	<p><a class="signup" href="signup.php"> Play Again? </a></p>
</body>
</html>
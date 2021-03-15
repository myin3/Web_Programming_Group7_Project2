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
	<h1>YOU WIN!</h1>

	<h2>Points: <?php echo $_SESSION['Points']; ?></h2>

	<p><a href="signup.php"> Play Again? </a></p>
</body>
</html>
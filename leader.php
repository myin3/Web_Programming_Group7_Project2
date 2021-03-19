<!DOCTYPE html>
<html>
<head>
	<title>Leaderboard</title>
	<link rel="stylesheet" type="text/css" href="jeopardystyle.css">
</head>
<body>
	<div class="question"> 
		Leaderboard
	</div>

	<?php
		$leaderboard = array();
		$count = 0;
		$temp = array();
		$leader = file_get_contents('leader.txt');
		$leader_array = explode("\n", $leader);
		rsort($leader_array)

	?>

	<div>

		<h2><?php echo "1: ".$leader_array[0]; ?></h2>
		<h2><?php echo "2: ".$leader_array[1]; ?></h2>
		<h2><?php echo "3: ".$leader_array[2]; ?></h2>

	</div>

	<a class="signup" href="signup.php"> Return to Sign up Page </a>

</body>
</html>
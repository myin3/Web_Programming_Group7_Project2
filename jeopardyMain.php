<?php
	session_start();
	error_reporting(E_ALL ^ E_WARNING);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jeopardy Main Page</title>
	<link rel="stylesheet" type="text/css" href="jeopardystyle.css">
</head>
<body>
	<main>
		<table>
			<tr>
				<th>HTML</th>
		    	<th>CSS</th>
		    	<th>PHP</th>
		    	<th>JavaScript</th>
		    	<th>Random</th>
			</tr>

			<tr>
				<td>
					<a href="cell1.php">
						<div>
							100
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer1"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer1"]) == "HEADER") or (trim($_POST["answer1"]) == "header")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 100);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 100);
									}
								}
								$_POST["answer1"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell2.php">
						<div>
							100
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer2"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer2"]) == "PADDING") or (trim($_POST["answer2"]) == "padding")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 100);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 100);
									}
								}
								$_POST["answer2"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell3.php">
						<div>
							100
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer3"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer3"]) == "<?PHP") or (trim($_POST["answer3"]) == "<?php")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 100);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 100);
									}
								}
								$_POST["answer3"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell4.php">
						<div>
							100
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer4"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer4"]) == "True") or (trim($_POST["answer4"]) == "true")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 100);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 100);
									}
								}
								$_POST["answer4"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell5.php">
						<div>
							100
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer5"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer5"]) == "B") or (trim($_POST["answer5"]) == "b")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 100);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 100);
									}
								}
								$_POST["answer5"] = "";
							?>
						</div>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="cell6.php">
						<div>
							200
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer6"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer6"]) == "TH") or (trim($_POST["answer6"]) == "th")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 200);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 200);
									}
								}
								$_POST["answer6"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell7.php">
						<div>
							200
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer7"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer7"]) == ".TEST") or (trim($_POST["answer7"]) == ".test")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 200);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 200);
									}
								}
								$_POST["answer7"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell8.php">
						<div>
							200
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer8"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer8"]) == "Echo") or (trim($_POST["answer8"]) == "echo")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 200);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 200);
									}
								}
								$_POST["answer8"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell9.php">
						<div>
							200
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer9"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer9"]) == "1995") or (trim($_POST["answer9"]) == "1995")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 200);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 200);
									}
								}
								$_POST["answer9"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell10.php">
						<div>
							200
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer10"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer10"]) == "Cascading Style Sheets") or (trim($_POST["answer10"]) == "cascading style sheets")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 200);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 200);
									}
								}
								$_POST["answer10"] = "";
							?>
						</div>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="cell11.php">
						<div>
							300
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer11"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer11"]) == "FORM CONTROLS") or (trim($_POST["answer11"]) == "form controls")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 300);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 300);
									}
								}
								$_POST["answer11"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell12.php">
						<div>
							300
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer12"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer12"]) == "THREE") or (trim($_POST["answer12"]) == "three")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 300);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 300);
									}
								}
								$_POST["answer12"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell13.php">
						<div>
							300
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer13"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer13"]) == "$") or (trim($_POST["answer13"]) == "$")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 300);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 300);
									}
								}
								$_POST["answer13"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell14.php">
						<div>
							300
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer14"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer14"]) == "Var") or (trim($_POST["answer14"]) == "var")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 300);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 300);
									}
								}
								$_POST["answer14"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell15.php">
						<div>
							300
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer15"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer15"]) == "True") or (trim($_POST["answer15"]) == "true")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 300);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 300);
									}
								}
								$_POST["answer15"] = "";
							?>
						</div>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="cell16.php">
						<div>
							400
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer16"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer16"]) == "CHECK BOX") or (trim($_POST["answer16"]) == "check box")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 400);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 400);
									}
								}
								$_POST["answer16"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell17.php">
						<div>
							400
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer17"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer17"]) == "SEMICOLON") or (trim($_POST["answer17"]) == "semicolon")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 400);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 400);
									}
								}
								$_POST["answer17"] = "";
							?>
						</div>
					</a
					></td>
				<td>
					<a href="cell18.php">
						<div>
							400
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer18"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer18"]) == "Hypertext Preprocessor") or (trim($_POST["answer18"]) == "hypertext preprocessor")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 400);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 400);
									}
								}
								$_POST["answer18"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell19.php">
						<div>
							400
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer19"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer19"]) == "False") or (trim($_POST["answer19"]) == "false")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 400);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 400);
									}
								}
								$_POST["answer18"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell20.php">
						<div>
							400
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer20"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer20"]) == "Dynamically") or (trim($_POST["answer20"]) == "dynamically")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 400);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 400);
									}
								}
								$_POST["answer20"] = "";
							?>
						</div>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="cell21.php">
						<div>
							500
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer21"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer21"]) == "HYPER TEXT MARKUP LANGUAGE") or (trim($_POST["answer21"]) == "hyper text markup language")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 500);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 500);
									}
								}
								$_POST["answer21"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell22.php">
						<div>
							500
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer22"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer22"]) == "TRANSITION") or (trim($_POST["answer22"]) == "transition")) {
									$_SESSION["Points"] = ($_SESSION["Points"] + 500);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 500);
									}
								}
								$_POST["answer22"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell23.php">
						<div>
							500
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer23"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer23"]) == "Post") or (trim($_POST["answer23"]) == "post")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 500);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 500);
									}
								}
								$_POST["answer23"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell24.php">
						<div>
							500
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer24"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer24"]) == "Value") or (trim($_POST["answer24"]) == "value")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 500);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 500);
									}
								}
								$_POST["answer24"] = "";
							?>
						</div>
					</a>
				</td>
				<td>
					<a href="cell25.php">
						<div>
							500
							<?php
							//Conditional to make sure that only the question just answered is accounted for.
								if ($_POST["answer25"] != "") {
									/*
										CHANGE THE SECOND PART OF THE CONDITIONALS "YES" and "yes" to the correct answer so that it's case insensitive.
									*/
									if ((trim($_POST["answer25"]) == "False") or (trim($_POST["answer25"]) == "false")) {
										$_SESSION["Points"] = ($_SESSION["Points"] + 500);
									}
									else{
										$_SESSION["Points"] = ($_SESSION["Points"] - 500);
									}
								}
								$_POST["answer25"] = "";
							?>
						</div>
					</a>
				</td>
			</tr>
		</table>
		<!-- Code for Scoreboard to show at the bottom of the screen -->
		<div class="scoreboard">
			<ul class="no-dot">
				<li><span class="score">ScoreBoard</span></li>
				<li><?php print($_SESSION['Username'].': '.$_SESSION['Points']); ?></li>
			</ul>
		</div>
	</main>
</body>
</html>
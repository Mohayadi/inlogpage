<?php
include 'DBconnection.php';
$register_id = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Document</title>
	<style>
		form {
			text-align: center;
			background-color: wheat;
			padding: 50px;
			border-radius: 20px;
		}
		form input {
			padding: 10px;
			text-align: center;
			border-radius: 20px;
			margin-bottom: 20px;
		}
		body {
			background-color: burlywood;
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		button {
		background-color: transparent;
		transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
		border-radius: 20px;
		font-size: larger;
		}

		button:disabled {
		pointer-events: none;
		}

		button:hover {
		color: #fff;
		background-color: #1A1A1A;
		box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
		transform: translateY(-2px);
		}

		button:active {
		box-shadow: none;
		transform: translateY(0);
		}

	</style>
</head>
<body>
	<h1>Registreer hier</h1>
	<br>
	<form method="GET">
		<label>Naam*:</label>
		<br>
		<input type="text" name="first_name" placeholder="type..." required>
		<br>
		<label>Tussenvoegsel</label>
		<br>
		<input type="text" name="tussenvoegsel" placeholder="type...">
		<br>
		<label>Achternaam*:</label>
		<br>
		<input type="text" name="last_name" placeholder="type..." required>
		<br>
		<label>Email*:</label>
		<br>
		<input type="email" name="email" placeholder="Email" required>
		<br>
		<label>Herhaal*:</label>
		<br>
		<input type="email" name="H_email" placeholder="Email" required>
		<br>
		<label>Wachtwoord*:</label>
		<br>
		<input type="password" name="pass" placeholder="Wachtwoord" required>
		<br>
		<label>Herhaal*:</label>
		<br>
		<input type="password" name="H_pass" placeholder="Wachtwoord" required>
		<br>
		<button type="submit" name="Aanmelden">Registreer nu!</button>
		<br>
		<a href="signup.php">Al een account? Klik hier!</a>
	</form>
</body>
</html>
<?php

if (isset($_GET['Aanmelden'])) {
	$email = $_GET['email'];
	if(!empty(isset($_GET['email'])) && isset($_GET['email'])){
		function checkEmail($pdo, $emailInput){

			$query = "SELECT email FROM user_info WHERE email='$emailInput'";
			$result = $pdo->query($query);
			if ($result->num_rows > 0) {
				echo "<p style='color:red'>This Email is alredy exists </p>";
			}
	$emailInput= $_GET['email'];
	checkEmail($pdo, $emailInput);

	}
}
	if($bestaand_email) {
		echo 'Deze email bestaat al! Probeer een andere email.';
	} else {
		$first_name = $_GET['first_name'];
		$T_voegsel = $_GET['tussenvoegsel'];
		$last_name = $_GET['last_name'];
		$email = $_GET['email'];
		$pass = $_GET['pass'];
		$H_email = $_GET['H_email'];
		$H_pass = $_GET['H_pass'];
		if ($H_email == $email && $H_pass == $pass) {
			$query = "INSERT INTO register (first_name, tussenVoegsel, last_name, email, pass)
						VALUES (:first_name, :tussenVoegsel, :last_name, :email, :pass)";
			$run = $pdo->prepare($query);
			$data = [
				':first_name' => $first_name,
				':tussenVoegsel' => $T_voegsel,
				':last_name' => $last_name,
				':email' => $email,
				':pass' => $pass
			];
			$exec = $run->execute($data);
			$register_id = $pdo->lastInsertId();
			$query2 = "INSERT INTO user_info (email, pass, register_id)
						VALUES (:H_email, :H_pass, :register_id)";
			$run2 = $pdo->prepare($query2);
			$data2 = [
				':H_email' => $H_email,
				':H_pass' => $H_pass,
				':register_id' => $register_id
			];
			$exec2 = $run2->execute($data2);
			$_SESSION['register_id'] = $register_id;
			header('Location: signup.php');
		} else {
			echo 'email of wachtwoord matcht niet met de vooraf gegeven informatie <br>';
			echo 'PROBEER OPNIEUW!';
		}
	}
}
?>

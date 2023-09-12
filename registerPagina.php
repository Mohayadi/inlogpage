<?php
include 'DBconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Registreer hier</h1>
	<br>
	<form method="GET">
		<label>Naam:</label>
		<br>
		<input type="text" name="first_name" placeholder="type..." require>
		<br>
		<label>Tussenvoegsel</label>
		<br>
		<input type="text" name="tussenvoegsel" placeholder="type...">
		<br>
		<label>Achternaam:</label>
		<br>
		<input type="text" name="last_name" placeholder="type..." require>
		<br>
		<label>Email:</label>
		<br>
		<input type="email" name="email" placeholder="Email" require>
		<br>
		<label>Herhaal:</label>
		<br>
		<input type="email" name="H_email" placeholder="Email" require>
		<br>
		<label>Wachtwoord:</label>
		<br>
		<input type="password" name="pass" placeholder="Wachtwoord" require>
		<br>
		<label>Herhaal:</label>
		<br>
		<input type="password" name="H_pass" placeholder="Wachtwoord" require>
		<br>
		<button type="submit" name="Aanmelden">Registreer nu!</button>
	</form>
</body>
</html>
<?php

if (isset($_GET['Aanmelden'])) {
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
		$query2 = "INSERT INTO user_info (email, pass)
					VALUES (:H_email, :H_pass)";
		$run2 = $pdo->prepare($query2);
		$data2 = [
			':H_email' => $H_email,
			':H_pass' => $H_pass
		];
		$exec2 = $run2->execute($data2);
		header('Location: signup.php');
	} else {
		echo 'email of wachtwoord matcht niet met de vooraf gegeven informatie <br>';
		echo 'PROBEER OPNIEUW!';
	}
}
?>

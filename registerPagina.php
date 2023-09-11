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
		<input type="text" name="firt_name" placeholder="type...">
		<br>
		<label>Tussenvoegsel</label>
		<br>
		<input type="text" name="tussenvoegsel" placeholder="type...">
		<br>
		<label>Achternaam:</label>
		<br>
		<input type="text" name="last_name" placeholder="type...">
		<br>
		<label>Email:</label>
		<br>
		<input type="email" name="email" placeholder="Email">
		<br>
		<label>Wachtwoord:</label>
		<br>
		<input type="password" name="pass" placeholder="Wachtwoord">
		<br>
		<button type="submit" name="Aanmelden">Registreer nu!</button>
	</form>
</body>
</html>
<?php

if (isset($_GET['Aanmelden'])) {
	$first_name = $_GET['firt_name'];
	$last_name = $_GET['last_name'];
	$T_voegsel = $_GET['tussenvoegsel'];
	$email = $_GET['email'];
	$pass = $_GET['pass'];
	$query = 'INSERT INTO firt_name';
}
?>

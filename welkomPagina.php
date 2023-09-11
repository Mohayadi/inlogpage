<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Welkom op ons platform!</h1>
	<div class="buttenSection">
		<form method="GET">
		<button type="submit" name="login">Login</button>
		<br>
		<button type="submit" name="registreren">Registreer hier</button>
		</form>
	</div>
</body>
</html>
<?php

if (isset($_GET['login'])) {
	header('Location: signup.php');
}
if (isset($_GET['registreren'])) {
	header('Location: registerPagina.php');
}
?>

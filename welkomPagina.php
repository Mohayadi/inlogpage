<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			background-color: burlywood;
		}
		.welkomsPagina {
		display: flex;
		flex-direction: column;
		align-items: center;
		text-align: center;
		background-color: wheat;
		border-radius: 20px;
		margin: 50px 500px;
		}
		.buttonSection button {
			font-size: 30px;
			padding: 15px;
			border-radius: 20px;
		}
		.buttonSection {
			padding-bottom: 50px;
		}
		#buttonFirst {
			padding: 20px 75px;
		}
		#buttonSeconde {
			padding: 20px;
		}
		h1 {
			padding-top: 60px;
			padding-bottom: 100px;
		}

		button {
		background-color: transparent;
		transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
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
	<div class="welkomsPagina">
		<h1>Welkom op ons platform!</h1>
		<div class="buttonSection">
			<form method="GET">
				<button id="buttonFirst" type="submit" name="login">Login</button>
			</form>
			<form method="GET">
				<button id="buttonSeconde" type="submit" name="registreren">Registreer hier</button>
			</form>
		</div>
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


<?php

include 'DBconnection.php';
$email = '';
$password = '';
if (isset($_GET['login'])) {
	$email = $_GET['email'];
	$password = $_GET['pass'];
    $test = 'succesfully';
} else {
	echo 'error';
}
$stmt = $pdo->prepare("SELECT * FROM user_info WHERE email=:email AND pass=:pass");
$stmt->execute(['email' => $email, 'pass' => $password]);
$info = $stmt->fetch();
$register_id = $info['register_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<nav>
		<a href="HomePagina.php">Home</a>
		<a href="OverOns.php">Over Ons</a>
		<a href="Pers_Info.php?register_id=<?php echo $register_id?>">Persoonlijke Instellingen</a>
	</nav>
<h3>
	<?php

	function validtion($info, $email, $password)
	{
		$email2 = $info['email'];
		$password2 = $info['pass'];
		if ($email2 == $email && $password2 == $password) {
			$welkom = 'marhaban';
			echo $welkom;
		} else {
			header('Location: signup.php');

		}
	}
	echo validtion($info, $email, $password);
	?>
</h3>
<h1>Welkom op ons platform!</h1>
<h2>Hier bieden we u uw gefilterde content voor het kind</h2>

</body>
</html>

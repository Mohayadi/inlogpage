<?php

include 'DBconnection.php';
$email = '';
$password = '';
if (isset($_GET['login'])) {
	$email = $_GET['email'];
	$password = $_GET['pwd'];
    $test = 'succesfully';
} else {
	echo 'error';
}
$stmt = $pdo->prepare("SELECT * FROM user_info WHERE email=:email AND pass=:pwd");
$stmt->execute(['email' => $email, 'pwd' => $password]);
$info = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
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
</body>
</html>
